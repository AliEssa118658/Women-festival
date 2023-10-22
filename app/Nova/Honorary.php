<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Http\Requests\NovaRequest;

class Honorary extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Honorary::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
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
            ID::make(__('ID'), 'id')->sortable(),
            Select::make('Category','category')->options([
                'sports' => 'sports',
                'health' => 'medicine and health',
                'aviation' => 'aviation',
                'engineering' => 'engineering',
                'education' => 'Education',
                'media' => 'media',
                'mother' => 'ideal mother',
                'security' => 'security and defence',
                'judiciary' => 'judiciary/Public Prosecution',
                'law' => 'law/lawyer',
                'business' => 'business',
                'riding' => 'riding',
                'charitable' => 'charitable and humanitarian work',
                'environment' => 'the environment',
                'space' => 'outer space',
                'creativity' => 'creativity',
                'drama' => 'drama',
                'stage' => 'the stage',
                'art' => 'the art',
                'literature' => 'literature',
                'social' => 'social Media',
                'energy' => 'energy',
                'diplomacy' => 'diplomacy and international relations',
                'art' => 'fine Art',
                'culture' => 'the culture',
                'scientific' => 'scientific research and higher education',
                'volunteer' => 'volunteer work',
                'HR' => 'HR',
            ])->displayUsingLabels()->sortable()->rules('required'),
            Text::make('Name','name')->required(),
            Text::make('Country','country')->required()->hideFromIndex(),
            Image::make('Picture', 'image')->creationRules('required')->disk('screens')->deletable(false),
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
    public static function label()
    {
        return __('The honorees');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('Honor');
    }

    /**
     * Get the text for the create resource button.
     *
     * @return string|null
     */
    public static function createButtonLabel()
    {
        return __('Add Honor');
    }

    /**
     * Get the text for the update resource button.
     *
     * @return string|null
     */
    public static function updateButtonLabel()
    {
        return __('Save changes');
    }
}
