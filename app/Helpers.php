<?php

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
