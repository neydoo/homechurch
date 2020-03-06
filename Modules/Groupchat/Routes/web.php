<?php

Route::bind('groupchat', function ($id) {
    return app(Modules\Groupchat\Repositories\GroupchatInterface::class)->byId($id);
});
Route::group(['prefix' => 'admin'], function()
{
    Route::group(['prefix' => 'groupchat'], function () {
        Route::get('/', [
            'as' => 'admin.groupchat.index',
            'uses' => 'GroupchatController@index'
        ]);
        Route::get('create', [
            'as' => 'admin.groupchat.create',
            'uses' => 'GroupchatController@create'
        ]);
        Route::get('{groupchat}/edit', [
            'as' => 'admin.groupchat.edit',
            'uses' => 'GroupchatController@edit'
        ]);
        Route::post('/', [
            'as' => 'admin.groupchat.store',
            'uses' => 'GroupchatController@store'
        ]);
        Route::put('{groupchat}', [
            'as' => 'admin.groupchat.update',
            'uses' => 'GroupchatController@update'
        ]);
        Route::get('data/table', [
            'as' => 'admin.groupchat.datatable',
            'uses' => 'GroupchatController@dataTable'
        ]);
        Route::delete('{groupchat}', [
            'as' => 'admin.groupchat.destroy',
            'uses' => 'GroupchatController@destroy'
        ]);
    });
});
