<?php

use TPHST\Image;
use TPHST\Setting;

/**
 * return settings values
 *
 * Retreive setting value from database
 *
 * @param string $key Key name
 * @return string $value accompanying value
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

function isAdmin($user)
{
    return in_array($user->email, [
        'dg@sarltphst.com',
        'webmaster@sarltphst.com',
    ]);
}
