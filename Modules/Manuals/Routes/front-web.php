<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('manuals')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'manuals', 'uses' => 'ManualsPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'manuals.slug', 'uses' => 'ManualsPublicController@show']);
    }
}

/*Route::group(['prefix' => 'manuals'], function()
{
    Route::get('/', 'ManualsPublicController@index');
});*/
