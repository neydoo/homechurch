<?php namespace Modules\Attendance\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentAttendance extends RepositoriesAbstract implements AttendanceInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}