<?php namespace Modules\Zone\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentZone extends RepositoriesAbstract implements ZoneInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}