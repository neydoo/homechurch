<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('groupchats')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'groupchats', 'uses' => 'GroupchatsPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'groupchats.slug', 'uses' => 'GroupchatsPublicController@show']);
    }
}

/*Route::group(['prefix' => 'groupchats'], function()
{
    Route::get('/', 'GroupchatsPublicController@index');
});*/
