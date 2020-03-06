<?php namespace Modules\Homechurch\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentHomechurch extends RepositoriesAbstract implements HomechurchInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}