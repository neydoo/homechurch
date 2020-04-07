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
        if(!empty(current_user()->churchtype)){
            $query = getDataTabeleQuery($this->model);
            if(!empty(request('country_id'))&& !empty(request('region_id'))){
                return $model = $query->where('country_id', request('country_id'))
                                    ->where('region_id',request('region_id'))
                                    ->where('state_id',request('state_id'))
                                    ->where('district_id',request('district_id'))
                                    ->where('zone_id',request('zone_id'))->get();
            }
            return  $model = $query->get();
        }
        $query = getDataTabeleQuery($this->model)
            ->join('countries', 'countries.id', '=', 'areas.country_id')
            ->join('regions', 'regions.id', '=', 'areas.region_id')
            ->join('states', 'states.id', '=', 'areas.state_id')
            ->join('districts', 'districts.id', '=', 'areas.district_id')
            ->join('zones', 'zones.id', '=', 'areas.zone_id');
            if(!empty(request('country_id')) && !empty(request('region_id')) && !empty(request('state_id'))){
                $model = $query->where('areas.country_id', request('country_id'))
                                ->where('areas.region_id',request('region_id'))
                                ->where('areas.state_id',request('state_id'))
                                ->where('areas.district_id',request('district_id'))
                                ->where('areas.zone_id',request('zone_id'));
            }
            $model = $query->select([
                'areas.id as id',
                'areas.name as name',
                'areas.code as code',
                'states.name as state_id',
                'countries.name as country_id',
                'regions.name as region_id',
                'districts.name as district_id',
                'zones.name as zone_id',
            ]);

        return $model;
    }

}