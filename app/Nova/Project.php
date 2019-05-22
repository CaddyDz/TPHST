<?php

namespace TPHST\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Place;
use Laravel\Nova\Fields\Textarea;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Select;

class Project extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'TPHST\Project';

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
            ID::make()->sortable(),
            Text::make('Titre', 'title'),
            Textarea::make('Description')
                ->creationRules('required', 'string', 'min:6'),
            Textarea::make('Details'),
            Date::make('Date de démarrage', 'starting_date')->hideFromIndex(),
            Date::make('Date de finition', 'finishing_date')->hideFromIndex(),
            Text::make('Durée', 'duration')->hideFromIndex(),
            Select::make('Etat', 'status')->options([
                'pending' => 'en attendant',
                'in_progress' => 'travaux en cours',
                'completed' => 'fini',
            ]),
            Place::make('Adresse', 'location')->onlyCities(),
            Images::make('Images', 'images')->hideFromIndex(),
            Image::make('Image ')->disk('public')
                ->path('projects'),
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
