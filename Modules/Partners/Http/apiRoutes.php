<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'partners'], function()
{
    Route::get('/', 'PartnersApiController@index');
});
