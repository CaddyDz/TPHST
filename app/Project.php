<?php

namespace TPHST;

use Spatie\MediaLibrary\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Project extends Model implements HasMedia
{
    use HasMediaTrait;

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

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
          ->width(700)
          ->height(700);
        $this->addMediaConversion('avatar')
          ->width(32)
          ->height(32);
    }

    public function registerMediaCollections()
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
