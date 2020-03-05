<?php

use Illuminate\Support\Facades\Route;

Route::bind('partner', function ($id) {
    return app(Modules\Partners\Repositories\PartnerInterface::class)->byId($id);
});

Route::group(['prefix' => 'partners'], function () {
    Route::get('/', [
        'as' => 'admin.partners.index',
        'uses' => 'PartnersController@index'
    ]);
    Route::get('create', [
        'as' => 'admin.partners.create',
        'uses' => 'PartnersController@create'
    ]);
    Route::get('{partner}/edit', [
        'as' => 'admin.partners.edit',
        'uses' => 'PartnersController@edit'
    ]);
    Route::post('/', [
        'as' => 'admin.partners.store',
        'uses' => 'PartnersController@store'
    ]);
    Route::put('{partner}', [
        'as' => 'admin.partners.update',
        'uses' => 'PartnersController@update'
    ]);
    Route::get('datatable', [
        'as' => 'admin.partners.datatable',
        'uses' => 'PartnersController@dataTable'
    ]);
    Route::delete('{partner}', [
        'as' => 'admin.partners.destroy',
        'uses' => 'PartnersController@destroy'
    ]);
});
