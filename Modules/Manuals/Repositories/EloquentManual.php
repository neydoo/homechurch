<?php namespace Modules\Manuals\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentManual extends RepositoriesAbstract implements ManualInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}