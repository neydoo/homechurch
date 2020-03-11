<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('districts')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'districts', 'uses' => 'DistrictsPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'districts.slug', 'uses' => 'DistrictsPublicController@show']);
    }
}

/*Route::group(['prefix' => 'districts'], function()
{
    Route::get('/', 'DistrictsPublicController@index');
});*/
