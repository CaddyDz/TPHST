<?php

declare(strict_types=1);

use App\{Image, Setting};

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

function sluggify(string $string): string
{
	// replace non letter or digits by -
	$url = preg_replace('~[^\pL\d]+~u', '-', $string);

	// transliterate
	try {
		$url = iconv('utf-8', 'us-ascii//TRANSLIT', $url);
	} catch (Exception $ex) {
		return 'n-a';
	}

	// remove unwanted characters
	$url = preg_replace('~[^-\w]+~', '', $url);

	// trim
	$url = trim($url, '-');

	// remove duplicate -
	$url = preg_replace('~-+~', '-', $url);

	// lowercase
	$url = strtolower($url);

	if (empty($url)) {
		return 'n-a';
	}

	return $url;
}

function isAdmin($user)
{
	return in_array($user->email, [
		'dg@sarltphst.com',
		'webmaster@sarltphst.com',
	]);
}
