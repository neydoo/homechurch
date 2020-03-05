<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'newsletters'], function()
{
    Route::get('/', 'NewslettersApiController@index');
});
