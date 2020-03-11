<?php

Route::bind('area', function ($id) {
    return app(Modules\Areas\Repositories\AreaInterface::class)->byId($id);
});
Route::group(['prefix' => 'admin'], function()
{
    Route::group(['prefix' => 'areas'], function () {
        Route::get('/', [
            'as' => 'admin.areas.index',
            'uses' => 'AreasController@index'
        ]);
        Route::get('/zone/area/{id}', [
            'as' => 'admin.areas.zone',
            'uses' => 'AreasController@getZoneArea'
        ]);
        Route::get('create', [
            'as' => 'admin.areas.create',
            'uses' => 'AreasController@create'
        ]);
        Route::get('{area}/edit', [
            'as' => 'admin.areas.edit',
            'uses' => 'AreasController@edit'
        ]);
        Route::post('/', [
            'as' => 'admin.areas.store',
            'uses' => 'AreasController@store'
        ]);
        Route::put('{area}', [
            'as' => 'admin.areas.update',
            'uses' => 'AreasController@update'
        ]);
        Route::get('data/table', [
            'as' => 'admin.areas.datatable',
            'uses' => 'AreasController@dataTable'
        ]);
        Route::delete('{area}', [
            'as' => 'admin.areas.destroy',
            'uses' => 'AreasController@destroy'
        ]);
    });
});
