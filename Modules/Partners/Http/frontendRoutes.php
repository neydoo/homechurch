<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('partners')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'partners', 'uses' => 'PartnersPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'partners.slug', 'uses' => 'PartnersPublicController@show']);
    }
}

/*Route::group(['prefix' => 'partners'], function()
{
    Route::get('/', 'PartnersPublicController@index');
});*/
