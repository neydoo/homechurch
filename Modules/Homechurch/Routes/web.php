<?php

Route::bind('homechurch', function ($id) {
    return app(Modules\Homechurch\Repositories\HomechurchInterface::class)->byId($id);
});
Route::group(['prefix' => 'admin'], function()
{
    Route::group(['prefix' => 'homechurch'], function () {
        Route::get('/', [
            'as' => 'admin.homechurch.index',
            'uses' => 'HomechurchController@index'
        ]);
        Route::get('create', [
            'as' => 'admin.homechurch.create',
            'uses' => 'HomechurchController@create'
        ]);
        Route::get('{homechurch}/edit', [
            'as' => 'admin.homechurch.edit',
            'uses' => 'HomechurchController@edit'
        ]);
        Route::post('/', [
            'as' => 'admin.homechurch.store',
            'uses' => 'HomechurchController@store'
        ]);
        Route::put('{homechurch}', [
            'as' => 'admin.homechurch.update',
            'uses' => 'HomechurchController@update'
        ]);
        Route::get('data/table', [
            'as' => 'admin.homechurch.datatable',
            'uses' => 'HomechurchController@dataTable'
        ]);
        Route::delete('{homechurch}', [
            'as' => 'admin.homechurch.destroy',
            'uses' => 'HomechurchController@destroy'
        ]);
    });
});
