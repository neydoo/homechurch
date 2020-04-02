<?php namespace Modules\States\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentState extends RepositoriesAbstract implements StateInterface
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
            ->join('countries', 'countries.id', '=', 'states.country_id')
            ->join('regions', 'regions.id', '=', 'states.region_id')
            ->select([
                'states.id as id',
                'states.name as name',
                'states.code as code',
                'countries.name as country_id',
                'regions.name as region_id',
            ]);

        return $query;
    }

}