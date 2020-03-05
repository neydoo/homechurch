<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('newsletters')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'newsletters', 'uses' => 'NewslettersPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'newsletters.slug', 'uses' => 'NewslettersPublicController@show']);
    }
}

/*Route::group(['prefix' => 'newsletters'], function()
{
    Route::get('/', 'NewslettersPublicController@index');
});*/
