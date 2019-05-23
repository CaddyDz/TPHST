<?php

namespace TPHST;

use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
  public function getRouteKeyName()
  {
    return 'slug';
  }

  public function registerMediaConversions()
  {
    $this->addMediaConversion('showcase')
      ->width(368)
      ->height(232)
      ->sharpen(10);
  }
}
