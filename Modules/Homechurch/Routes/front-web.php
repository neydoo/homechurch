<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('homechurch')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'homechurch', 'uses' => 'HomechurchPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'homechurch.slug', 'uses' => 'HomechurchPublicController@show']);
    }
}

/*Route::group(['prefix' => 'homechurch'], function()
{
    Route::get('/', 'HomechurchPublicController@index');
});*/
