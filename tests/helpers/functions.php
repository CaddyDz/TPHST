<?php

declare(strict_types=1);

function create($model, $properties = [], $method = 'create', $times = null)
{
	return factory($model, $times)->$method($properties);
}
