<?php namespace Modules\States\Http\Controllers;

use Modules\Core\Http\Controllers\BaseAdminController;
use Modules\States\Http\Requests\FormRequest;
use Modules\States\Repositories\StateInterface as Repository;
use Modules\States\Entities\State;

class StatesController extends BaseAdminController {

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

    public function getRegionState($id)
    {
        return response()->json([
            'states' => $this->repository->allBy('region_id',$id)->pluck('name', 'id')->all(),
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
                'regions' => \Regions::getAll()->pluck('name', 'id')->all()
            ]
        ]);
        return view('core::admin.create')
            ->with(compact('module','form'));
    }

    public function edit(State $model)
        {
            $module = $model->getTable();
            $form = $this->form(config($module.'.form'), [
                'method' => 'PUT',
                'url' => route('admin.'.$module.'.update',$model),
                'model'=>$model,
                'data' => [
                    'countries' => \Countries::getAll()->pluck('name', 'id')->all(),
                    'regions' => \Regions::getAll()->pluck('name', 'id')->all()
                ]
            ])->modify('country_id', 'select', [
                'selected' => $model->country_id
            ])->modify('region_id', 'select', [
                'selected' => $model->region_id
            ]);
            return view('core::admin.edit')
                ->with(compact('model','module','form'));
        }

    public function store(FormRequest $request)
    {
        $data = $request->all();

        $model = $this->repository->create($data);

        return $this->redirect($request, $model, trans('core::global.new_record'));
    }

    public function update(State $model,FormRequest $request)
    {
        $data = $request->all();

        $data['id'] = $model->id;

        $model = $this->repository->update($data);

        return $this->redirect($request, $model, trans('core::global.update_record'));
    }

}
