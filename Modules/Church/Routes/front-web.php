<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('church')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'church', 'uses' => 'ChurchPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'church.slug', 'uses' => 'ChurchPublicController@show']);
    }
}

/*Route::group(['prefix' => 'church'], function()
{
    Route::get('/', 'ChurchPublicController@index');
});*/
