<?php

declare(strict_types=1);

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\{Text, Textarea};
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;

class Testimony extends Resource
{
	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = 'App\Testimony';

	/**
	 * The single value that should be used to represent the resource when being displayed.
	 *
	 * @var string
	 */
	public static $title = 'body';

	/**
	 * The columns that should be searched.
	 *
	 * @var array
	 */
	public static $search = [
		'body', 'witness_name', 'witness_position'
	];

	/**
	 * Get the fields displayed by the resource.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function fields(Request $request)
	{
		return [
			Text::make('Witness Name')->creationRules('required', 'min:3', 'max:50'),
			Text::make('Witness Position')->creationRules('required'),
			Textarea::make('Body')->creationRules('required', 'min:10', 'max:500'),
			Images::make('Image', 'main') // second parameter is the media collection name
				->conversionOnIndexView('avatar') // conversion used to display the image
				->rules('required'), // validation rules
		];
	}

	/**
	 * Get the cards available for the request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function cards(Request $request)
	{
		return [];
	}

	/**
	 * Get the filters available for the resource.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function filters(Request $request)
	{
		return [];
	}

	/**
	 * Get the lenses available for the resource.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function lenses(Request $request)
	{
		return [];
	}

	/**
	 * Get the actions available for the resource.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function actions(Request $request)
	{
		return [];
	}
}
