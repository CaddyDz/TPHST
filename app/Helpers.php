<?php

use TPHST\Image;
use TPHST\Setting;

/**
 * return settings values
 *
 * Undocumented function long description
 *
 * @param Type $var Description
 * @return type
 * @throws conditon
 **/
function setting($key)
{
    return optional(Setting::where('key', $key)->first())->value;
}

function image($name)
{
    return optional(Image::where('name', $name)->first())->path ?? "/img/$name.jpg";
}

function sluggify($string)
{
    $url = trim($string);
    $url = strtolower($url);
    $url = preg_replace('|[^a-z-A-Z\p{Arabic}0-9 _]|iu', '', $url);
    $url = preg_replace('/\s+/', ' ', $url);
    $url = str_replace(' ', '-', $url);
    return $url;
}
