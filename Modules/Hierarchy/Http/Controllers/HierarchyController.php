<?php namespace Modules\Hierarchy\Http\Controllers;

use Modules\Core\Http\Controllers\BaseAdminController;
use Modules\Hierarchy\Http\Requests\FormRequest;
use Modules\Hierarchy\Repositories\HierarchyInterface as Repository;
use Modules\Hierarchy\Entities\Hierarchy;

class HierarchyController extends BaseAdminController {

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

    public function create()
    {
        $module = $this->repository->getTable();
        $form = $this->form(config($module.'.form'), [
            'method' => 'POST',
            'url' => route('admin.'.$module.'.store')
        ]);
        return view('core::admin.create')
            ->with(compact('module','form'));
    }

    public function edit(Hierarchy $model)
        {
            $module = $model->getTable();
            $form = $this->form(config($module.'.form'), [
                'method' => 'PUT',
                'url' => route('admin.'.$module.'.update',$model),
                'model'=>$model
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

    public function update(Hierarchy $model,FormRequest $request)
    {
        $data = $request->all();

        $data['id'] = $model->id;

        $model = $this->repository->update($data);

        return $this->redirect($request, $model, trans('core::global.update_record'));
    }

}
