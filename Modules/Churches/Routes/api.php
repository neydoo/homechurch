<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/churches', function (Request $request) {
//     return $request->user();
// });
Route::get('/state/churches/{id}', [
    'as' => 'api.church.state',
    'uses' => 'ChurchApiController@getStateChurch'
]);