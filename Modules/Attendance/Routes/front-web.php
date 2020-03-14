<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('attendance')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'attendance', 'uses' => 'AttendancePublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'attendance.slug', 'uses' => 'AttendancePublicController@show']);
    }
}

/*Route::group(['prefix' => 'attendance'], function()
{
    Route::get('/', 'AttendancePublicController@index');
});*/
