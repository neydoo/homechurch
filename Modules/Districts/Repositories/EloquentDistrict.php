<?php namespace Modules\Districts\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentDistrict extends RepositoriesAbstract implements DistrictInterface
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
            ->join('countries', 'countries.id', '=', 'districts.country_id')
            ->join('regions', 'regions.id', '=', 'districts.region_id')
            ->join('states', 'states.id', '=', 'districts.state_id')
            ->select([
                'districts.id as id',
                'districts.name as name',
                'districts.code as code',
                'states.name as state_id',
                'countries.name as country_id',
                'regions.name as region_id',
            ]);

        return $query;
    }
}