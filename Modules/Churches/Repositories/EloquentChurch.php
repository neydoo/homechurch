<?php namespace Modules\Churches\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentChurch extends RepositoriesAbstract implements ChurchInterface
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
            ->join('countries', 'countries.id', '=', 'churches.country_id')
            ->join('regions', 'regions.id', '=', 'churches.region_id')
            ->join('states', 'states.id', '=', 'churches.state_id')
            ->join('districts', 'districts.id', '=', 'churches.district_id')
            ->join('zones', 'zones.id', '=', 'churches.zone_id')
            ->join('areas', 'areas.id', '=', 'churches.area_id')
            ->select([
                'churches.id as id',
                'churches.name as name',
                'churches.code as code',
                'states.name as state_id',
                'countries.name as country_id',
                'regions.name as region_id',
                'districts.name as district_id',
                'zones.name as zone_id',
                'areas.name as area_id',
            ]);

        return $query;
    }

}