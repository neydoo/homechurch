<?php

Route::bind('groupchat', function ($id) {
    return app(Modules\Groupchats\Repositories\GroupchatInterface::class)->byId($id);
});
Route::group(['prefix' => 'admin'], function()
{
    Route::group(['prefix' => 'groupchats'], function () {
        Route::get('/', [
            'as' => 'admin.groupchats.index',
            'uses' => 'GroupchatsController@index'
        ]);
        Route::get('create', [
            'as' => 'admin.groupchats.create',
            'uses' => 'GroupchatsController@create'
        ]);
        Route::get('{groupchat}/edit', [
            'as' => 'admin.groupchats.edit',
            'uses' => 'GroupchatsController@edit'
        ]);
        Route::post('/', [
            'as' => 'admin.groupchats.store',
            'uses' => 'GroupchatsController@store'
        ]);
        Route::put('{groupchat}', [
            'as' => 'admin.groupchats.update',
            'uses' => 'GroupchatsController@update'
        ]);
        Route::get('data/table', [
            'as' => 'admin.groupchats.datatable',
            'uses' => 'GroupchatsController@dataTable'
        ]);
        Route::delete('{groupchat}', [
            'as' => 'admin.groupchats.destroy',
            'uses' => 'GroupchatsController@destroy'
        ]);
    });
});
