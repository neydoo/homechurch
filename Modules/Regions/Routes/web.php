<?php

Route::bind('region', function ($id) {
    return app(Modules\Regions\Repositories\RegionInterface::class)->byId($id);
});
Route::group(['prefix' => 'admin'], function()
{
    Route::group(['prefix' => 'regions'], function () {
        Route::get('/', [
            'as' => 'admin.regions.index',
            'uses' => 'RegionsController@index'
        ]);
        Route::get('/country/region/{id}', [
            'as' => 'admin.regions.country',
            'uses' => 'RegionsController@getCountryRegion'
        ]);
        Route::get('/country', [
            'as' => 'admin.regions.search',
            'uses' => 'RegionsController@search'
        ]);
        Route::get('create', [
            'as' => 'admin.regions.create',
            'uses' => 'RegionsController@create'
        ]);
        Route::get('{region}/edit', [
            'as' => 'admin.regions.edit',
            'uses' => 'RegionsController@edit'
        ]);
        Route::post('/', [
            'as' => 'admin.regions.store',
            'uses' => 'RegionsController@store'
        ]);
        Route::put('{region}', [
            'as' => 'admin.regions.update',
            'uses' => 'RegionsController@update'
        ]);
        Route::get('data/table', [
            'as' => 'admin.regions.datatable',
            'uses' => 'RegionsController@dataTable'
        ]);
        Route::delete('{region}', [
            'as' => 'admin.regions.destroy',
            'uses' => 'RegionsController@destroy'
        ]);
    });
});
