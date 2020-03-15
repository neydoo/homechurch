<?php namespace Modules\Regions\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentRegion extends RepositoriesAbstract implements RegionInterface
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
        $query = getDataTabeleQuery($this->model)
            ->leftJoin('countries as country', 'country.id', '=', 'regions.country_id')
            ->select([
                'regions.id as id',
                'regions.name as name',
                'country.name as country_id',
            ]);

        return $query;
    }
}