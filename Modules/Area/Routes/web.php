<?php

Route::bind('area', function ($id) {
    return app(Modules\Area\Repositories\AreaInterface::class)->byId($id);
});
Route::group(['prefix' => 'admin'], function()
{
    Route::group(['prefix' => 'area'], function () {
        Route::get('/', [
            'as' => 'admin.area.index',
            'uses' => 'AreaController@index'
        ]);
        Route::get('create', [
            'as' => 'admin.area.create',
            'uses' => 'AreaController@create'
        ]);
        Route::get('{area}/edit', [
            'as' => 'admin.area.edit',
            'uses' => 'AreaController@edit'
        ]);
        Route::post('/', [
            'as' => 'admin.area.store',
            'uses' => 'AreaController@store'
        ]);
        Route::put('{area}', [
            'as' => 'admin.area.update',
            'uses' => 'AreaController@update'
        ]);
        Route::get('data/table', [
            'as' => 'admin.area.datatable',
            'uses' => 'AreaController@dataTable'
        ]);
        Route::delete('{area}', [
            'as' => 'admin.area.destroy',
            'uses' => 'AreaController@destroy'
        ]);
    });
});
