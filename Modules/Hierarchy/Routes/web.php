<?php

Route::bind('hierarchy', function ($id) {
    return app(Modules\Hierarchy\Repositories\HierarchyInterface::class)->byId($id);
});
Route::group(['prefix' => 'admin'], function()
{
    Route::group(['prefix' => 'hierarchy'], function () {
        Route::get('/', [
            'as' => 'admin.hierarchy.index',
            'uses' => 'HierarchyController@index'
        ]);
        Route::get('create', [
            'as' => 'admin.hierarchy.create',
            'uses' => 'HierarchyController@create'
        ]);
        Route::get('{hierarchy}/edit', [
            'as' => 'admin.hierarchy.edit',
            'uses' => 'HierarchyController@edit'
        ]);
        Route::post('/', [
            'as' => 'admin.hierarchy.store',
            'uses' => 'HierarchyController@store'
        ]);
        Route::put('{hierarchy}', [
            'as' => 'admin.hierarchy.update',
            'uses' => 'HierarchyController@update'
        ]);
        Route::get('data/table', [
            'as' => 'admin.hierarchy.datatable',
            'uses' => 'HierarchyController@dataTable'
        ]);
        Route::delete('{hierarchy}', [
            'as' => 'admin.hierarchy.destroy',
            'uses' => 'HierarchyController@destroy'
        ]);
    });
});
