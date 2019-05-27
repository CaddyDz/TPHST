<?php

namespace Spatie\MediaLibrary\Tests\Unit\PathGenerator;

use Illuminate\Support\Str;
use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\PathGenerator\PathGenerator;

class CustomPathGenerator implements PathGenerator
{
    public function getPath(Media $media): string
    {
        $folder = Str::plural(strtolower(class_basename($media->model_type)));
        return $folder . '/' . md5($media->id) . '/';
    }

    public function getPathForConversions(Media $media): string
    {
        return $this->getPath($media) . 'converted/';
    }

    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->getPath($media) . 'cropped/';
    }
}
