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
            $query = getDataTabeleQuery($this->model);
                    if(!empty(request('country_id'))&& !empty(request('region_id'))){
                        return $model = $query->where('country_id', request('country_id'))
                                            ->where('region_id',request('region_id'))->get();
                    }
            return  $model = $query->get();
        }
        $query = getDataTabeleQuery($this->model)
                ->join('countries', 'countries.id', '=', 'states.country_id')
                ->join('regions', 'regions.id', '=', 'states.region_id');
                if(!empty(request('country_id')) && !empty(request('region_id'))){
                    $model = $query->where('states.country_id', request('country_id'))->where('states.region_id',request('region_id'));
                }
                $model = $query->select([
                    'states.id as id',
                    'states.name as name',
                    'states.code as code',
                    'countries.name as country_id',
                    'regions.name as region_id',
                ]);

        return $model->get();
    }

}