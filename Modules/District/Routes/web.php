<?php

Route::bind('district', function ($id) {
    return app(Modules\District\Repositories\DistrictInterface::class)->byId($id);
});
Route::group(['prefix' => 'admin'], function()
{
    Route::group(['prefix' => 'district'], function () {
        Route::get('/', [
            'as' => 'admin.district.index',
            'uses' => 'DistrictController@index'
        ]);
        Route::get('create', [
            'as' => 'admin.district.create',
            'uses' => 'DistrictController@create'
        ]);
        Route::get('{district}/edit', [
            'as' => 'admin.district.edit',
            'uses' => 'DistrictController@edit'
        ]);
        Route::post('/', [
            'as' => 'admin.district.store',
            'uses' => 'DistrictController@store'
        ]);
        Route::put('{district}', [
            'as' => 'admin.district.update',
            'uses' => 'DistrictController@update'
        ]);
        Route::get('data/table', [
            'as' => 'admin.district.datatable',
            'uses' => 'DistrictController@dataTable'
        ]);
        Route::delete('{district}', [
            'as' => 'admin.district.destroy',
            'uses' => 'DistrictController@destroy'
        ]);
    });
});
