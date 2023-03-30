<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Http\Requests\NovaRequest;

class Product extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Product>
     */
    public static $model = \App\Models\Product::class;

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
        'id','title','title_en'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('商品名稱','title')->sortable(),
            // Text::make('Title(en)','title_en'),
            Trix::make('商品資訊','body'),
            Trix::make('Info(en)','body_en'),
            BelongsTo::make('brand')->sortable(),
            BelongsTo::make('category')->sortable(),
            Image::make('商品封面','cover'),
            Image::make('商品圖片1','img_1')->hideFromIndex(),
            Image::make('商品圖片2','img_2')->hideFromIndex(),
            Image::make('商品圖片3','img_3')->hideFromIndex(),
            Image::make('商品圖片4','img_4')->hideFromIndex(),
            Image::make('商品圖片5','img_5')->hideFromIndex(),
            Image::make('商品圖片6','img_6')->hideFromIndex(),
            Image::make('商品圖片7','img_7')->hideFromIndex(),
            Image::make('商品圖片8','img_8')->hideFromIndex(),
            Image::make('Cover(en)','cover_en')->hideFromIndex(),
            Text::make('應用車型','car')->hideFromIndex()->sortable(),
            Text::make('Car(en)','car_en')->hideFromIndex(),
            Text::make('排序','sort'),
            Text::make('Sort(en)','sort_en')
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
