<?php

Route::bind('offering', function ($id) {
    return app(Modules\Offering\Repositories\OfferingInterface::class)->byId($id);
});
Route::group(['prefix' => 'admin'], function()
{
    Route::group(['prefix' => 'offering'], function () {
        Route::get('/', [
            'as' => 'admin.offering.index',
            'uses' => 'OfferingController@index'
        ]);
        Route::get('create', [
            'as' => 'admin.offering.create',
            'uses' => 'OfferingController@create'
        ]);
        Route::get('{offering}/edit', [
            'as' => 'admin.offering.edit',
            'uses' => 'OfferingController@edit'
        ]);
        Route::post('/', [
            'as' => 'admin.offering.store',
            'uses' => 'OfferingController@store'
        ]);
        Route::put('{offering}', [
            'as' => 'admin.offering.update',
            'uses' => 'OfferingController@update'
        ]);
        Route::get('data/table', [
            'as' => 'admin.offering.datatable',
            'uses' => 'OfferingController@dataTable'
        ]);
        Route::delete('{offering}', [
            'as' => 'admin.offering.destroy',
            'uses' => 'OfferingController@destroy'
        ]);
        Route::post('print', [
            'as' => 'admin.offering.print',
            'uses' => 'OfferingController@printData'
        ]);
    });
});
