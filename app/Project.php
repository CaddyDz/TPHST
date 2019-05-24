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
      return '/storage/' . $media[0]->id . '/conversions/' . $media[0]->name . '-thumb.jpg';
    }
    return asset('/img/Project.jpg');
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

  public function statusInFrench($value = null)
  {
    switch ($value) {
      case 'pending':
        return 'en attendant';
        break;
      case 'in_progress':
        return 'travaux en cours';
      default:
        return 'fini';
        break;
    }
  }
}
