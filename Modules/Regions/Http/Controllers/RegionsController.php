<?php namespace Modules\Regions\Http\Controllers;

use Modules\Core\Http\Controllers\BaseAdminController;
use Modules\Regions\Http\Requests\FormRequest;
use Modules\Regions\Repositories\RegionInterface as Repository;
use Modules\Regions\Entities\Region;

class RegionsController extends BaseAdminController {

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

    public function getCountryRegion($id)
    {
        return response()->json([
            'regions' => $this->repository->allBy('country_id',$id),
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
            ]
        ]);
        return view('core::admin.create')
            ->with(compact('module','form'));
    }

    public function edit(Region $model)
        {
            $module = $model->getTable();
            $form = $this->form(config($module.'.form'), [
                'method' => 'PUT',
                'url' => route('admin.'.$module.'.update',$model),
                'model'=>$model,
                'data' => [
                    'countries' => \Countries::getAll()->pluck('name', 'id')->all(),
                ]
            ])->modify('country_id', 'select', [
                'selected' => $model->country_id
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

    public function update(Region $model,FormRequest $request)
    {
        $data = $request->all();

        $data['id'] = $model->id;

        $model = $this->repository->update($data);

        return $this->redirect($request, $model, trans('core::global.update_record'));
    }

}
