<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('faqs')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'faqs', 'uses' => 'FaqsPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'faqs.slug', 'uses' => 'FaqsPublicController@show']);
    }
}

/*Route::group(['prefix' => 'faqs'], function()
{
    Route::get('/', 'FaqsPublicController@index');
});*/
