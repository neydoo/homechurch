<?php

Route::bind('district', function ($id) {
    return app(Modules\Districts\Repositories\DistrictInterface::class)->byId($id);
});
Route::group(['prefix' => 'admin'], function()
{
    Route::group(['prefix' => 'districts'], function () {
        Route::get('/', [
            'as' => 'admin.districts.index',
            'uses' => 'DistrictsController@index'
        ]);
        Route::get('/state/district/{id}', [
            'as' => 'admin.districts.state',
            'uses' => 'DistrictsController@getStateDistrict'
        ]);
        Route::get('create', [
            'as' => 'admin.districts.create',
            'uses' => 'DistrictsController@create'
        ]);
        Route::get('{district}/edit', [
            'as' => 'admin.districts.edit',
            'uses' => 'DistrictsController@edit'
        ]);
        Route::post('/', [
            'as' => 'admin.districts.store',
            'uses' => 'DistrictsController@store'
        ]);
        Route::put('{district}', [
            'as' => 'admin.districts.update',
            'uses' => 'DistrictsController@update'
        ]);
        Route::get('data/table', [
            'as' => 'admin.districts.datatable',
            'uses' => 'DistrictsController@dataTable'
        ]);
        Route::delete('{district}', [
            'as' => 'admin.districts.destroy',
            'uses' => 'DistrictsController@destroy'
        ]);
    });
});
