<?php namespace Modules\Areas\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentArea extends RepositoriesAbstract implements AreaInterface
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
            ->join('countries', 'countries.id', '=', 'areas.country_id')
            ->join('regions', 'regions.id', '=', 'areas.region_id')
            ->join('states', 'states.id', '=', 'areas.state_id')
            ->join('districts', 'districts.id', '=', 'areas.district_id')
            ->join('zones', 'zones.id', '=', 'areas.zone_id')
            ->select([
                'areas.id as id',
                'areas.name as name',
                'areas.code as code',
                'states.name as state_id',
                'countries.name as country_id',
                'regions.name as region_id',
                'districts.name as district_id',
                'zones.name as zone_id',
            ]);

        return $query;
    }

}