<?php namespace Modules\Areas\Http\Controllers;

use Modules\Core\Http\Controllers\BaseAdminController;
use Modules\Areas\Http\Requests\FormRequest;
use Modules\Areas\Repositories\AreaInterface as Repository;
use Modules\Areas\Entities\Area;

class AreasController extends BaseAdminController {

    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }

    public function index()
    {
        $module = $this->repository->getTable();
        $title = trans($module . '::global.group_name');
        return view('core::admin.index')
            ->with(compact('title', 'module'));
    }

    public function getZoneArea($id)
    {
        return response()->json([
            'areas' => $this->repository->allBy('zone_id',$id),
            'success' => true
        ], 200);
    }

    public function create()
    {
        $module = $this->repository->getTable();
        $form = $this->form(config($module.'.form'), [
            'method' => 'POST',
            'url' => route('admin.'.$module.'.store'),
            'data' => [
                'countries' => \Countries::getAll()->pluck('name', 'id')->all(),
                'regions' => \Regions::getAll()->pluck('name', 'id')->all(),
                'states' => \States::getAll()->pluck('name', 'id')->all(),
                'districts' => \Districts::getAll()->pluck('name', 'id')->all(),
                'zones' => \Zones::getAll()->pluck('name', 'id')->all()
            ]
        ]);
        return view('core::admin.create')
            ->with(compact('module','form'));
    }

    public function edit(Area $model)
    {
        $module = $model->getTable();
        $form = $this->form(config($module.'.form'), [
            'method' => 'PUT',
            'url' => route('admin.'.$module.'.update',$model),
            'model'=>$model,
            'data' => [
                'countries' => \Countries::getAll()->pluck('name', 'id')->all(),
                'regions' => \Regions::getAll()->pluck('name', 'id')->all(),
                'states' => \States::getAll()->pluck('name', 'id')->all(),
                'districts' => \Districts::getAll()->pluck('name', 'id')->all(),
                'zones' => \Zones::getAll()->pluck('name', 'id')->all()
            ]
        ])->modify('country_id', 'select', [
            'selected' => $model->country_id
        ])->modify('region_id', 'select', [
            'selected' => $model->region_id
        ])->modify('state_id', 'select', [
            'selected' => $model->state_id
        ])->modify('district_id', 'select', [
            'selected' => $model->district_id
        ])->modify('zone_id', 'select', [
            'selected' => $model->zone_id
        ]);
        return view('core::admin.edit')
            ->with(compact('model','module','form'));
    }

    public function store(FormRequest $request)
    {
        $data = $request->all();
        $data = get_relationship($data);
        $data['code'] = $data['country_id'].$data['region_id'].$data['state_id'].$data['district_id'].$data['zone_id'];

        $model = $this->repository->create($data);

        return $this->redirect($request, $model, trans('core::global.new_record'));
    }

    public function update(Area $model,FormRequest $request)
    {
        $data = $request->all();

        $data['id'] = $model->id;
        $data = get_relationship($data);
        $data['code'] = $data['country_id'].$data['region_id'].$data['state_id'].$data['district_id'].$data['zone_id'];

        $model = $this->repository->update($data);

        return $this->redirect($request, $model, trans('core::global.update_record'));
    }

}
