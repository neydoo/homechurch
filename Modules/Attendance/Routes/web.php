<?php

Route::bind('attendance', function ($id) {
    return app(Modules\Attendance\Repositories\AttendanceInterface::class)->byId($id);
});
Route::group(['prefix' => 'admin'], function()
{
    Route::group(['prefix' => 'attendance'], function () {
        Route::get('/', [
            'as' => 'admin.attendance.index',
            'uses' => 'AttendanceController@index'
        ]);
        Route::get('create', [
            'as' => 'admin.attendance.create',
            'uses' => 'AttendanceController@create'
        ]);
        Route::get('{attendance}/edit', [
            'as' => 'admin.attendance.edit',
            'uses' => 'AttendanceController@edit'
        ]);
        Route::post('/', [
            'as' => 'admin.attendance.store',
            'uses' => 'AttendanceController@store'
        ]);
        Route::put('{attendance}', [
            'as' => 'admin.attendance.update',
            'uses' => 'AttendanceController@update'
        ]);
        Route::get('data/table', [
            'as' => 'admin.attendance.datatable',
            'uses' => 'AttendanceController@dataTable'
        ]);
        Route::delete('{attendance}', [
            'as' => 'admin.attendance.destroy',
            'uses' => 'AttendanceController@destroy'
        ]);
    });
});
