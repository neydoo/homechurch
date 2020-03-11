<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('churches')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'churches', 'uses' => 'ChurchesPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'churches.slug', 'uses' => 'ChurchesPublicController@show']);
    }
}

/*Route::group(['prefix' => 'churches'], function()
{
    Route::get('/', 'ChurchesPublicController@index');
});*/
