<?php namespace Modules\Homechurches\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentHomechurch extends RepositoriesAbstract implements HomechurchInterface
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
        if(current_user()->churchtype == 'homechurch'){
            return  getDataTabeleQuery($this->model)->get();
        }
        if(!empty(current_user()->churchtype))
        {
            $query = getQuery();
            return $this->model->join('churches', 'churches.id', '=', 'homechurches.church_id')
            ->join('countries', 'countries.id', '=', 'homechurches.country_id')
            ->join('regions', 'regions.id', '=', 'homechurches.region_id')
            ->join('states', 'states.id', '=', 'homechurches.state_id')
            ->join('districts', 'districts.id', '=', 'homechurches.district_id')
            ->join('zones', 'zones.id', '=', 'homechurches.zone_id')
            ->join('areas', 'areas.id', '=', 'homechurches.area_id')
            ->select([
                'homechurches.id as id',
                'homechurches.name as name',
                'homechurches.code as code',
                'states.name as state_id',
                'countries.name as country_id',
                'regions.name as region_id',
                'districts.name as district_id',
                'zones.name as zone_id',
                'areas.name as area_id',
                'churches.name as church_id',
            ])->$query->get();
        }
        $query = getDataTabeleQuery($this->model)
            ->join('churches', 'churches.id', '=', 'homechurches.church_id')
            ->join('countries', 'countries.id', '=', 'homechurches.country_id')
            ->join('regions', 'regions.id', '=', 'homechurches.region_id')
            ->join('states', 'states.id', '=', 'homechurches.state_id')
            ->join('districts', 'districts.id', '=', 'homechurches.district_id')
            ->join('zones', 'zones.id', '=', 'homechurches.zone_id')
            ->join('areas', 'areas.id', '=', 'homechurches.area_id')
            ->select([
                'homechurches.id as id',
                'homechurches.name as name',
                'homechurches.code as code',
                'states.name as state_id',
                'countries.name as country_id',
                'regions.name as region_id',
                'districts.name as district_id',
                'zones.name as zone_id',
                'areas.name as area_id',
                'churches.name as church_id',
            ]);

        return $query;
    }

}