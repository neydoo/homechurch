<?php

Route::bind('state', function ($id) {
    return app(Modules\States\Repositories\StateInterface::class)->byId($id);
});

Route::group(['prefix' => 'admin'], function()
{
    Route::group(['prefix' => 'states'], function()
    {
        Route::get('/', [
            'as' => 'admin.states.index',
            'uses' => 'statesController@index'
        ]);
        Route::get('/region/states/{id}', [
            'as' => 'admin.states.region',
            'uses' => 'statesController@getRegionState'
        ]);
        Route::get('create', [
            'as' => 'admin.states.create',
            'uses' => 'statesController@create'
        ]);
        Route::get('{state}/edit', [
            'as' => 'admin.states.edit',
            'uses' => 'statesController@edit'
        ]);
        Route::post('/', [
            'as' => 'admin.states.store',
            'uses' => 'statesController@store'
        ]);
        Route::put('{state}', [
            'as' => 'admin.states.update',
            'uses' => 'statesController@update'
        ]);
        Route::get('datatable', [
            'as' => 'admin.states.datatable',
            'uses' => 'statesController@dataTable'
        ]);
        Route::delete('{state}', [
            'as' => 'admin.states.destroy',
            'uses' => 'statesController@destroy'
        ]);
    });
});