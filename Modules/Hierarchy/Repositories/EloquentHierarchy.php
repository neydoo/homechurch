<?php namespace Modules\Hierarchy\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentHierarchy extends RepositoriesAbstract implements HierarchyInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}