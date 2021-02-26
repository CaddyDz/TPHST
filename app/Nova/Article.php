<?php

declare(strict_types=1);

namespace App\Nova;

use Illuminate\Http\Request;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Benjaminhirsch\NovaSlugField\{Slug, TextWithSlug};
use Laravel\Nova\Fields\{BelongsTo, ID, Textarea, Trix};

class Article extends Resource
{
	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = 'App\Article';

	/**
	 * The single value that should be used to represent the resource when being displayed.
	 *
	 * @var string
	 */
	public static $title = 'title';

	/**
	 * The columns that should be searched.
	 *
	 * @var array
	 */
	public static $search = [
		'title', 'excerpt', 'body'
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
			TextWithSlug::make('Titre', 'title')->sortable()
				->rules('required', 'min:3', 'max:100')
				->slug('slug'),
			Textarea::make('Extrait', 'excerpt')->rules('required', 'min:10', 'max:500')->hideFromIndex(),
			Trix::make('Body')->rules('required', 'min:10'),
			BelongsTo::make('Category')->searchable()->nullable(),
			Images::make('Image', 'main') // second parameter is the media collection name
				->conversionOnIndexView('avatar') // conversion used to display the image
				->rules('required'), // validation rules
			// BelongsToMany::make('Tags')->searchable(),
			Slug::make('Lien', 'slug')->hideFromIndex()
				->showUrlPreview(config('app.url') . '/blog')->rules('required', 'min:3', 'max:100'),
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
