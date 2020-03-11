<?php

Route::bind('church', function ($id) {
    return app(Modules\Churches\Repositories\ChurchInterface::class)->byId($id);
});
Route::group(['prefix' => 'admin'], function()
{
    Route::group(['prefix' => 'churches'], function () {
        Route::get('/', [
            'as' => 'admin.churches.index',
            'uses' => 'ChurchesController@index'
        ]);
        Route::get('create', [
            'as' => 'admin.churches.create',
            'uses' => 'ChurchesController@create'
        ]);
        Route::get('{church}/edit', [
            'as' => 'admin.churches.edit',
            'uses' => 'ChurchesController@edit'
        ]);
        Route::post('/', [
            'as' => 'admin.churches.store',
            'uses' => 'ChurchesController@store'
        ]);
        Route::put('{church}', [
            'as' => 'admin.churches.update',
            'uses' => 'ChurchesController@update'
        ]);
        Route::get('data/table', [
            'as' => 'admin.churches.datatable',
            'uses' => 'ChurchesController@dataTable'
        ]);
        Route::delete('{church}', [
            'as' => 'admin.churches.destroy',
            'uses' => 'ChurchesController@destroy'
        ]);
    });
});
