<?php

use Illuminate\Support\Facades\Route;

Route::bind('faq', function ($id) {
    return app(Modules\Faqs\Repositories\FaqInterface::class)->byId($id);
});

Route::group(['prefix' => 'faqs'], function () {
    Route::get('/', [
        'as' => 'admin.faqs.index',
        'uses' => 'FaqsController@index'
    ]);
    Route::get('create', [
        'as' => 'admin.faqs.create',
        'uses' => 'FaqsController@create'
    ]);
    Route::get('{faq}/edit', [
        'as' => 'admin.faqs.edit',
        'uses' => 'FaqsController@edit'
    ]);
    Route::post('/', [
        'as' => 'admin.faqs.store',
        'uses' => 'FaqsController@store'
    ]);
    Route::put('{faq}', [
        'as' => 'admin.faqs.update',
        'uses' => 'FaqsController@update'
    ]);
    Route::get('datatable', [
        'as' => 'admin.faqs.datatable',
        'uses' => 'FaqsController@dataTable'
    ]);
    Route::delete('{faq}', [
        'as' => 'admin.faqs.destroy',
        'uses' => 'FaqsController@destroy'
    ]);
});
