<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\{HasMedia, InteractsWithMedia};

class Service extends Model implements HasMedia
{
	use InteractsWithMedia;

	public function getThumbAttribute()
	{
		if ($this->getMedia('main')->isNotEmpty()) {
			return $this->getMedia('main')[0]->getUrl('thumb');
		}
		return '/img/service.jpg';
	}

	public function registerMediaConversions(Media $media = null): void
	{
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

	public function getRouteKeyName()
	{
		return 'slug';
	}

	public function brochures()
	{
		return $this->hasMany(Brochures::class);
	}

	public function review()
	{
		return $this->hasOne(Testimony::class);
	}
}
