<?php

Route::bind('zone', function ($id) {
    return app(Modules\Zones\Repositories\ZoneInterface::class)->byId($id);
});
Route::group(['prefix' => 'admin'], function()
{
    Route::group(['prefix' => 'zones'], function () {
        Route::get('/', [
            'as' => 'admin.zones.index',
            'uses' => 'ZonesController@index'
        ]);
        Route::get('create', [
            'as' => 'admin.zones.create',
            'uses' => 'ZonesController@create'
        ]);
        Route::get('{zone}/edit', [
            'as' => 'admin.zones.edit',
            'uses' => 'ZonesController@edit'
        ]);
        Route::post('/', [
            'as' => 'admin.zones.store',
            'uses' => 'ZonesController@store'
        ]);
        Route::put('{zone}', [
            'as' => 'admin.zones.update',
            'uses' => 'ZonesController@update'
        ]);
        Route::get('data/table', [
            'as' => 'admin.zones.datatable',
            'uses' => 'ZonesController@dataTable'
        ]);
        Route::delete('{zone}', [
            'as' => 'admin.zones.destroy',
            'uses' => 'ZonesController@destroy'
        ]);
    });
});
