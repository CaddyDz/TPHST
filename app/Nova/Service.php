<?php

declare(strict_types=1);

namespace TPHST\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\{ID, Image, Textarea};
use Benjaminhirsch\NovaSlugField\{Slug, TextWithSlug};
class Service extends Resource
{
	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = 'TPHST\Service';

	/**
	 * The single value that should be used to represent the resource when being displayed.
	 *
	 * @var string
	 */
	public static $title = 'name';

	/**
	 * The columns that should be searched.
	 *
	 * @var array
	 */
	public static $search = [
		'name',
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
			ID::make()->sortable(),
			TextWithSlug::make('Nom', 'name')->sortable()
				->rules('required', 'min:3', 'max:50')
				->slug('slug'),
			Slug::make('Lien', 'slug')->hideFromIndex()->showUrlPreview(config('app.url'))
				->rules('required', 'min:3', 'max:50'),
			Textarea::make('Description'),
			Image::make('Image')->disk('public')
				->path('services')->prunable(),
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
