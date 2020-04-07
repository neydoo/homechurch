<?php namespace Modules\Zones\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentZone extends RepositoriesAbstract implements ZoneInterface
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
                                    ->where('district_id',request('district_id'))->get();
            }
            return  $model = $query->get();
        }
        $query = getDataTabeleQuery($this->model)
            ->join('countries', 'countries.id', '=', 'zones.country_id')
            ->join('regions', 'regions.id', '=', 'zones.region_id')
            ->join('states', 'states.id', '=', 'zones.state_id')
            ->join('districts', 'districts.id', '=', 'zones.district_id');
            if(!empty(request('country_id')) && !empty(request('region_id')) && !empty(request('state_id'))){
                $model = $query->where('zones.country_id', request('country_id'))
                                ->where('zones.region_id',request('region_id'))
                                ->where('zones.state_id',request('state_id'))
                                ->where('zones.district_id',request('district_id'));
            }
            $model = $query->select([
                'zones.id as id',
                'zones.name as name',
                'zones.code as code',
                'states.name as state_id',
                'countries.name as country_id',
                'regions.name as region_id',
                'districts.name as district_id',
            ]);

        return $model;
    }

}