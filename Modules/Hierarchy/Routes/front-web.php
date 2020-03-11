<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('hierarchy')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'hierarchy', 'uses' => 'HierarchyPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'hierarchy.slug', 'uses' => 'HierarchyPublicController@show']);
    }
}

/*Route::group(['prefix' => 'hierarchy'], function()
{
    Route::get('/', 'HierarchyPublicController@index');
});*/
