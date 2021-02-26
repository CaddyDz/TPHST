<?php

declare(strict_types=1);

namespace App\Nova;

use Illuminate\Http\Request;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Benjaminhirsch\NovaSlugField\{Slug, TextWithSlug};
use Laravel\Nova\Fields\{BelongsTo, Date, ID, Place, Select, Text, Textarea};

class Project extends Resource
{
	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = 'App\Project';

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
		'title', 'description', 'location',
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
			ID::make()->sortable()->hideFromIndex(),
			TextWithSlug::make('Titre', 'title')->sortable()
				->rules('required', 'min:3', 'max:50')
				->slug('slug'),
			Textarea::make('Description')
				->creationRules('required', 'string', 'min:8'),
			Textarea::make('Details'),
			Date::make('Date de démarrage', 'starting_date')->hideFromIndex(),
			Date::make('Date de finition', 'finishing_date')->hideFromIndex(),
			Text::make('Durée', 'duration')->hideFromIndex(),
			Select::make('Etat', 'status')->options([
				'pending' => 'en attendant',
				'in_progress' => 'travaux en cours',
				'completed' => 'fini',
			])->creationRules('required')->displayUsingLabels(),
			BelongsTo::make('Category')->searchable(),
			Place::make('Adresse', 'location')->onlyCities()->hideFromIndex(),
			Images::make('Image', 'main')
				->rules('required')
				->conversionOnIndexView('avatar')
				->conversionOnDetailView('thumb'),
			Images::make('Photos', 'projects')
				->conversionOnDetailView('thumb')
				->hideFromIndex(),
			Slug::make('Lien', 'slug')->hideFromIndex()
				->showUrlPreview(config('app.url') . '/blog')->rules('required', 'min:3', 'max:50'),
		];
	}

	/**
	 * Get the address fields for the resource.
	 *
	 * @return \Illuminate\Http\Resources\MergeValue
	 */
	protected function addressFields()
	{
		return $this->merge([
			Place::make('Address', 'address_line_1')->hideFromIndex(),
			Text::make('Address Line 2')->hideFromIndex(),
			Text::make('City')->hideFromIndex(),
			Text::make('State')->hideFromIndex(),
			Text::make('Postal Code')->hideFromIndex(),
			Country::make('Country')->hideFromIndex(),
		]);
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
