<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('announcements')) {
    $options = [];
    if ($uri = $page->uri) {
        // Route::group(['middleware'=>config('myapp.middleware.account')], function () use($uri, $options) {
            Route::get($uri, $options + ['as' => 'announcements', 'uses' => 'AnnouncementsPublicController@index']);
            Route::get($uri.'/{slug}', $options +  ['as' => 'announcements.slug', 'uses' => 'AnnouncementsPublicController@show']);
        // });
    }
}
