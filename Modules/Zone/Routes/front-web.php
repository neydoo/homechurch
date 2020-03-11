<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('zone')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'zone', 'uses' => 'ZonePublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'zone.slug', 'uses' => 'ZonePublicController@show']);
    }
}

/*Route::group(['prefix' => 'zone'], function()
{
    Route::get('/', 'ZonePublicController@index');
});*/
