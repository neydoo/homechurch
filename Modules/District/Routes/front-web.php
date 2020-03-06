<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('district')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'district', 'uses' => 'DistrictPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'district.slug', 'uses' => 'DistrictPublicController@show']);
    }
}

/*Route::group(['prefix' => 'district'], function()
{
    Route::get('/', 'DistrictPublicController@index');
});*/
