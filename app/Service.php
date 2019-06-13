<?php

namespace TPHST;

use Spatie\MediaLibrary\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Service extends Model implements HasMedia
{
    use HasMediaTrait;

    public function getThumbAttribute()
    {
        if ($this->getMedia('main')->isNotEmpty()) {
            return $this->getMedia('main')[0]->getUrl('thumb');
        }
        return '/img/service.jpg';
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
