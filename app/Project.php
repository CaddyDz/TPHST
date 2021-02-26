<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\{HasMedia, InteractsWithMedia};


class Project extends Model implements HasMedia
{
	use InteractsWithMedia;

	public function getThumbAttribute()
	{
		$media = $this->getMedia('main');
		if ($media->isNotEmpty()) {
			return $media[0]->getUrl('thumb');
		}
		return '/img/Project.jpg';
	}

	public function getAvatarAttribute()
	{
		$media = $this->getMedia('main');
		if ($media->isNotEmpty()) {
			return $media[0]->getUrl('avatar');
		}
		return null;
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

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	/**
	 * The attributes that should be cast to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'starting_date' => 'date',
		'finishing_date' => 'date',
	];

	/**
	 * Get the route key for the model.
	 *
	 * @return string
	 */
	public function getRouteKeyName()
	{
		return 'slug';
	}
}
