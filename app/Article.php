<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\{HasMedia, InteractsWithMedia};

class Article extends Model implements HasMedia
{
	use HasFactory, InteractsWithMedia;

	public function getThumbAttribute()
	{
		if ($this->getMedia('main')->isNotEmpty()) {
			return $this->getMedia('main')[0]->getUrl('thumb');
		}
		return '/img/article.jpg';
	}

	public function registerMediaConversions(Media $media = null): void
	{
		// Background image for the article view 1920x500
		$this->addMediaConversion('thumb')
			->width(700)
			->height(700);
		$this->addMediaConversion('avatar')
			->width(32)
			->height(32);
	}

	public function registerMediaCollections(): void
	{
		$this->addMediaCollection('main')->singleFile();
	}

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function getRouteKeyName()
	{
		return 'slug';
	}
}
