<?php

use Illuminate\Support\Facades\Route;

Route::bind('newsletter', function ($id) {
    return app(Modules\Newsletters\Repositories\NewsletterInterface::class)->byId($id);
});

Route::group(['prefix' => 'newsletters'], function () {
    Route::get('/', [
        'as' => 'admin.newsletters.index',
        'uses' => 'NewslettersController@index'
    ]);
    Route::get('create', [
        'as' => 'admin.newsletters.create',
        'uses' => 'NewslettersController@create'
    ]);
    Route::get('{newsletter}/edit', [
        'as' => 'admin.newsletters.edit',
        'uses' => 'NewslettersController@edit'
    ]);
    Route::post('/', [
        'as' => 'admin.newsletters.store',
        'uses' => 'NewslettersController@store'
    ]);
    Route::put('{newsletter}', [
        'as' => 'admin.newsletters.update',
        'uses' => 'NewslettersController@update'
    ]);
    Route::get('datatable', [
        'as' => 'admin.newsletters.datatable',
        'uses' => 'NewslettersController@dataTable'
    ]);
    Route::delete('{newsletter}', [
        'as' => 'admin.newsletters.destroy',
        'uses' => 'NewslettersController@destroy'
    ]);    
});
