<?php namespace Modules\Countries\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentCountry extends RepositoriesAbstract implements CountryInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll(array $data = [])
    {
        $query = $this->model->where('id','!=', '');
                // if(!empty($data)){
                //     return $model = $query->select($data)->get();
                // }
        return $model = $query->get();

    }

    

}