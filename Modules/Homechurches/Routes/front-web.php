<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('homechurches')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'homechurches', 'uses' => 'HomechurchesPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'homechurches.slug', 'uses' => 'HomechurchesPublicController@show']);
    }
}

Route::group(['prefix' => 'homechurches'], function()
{
    // Route::get('/', 'HomechurchesPublicController@index');
    Route::post('/store', [
        'as' => 'homechurches.store',
        'uses' => 'HomechurchesPublicController@store'
    ]);

    Route::post('/add/user',[
        'as' => 'homechurches.adduser',
        'uses' => 'HomechurchesPublicController@assigntochurch']);
});
