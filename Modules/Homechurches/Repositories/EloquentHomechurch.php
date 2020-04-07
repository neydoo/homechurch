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
        if(!empty(current_user()->churchtype)){
            $query = getDataTabeleQuery($this->model);
            if(!empty(request('country_id'))&& !empty(request('region_id'))){
                return $model = $query->where('country_id', request('country_id'))
                                    ->where('region_id',request('region_id'))
                                    ->where('state_id',request('state_id'))
                                    ->where('district_id',request('district_id'))
                                    ->where('zone_id',request('zone_id'))
                                    ->where('area_id',request('area_id'))
                                    ->where('church_id',request('church_id'))->get();
            }
            return  $model = $query->get();
        }
        $query = getDataTabeleQuery($this->model)
            ->join('churches', 'churches.id', '=', 'homechurches.church_id')
            ->join('countries', 'countries.id', '=', 'homechurches.country_id')
            ->join('regions', 'regions.id', '=', 'homechurches.region_id')
            ->join('states', 'states.id', '=', 'homechurches.state_id')
            ->join('districts', 'districts.id', '=', 'homechurches.district_id')
            ->join('zones', 'zones.id', '=', 'homechurches.zone_id')
            ->join('areas', 'areas.id', '=', 'homechurches.area_id');
            if(!empty(request('country_id')) && !empty(request('region_id')) && !empty(request('state_id'))){
                $model = $query->where('homechurches.country_id', request('country_id'))
                                ->where('homechurches.region_id',request('region_id'))
                                ->where('homechurches.state_id',request('state_id'))
                                ->where('homechurches.district_id',request('district_id'))
                                ->where('homechurches.zone_id',request('zone_id'))
                                ->where('homechurches.area_id',request('area_id'))
                                ->where('homechurches.church_id',request('church_id'));
            }
            $model = $query->select([
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

        return $model;
    }

}