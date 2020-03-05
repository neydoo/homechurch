<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'faqs'], function()
{
    Route::get('/', 'FaqsApiController@index');
});
