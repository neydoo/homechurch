<?php

Route::bind('offerring', function ($id) {
    return app(Modules\Offerring\Repositories\OfferringInterface::class)->byId($id);
});
Route::group(['prefix' => 'admin'], function()
{
    Route::group(['prefix' => 'offerring'], function () {
        Route::get('/', [
            'as' => 'admin.offerring.index',
            'uses' => 'OfferringController@index'
        ]);
        Route::get('create', [
            'as' => 'admin.offerring.create',
            'uses' => 'OfferringController@create'
        ]);
        Route::get('{offerring}/edit', [
            'as' => 'admin.offerring.edit',
            'uses' => 'OfferringController@edit'
        ]);
        Route::post('/', [
            'as' => 'admin.offerring.store',
            'uses' => 'OfferringController@store'
        ]);
        Route::put('{offerring}', [
            'as' => 'admin.offerring.update',
            'uses' => 'OfferringController@update'
        ]);
        Route::get('data/table', [
            'as' => 'admin.offerring.datatable',
            'uses' => 'OfferringController@dataTable'
        ]);
        Route::delete('{offerring}', [
            'as' => 'admin.offerring.destroy',
            'uses' => 'OfferringController@destroy'
        ]);
    });
});
