<?php

namespace TPHST;

use Spatie\MediaLibrary\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Testimony extends Model implements HasMedia
{
    use HasMediaTrait;

    public function getWitnessAvatarAttribute()
    {
        if ($this->getMedia('main')->isNotEmpty()) {
            return $this->getMedia('main')[0]->getUrl('avatar');
        }
        return 'null';
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('avatar')
            ->width(120)
            ->height(120);
    }

    public function registerMediaCollections()
    {
        $this->addMediaCollection('main')->singleFile();
    }
}
