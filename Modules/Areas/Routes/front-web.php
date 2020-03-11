<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('areas')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'areas', 'uses' => 'AreasPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'areas.slug', 'uses' => 'AreasPublicController@show']);
    }
}

/*Route::group(['prefix' => 'areas'], function()
{
    Route::get('/', 'AreasPublicController@index');
});*/
