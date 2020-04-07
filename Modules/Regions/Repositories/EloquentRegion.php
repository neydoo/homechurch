<?php namespace Modules\Regions\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentRegion extends RepositoriesAbstract implements RegionInterface
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
            $query =  getDataTabeleQuery($this->model);
                    if(!empty(request('country_id'))){
                        return $model = $query->where('country_id', request('country_id'))->get();
                    }
            return  $model = $query->get();
        }
        $query = getDataTabeleQuery($this->model);
            if(!empty(request('country_id')))
                $model = $query->where('country_id', request('country_id'));
            else
            $model = $query->leftJoin('countries as country', 'country.id', '=', 'regions.country_id')
                ->select([
                    'regions.id as id',
                    'regions.name as name',
                    'regions.code as code',
                    'country.name as country_id',
                ]);

        return $model;
    }
}