<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('offering')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'offering', 'uses' => 'OfferingPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'offering.slug', 'uses' => 'OfferingPublicController@show']);
    }
}

/*Route::group(['prefix' => 'offering'], function()
{
    Route::get('/', 'OfferingPublicController@index');
});*/
