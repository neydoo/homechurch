<?php namespace Modules\Offering\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentOffering extends RepositoriesAbstract implements OfferingInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}