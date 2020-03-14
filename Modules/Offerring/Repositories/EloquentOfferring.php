<?php namespace Modules\Offerring\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentOfferring extends RepositoriesAbstract implements OfferringInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}