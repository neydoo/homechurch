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
        if(!empty(current_user()->churchtype)){
            $query = getDataTabeleQuery($this->model);
            if(!empty(request('country_id'))&& !empty(request('region_id'))){
                return $model = $query->where('country_id', request('country_id'))
                                    ->where('region_id',request('region_id'))
                                    ->where('state_id',request('state_id'))->get();
            }
            return  $model = $query->get();
        }
        $query = getDataTabeleQuery($this->model)
            ->join('countries', 'countries.id', '=', 'districts.country_id')
            ->join('regions', 'regions.id', '=', 'districts.region_id')
            ->join('states', 'states.id', '=', 'districts.state_id');
            if(!empty(request('country_id')) && !empty(request('region_id')) && !empty(request('state_id'))){
                $model = $query->where('districts.country_id', request('country_id'))
                                ->where('districts.region_id',request('region_id'))
                                ->where('districts.state_id',request('state_id'));
            }
            $model = $query->select([
                'districts.id as id',
                'districts.name as name',
                'districts.code as code',
                'states.name as state_id',
                'countries.name as country_id',
                'regions.name as region_id',
            ]);

        return $model;
    }
}