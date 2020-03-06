<?php

Route::bind('announcement', function ($id) {
    return app(Modules\Announcements\Repositories\AnnouncementInterface::class)->byId($id);
});
Route::group(['prefix' => 'admin'], function()
{
    Route::group(['prefix' => 'announcements'], function () {
        Route::get('/', [
            'as' => 'admin.announcements.index',
            'uses' => 'AnnouncementsController@index'
        ]);
        Route::get('create', [
            'as' => 'admin.announcements.create',
            'uses' => 'AnnouncementsController@create'
        ]);
        Route::get('{announcement}/edit', [
            'as' => 'admin.announcements.edit',
            'uses' => 'AnnouncementsController@edit'
        ]);
        Route::post('/', [
            'as' => 'admin.announcements.store',
            'uses' => 'AnnouncementsController@store'
        ]);
        Route::put('{announcement}', [
            'as' => 'admin.announcements.update',
            'uses' => 'AnnouncementsController@update'
        ]);
        Route::get('data/table', [
            'as' => 'admin.announcements.datatable',
            'uses' => 'AnnouncementsController@dataTable'
        ]);
        Route::delete('{announcement}', [
            'as' => 'admin.announcements.destroy',
            'uses' => 'AnnouncementsController@destroy'
        ]);
    });
});
