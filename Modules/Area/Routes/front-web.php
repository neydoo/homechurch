<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('area')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'area', 'uses' => 'AreaPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'area.slug', 'uses' => 'AreaPublicController@show']);
    }
}

/*Route::group(['prefix' => 'area'], function()
{
    Route::get('/', 'AreaPublicController@index');
});*/
