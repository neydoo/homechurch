<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('offerring')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'offerring', 'uses' => 'OfferringPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'offerring.slug', 'uses' => 'OfferringPublicController@show']);
    }
}

/*Route::group(['prefix' => 'offerring'], function()
{
    Route::get('/', 'OfferringPublicController@index');
});*/
