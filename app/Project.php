<?php

namespace TPHST;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Project extends Model implements HasMedia
{
  use HasMediaTrait;


  public function getStatusAttribute($value)
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
