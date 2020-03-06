<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('groupchat')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'groupchat', 'uses' => 'GroupchatPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'groupchat.slug', 'uses' => 'GroupchatPublicController@show']);
    }
}

/*Route::group(['prefix' => 'groupchat'], function()
{
    Route::get('/', 'GroupchatPublicController@index');
});*/
