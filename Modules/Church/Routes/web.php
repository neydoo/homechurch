<?php

Route::bind('church', function ($id) {
    return app(Modules\Church\Repositories\ChurchInterface::class)->byId($id);
});
Route::group(['prefix' => 'admin'], function()
{
    Route::group(['prefix' => 'church'], function () {
        Route::get('/', [
            'as' => 'admin.church.index',
            'uses' => 'ChurchController@index'
        ]);
        Route::get('create', [
            'as' => 'admin.church.create',
            'uses' => 'ChurchController@create'
        ]);
        Route::get('{church}/edit', [
            'as' => 'admin.church.edit',
            'uses' => 'ChurchController@edit'
        ]);
        Route::post('/', [
            'as' => 'admin.church.store',
            'uses' => 'ChurchController@store'
        ]);
        Route::put('{church}', [
            'as' => 'admin.church.update',
            'uses' => 'ChurchController@update'
        ]);
        Route::get('data/table', [
            'as' => 'admin.church.datatable',
            'uses' => 'ChurchController@dataTable'
        ]);
        Route::delete('{church}', [
            'as' => 'admin.church.destroy',
            'uses' => 'ChurchController@destroy'
        ]);
    });
});
