<?php namespace Modules\Groupchats\Http\Controllers;

use Modules\Core\Http\Controllers\BaseAdminController;
use Modules\Groupchats\Http\Requests\FormRequest;
use Modules\Groupchats\Repositories\GroupchatInterface as Repository;
use Modules\Users\Repositories\UserInterface as User;
use Modules\Churches\Repositories\ChurchInterface as Church;
use Modules\Groupchats\Entities\Groupchat;
use Modules\Groupchats\Events\GroupCreated;

class GroupchatsController extends BaseAdminController {

    protected $user, $church;

    public function __construct(Repository $repository, User $user, Church $church)
    {
        $this->user = $user;
        $this->church = $church;
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
        $users = $this->user->all();
        $groups = $this->repository->all([],true);
        $churches = $this->church->all([],true);
        $form = $this->form(config($module.'.form'), [
            'method' => 'POST',
            'url' => route('admin.'.$module.'.store')
        ]);
        return view('core::admin.create')
            ->with(compact('module','form','users','groups','churches'));
    }

    public function edit(Groupchat $model)
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

        $users = collect($request->users);
        $users->push(auth()->user()->id);

        $model->users()->attach($users);

        broadcast(new GroupCreated($group))->toOthers();

        return $group;

        // return $this->redirect($request, $model, trans('core::global.new_record'));
    }

    public function update(Groupchat $model,FormRequest $request)
    {
        $data = $request->all();

        $data['id'] = $model->id;

        $model = $this->repository->update($data);

        return $this->redirect($request, $model, trans('core::global.update_record'));
    }

}
