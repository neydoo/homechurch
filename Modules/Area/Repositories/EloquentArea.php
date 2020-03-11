<?php namespace Modules\Area\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentArea extends RepositoriesAbstract implements AreaInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}