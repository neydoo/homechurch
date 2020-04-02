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
            return  getDataTabeleQuery($this->model)->get();
        }
        $query = getDataTabeleQuery($this->model)
            ->join('countries', 'countries.id', '=', 'zones.country_id')
            ->join('regions', 'regions.id', '=', 'zones.region_id')
            ->join('states', 'states.id', '=', 'zones.state_id')
            ->join('districts', 'districts.id', '=', 'zones.district_id')
            ->select([
                'zones.id as id',
                'zones.name as name',
                'zones.code as code',
                'states.name as state_id',
                'countries.name as country_id',
                'regions.name as region_id',
                'districts.name as district_id',
            ]);

        return $query;
    }

}