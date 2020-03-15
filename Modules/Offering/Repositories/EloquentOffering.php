<?php namespace Modules\Offering\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentOffering extends RepositoriesAbstract implements OfferingInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function getAll()
    {
        return $this->model
            ->where('id','!=', '')->get();

    }

    public function getForDataTable()
    {
        $query = $this->model
            ->join('homechurches', 'homechurches.id', '=', 'offering.homechurch_id')
            ->select([
                'offering.id as id',
                'offering.amount as amount',
                'offering.date as date',
                'homechurches.name as homechurch_id',
            ]);

        return $query;
    }

}