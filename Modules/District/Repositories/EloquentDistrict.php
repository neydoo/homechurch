<?php namespace Modules\District\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentDistrict extends RepositoriesAbstract implements DistrictInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}