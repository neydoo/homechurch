<?php

use Illuminate\Support\Facades\Route;

if ($page = \MyApp::getPageLinkedToModule('testimonials')) {
    $options = [];
    if ($uri = $page->uri) {
        Route::get($uri, $options + ['as' => 'testimonials', 'uses' => 'TestimonialsPublicController@index']);
        Route::get($uri.'/{slug}', $options +  ['as' => 'testimonials.slug', 'uses' => 'TestimonialsPublicController@show']);
    }
}

Route::group(['prefix' => 'testimonials'], function()
{
    Route::get('/', 'TestimonialsPublicController@index');
});