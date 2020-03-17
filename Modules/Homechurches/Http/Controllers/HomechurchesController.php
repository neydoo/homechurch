<?php namespace Modules\Homechurches\Http\Controllers;

use Modules\Core\Http\Controllers\BaseAdminController;
use Modules\Homechurches\Http\Requests\FormRequest;
use Modules\Homechurches\Repositories\HomechurchInterface as Repository;
use Modules\Homechurches\Entities\Homechurch;
use DB;

class HomechurchesController extends BaseAdminController {

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
        $homechurches_users = DB::table('homechurch_user')->get()->pluck('id');
        $form = $this->form(config($module.'.form'), [
            'method' => 'POST',
            'url' => route('admin.'.$module.'.store'),
            'data' => [
                'churches' => (current_user()->hasChurch(current_user()['churchtype'])) ? pluck_user_church()->pluck('name', 'id')->all() : \Churches::getAll()->pluck('name', 'id')->all(),
                'users' => get_unassigned_members($homechurches_users)
            ]
        ]);
        return view('core::admin.create')
            ->with(compact('module','form'));
    }

    public function edit(Homechurch $model)
    {
        $module = $model->getTable();
        $homechurches_users = DB::table('homechurch_user')->get()->pluck('id');
        $form = $this->form(config($module.'.form'), [
            'method' => 'PUT',
            'url' => route('admin.'.$module.'.update',$model),
            'model'=>$model,'model'=>$model,
            'data' => [
                'churches' => (current_user()->hasChurch(current_user()['churchtype'])) ? pluck_user_church()->pluck('name', 'id')->all() : \Churches::getAll()->pluck('name', 'id')->all(),
                'users' => get_unassigned_members($homechurches_users)
            ]
        ])->modify('church_id', 'select', [
            'selected' => $model->church_id
        ]);
        return view('core::admin.edit')
            ->with(compact('model','module','form'));
    }

    public function store(FormRequest $request)
    {
        $data = $request->all();

        $model = $this->repository->create($data);
        if(!empty($data['users'])){
            $users = collect($request->users);

            $model->users()->attach($users);
        }

        return $this->redirect($request, $model, trans('core::global.new_record'));
    }

    public function update(Homechurch $model,FormRequest $request)
    {
        $data = $request->all();

        $data['id'] = $model->id;

        $model = $this->repository->update($data);

        return $this->redirect($request, $model, trans('core::global.update_record'));
    }

}
