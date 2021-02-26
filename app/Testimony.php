<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\{HasMedia, InteractsWithMedia};

class Testimony extends Model implements HasMedia
{
	use InteractsWithMedia;

	public function getWitnessAvatarAttribute()
	{
		if ($this->getMedia('main')->isNotEmpty()) {
			return $this->getMedia('main')[0]->getUrl('avatar');
		}
		return 'null';
	}

	public function registerMediaConversions(Media $media = null): void
	{
		$this->addMediaConversion('avatar')
			->width(120)
			->height(120);
	}

	public function registerMediaCollections(): void
	{
		$this->addMediaCollection('main')->singleFile();
	}
}
