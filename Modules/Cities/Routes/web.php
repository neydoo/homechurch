<?php

Route::bind('city', function ($id) {
    return app(Modules\Cities\Repositories\CityInterface::class)->byId($id);
});

Route::group(['prefix' => 'admin'], function()
{
    Route::group(['prefix' => 'cities'], function()
    {
        Route::get('/', [
            'as' => 'admin.cities.index',
            'uses' => 'citiesController@index'
        ]);
        Route::get('create', [
            'as' => 'admin.cities.create',
            'uses' => 'citiesController@create'
        ]);
        Route::get('{city}/edit', [
            'as' => 'admin.cities.edit',
            'uses' => 'citiesController@edit'
        ]);
        Route::post('/', [
            'as' => 'admin.cities.store',
            'uses' => 'citiesController@store'
        ]);
        Route::put('{city}', [
            'as' => 'admin.cities.update',
            'uses' => 'citiesController@update'
        ]);
        Route::get('datatable', [
            'as' => 'admin.cities.datatable',
            'uses' => 'citiesController@dataTable'
        ]);
        Route::delete('{city}', [
            'as' => 'admin.cities.destroy',
            'uses' => 'citiesController@destroy'
        ]);
    });
});
