<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('regions')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'regions', 'uses' => 'RegionsPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'regions.slug', 'uses' => 'RegionsPublicController@show']);
    }
}

/*Route::group(['prefix' => 'regions'], function()
{
    Route::get('/', 'RegionsPublicController@index');
});*/
