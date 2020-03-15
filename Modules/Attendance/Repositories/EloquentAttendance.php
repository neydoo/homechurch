<?php namespace Modules\Attendance\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentAttendance extends RepositoriesAbstract implements AttendanceInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model
            ->where('id','!=', '')->get();

    }

    public function getForDataTable()
    {
        $query = $this->model
            ->join('homechurches', 'homechurches.id', '=', 'attendance.homechurch_id')
            ->select([
                'attendance.id as id',
                'attendance.male as male',
                'attendance.female as female',
                'attendance.children as children',
                'attendance.date as date',
                'homechurches.name as homechurch_id',
            ]);

        return $query;
    }
}