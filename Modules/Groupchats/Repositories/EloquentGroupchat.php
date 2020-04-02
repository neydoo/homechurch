<?php namespace Modules\Groupchats\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentGroupchat extends RepositoriesAbstract implements GroupchatInterface
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
        if(current_user()->churchtype == 'groupchat'){
            return  getDataTabeleQuery($this->model)->get();
        }
        $query = getDataTabeleQuery($this->model)
            // ->join('churches', 'churches.id', '=', 'groupchats.church_id')
            // ->join('countries', 'countries.id', '=', 'groupchats.country_id')
            // ->join('regions', 'regions.id', '=', 'groupchats.region_id')
            // ->join('states', 'states.id', '=', 'groupchats.state_id')
            // ->join('districts', 'districts.id', '=', 'groupchats.district_id')
            // ->join('zones', 'zones.id', '=', 'groupchats.zone_id')
            // ->join('areas', 'areas.id', '=', 'groupchats.area_id')
            ->select([
                'groupchats.id as id',
                'groupchats.name as name',
                'groupchats.code as code',
                'groupchats.description as description',
                'groupchats.status as status',
                // 'states.name as state_id',
                // 'countries.name as country_id',
                // 'regions.name as region_id',
                // 'districts.name as district_id',
                // 'zones.name as zone_id',
                // 'areas.name as area_id',
                // 'churches.name as church_id',
            ]);

        return $query;
    }

}