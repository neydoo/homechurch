<?php

Route::bind('manual', function ($id) {
    return app(Modules\Manuals\Repositories\ManualInterface::class)->byId($id);
});
Route::group(['prefix' => 'admin'], function()
{
    Route::group(['prefix' => 'manuals'], function () {
        Route::get('/', [
            'as' => 'admin.manuals.index',
            'uses' => 'ManualsController@index'
        ]);
        Route::get('create', [
            'as' => 'admin.manuals.create',
            'uses' => 'ManualsController@create'
        ]);
        Route::get('{manual}/edit', [
            'as' => 'admin.manuals.edit',
            'uses' => 'ManualsController@edit'
        ]);
        Route::post('/', [
            'as' => 'admin.manuals.store',
            'uses' => 'ManualsController@store'
        ]);
        Route::put('{manual}', [
            'as' => 'admin.manuals.update',
            'uses' => 'ManualsController@update'
        ]);
        Route::get('data/table', [
            'as' => 'admin.manuals.datatable',
            'uses' => 'ManualsController@dataTable'
        ]);
        Route::delete('{manual}', [
            'as' => 'admin.manuals.destroy',
            'uses' => 'ManualsController@destroy'
        ]);
    });
});
