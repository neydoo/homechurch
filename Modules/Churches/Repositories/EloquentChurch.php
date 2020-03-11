<?php namespace Modules\Churches\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentChurch extends RepositoriesAbstract implements ChurchInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}