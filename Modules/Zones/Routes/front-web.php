<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('zones')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'zones', 'uses' => 'ZonesPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'zones.slug', 'uses' => 'ZonesPublicController@show']);
    }
}

/*Route::group(['prefix' => 'zones'], function()
{
    Route::get('/', 'ZonesPublicController@index');
});*/
