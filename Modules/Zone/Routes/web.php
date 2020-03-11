<?php

Route::bind('zone', function ($id) {
    return app(Modules\Zone\Repositories\ZoneInterface::class)->byId($id);
});
Route::group(['prefix' => 'admin'], function()
{
    Route::group(['prefix' => 'zone'], function () {
        Route::get('/', [
            'as' => 'admin.zone.index',
            'uses' => 'ZoneController@index'
        ]);
        Route::get('create', [
            'as' => 'admin.zone.create',
            'uses' => 'ZoneController@create'
        ]);
        Route::get('{zone}/edit', [
            'as' => 'admin.zone.edit',
            'uses' => 'ZoneController@edit'
        ]);
        Route::post('/', [
            'as' => 'admin.zone.store',
            'uses' => 'ZoneController@store'
        ]);
        Route::put('{zone}', [
            'as' => 'admin.zone.update',
            'uses' => 'ZoneController@update'
        ]);
        Route::get('data/table', [
            'as' => 'admin.zone.datatable',
            'uses' => 'ZoneController@dataTable'
        ]);
        Route::delete('{zone}', [
            'as' => 'admin.zone.destroy',
            'uses' => 'ZoneController@destroy'
        ]);
    });
});
