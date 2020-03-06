<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('announcements')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'announcements', 'uses' => 'AnnouncementsPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'announcements.slug', 'uses' => 'AnnouncementsPublicController@show']);
    }
}

/*Route::group(['prefix' => 'announcements'], function()
{
    Route::get('/', 'AnnouncementsPublicController@index');
});*/
