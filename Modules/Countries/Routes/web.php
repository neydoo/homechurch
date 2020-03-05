<?php

Route::bind('country', function ($id) {
    return app(Modules\Countries\Repositories\CountryInterface::class)->byId($id);
});
Route::group(['prefix' => 'admin'], function()
{
    Route::group(['prefix' => 'countries'], function()
    {
        Route::get('/', [
            'as' => 'admin.countries.index',
            'uses' => 'countriesController@index'
        ]);
        Route::get('create', [
            'as' => 'admin.countries.create',
            'uses' => 'countriesController@create'
        ]);
        Route::get('{country}/edit', [
            'as' => 'admin.countries.edit',
            'uses' => 'countriesController@edit'
        ]);
        Route::post('/', [
            'as' => 'admin.countries.store',
            'uses' => 'countriesController@store'
        ]);
        Route::put('{country}', [
            'as' => 'admin.countries.update',
            'uses' => 'countriesController@update'
        ]);
        Route::get('datatable', [
            'as' => 'admin.countries.datatable',
            'uses' => 'countriesController@dataTable'
        ]);
        Route::delete('{country}', [
            'as' => 'admin.countries.destroy',
            'uses' => 'countriesController@destroy'
        ]);
    });
});
