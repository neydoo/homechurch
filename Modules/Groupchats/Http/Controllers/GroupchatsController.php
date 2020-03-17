<?php namespace Modules\Groupchats\Http\Controllers;

use Modules\Core\Http\Controllers\BaseAdminController;
use Modules\Groupchats\Http\Requests\FormRequest;
use Modules\Groupchats\Repositories\GroupchatInterface as Repository;
use Modules\Users\Entities\Sentinel\User;
use Modules\Churches\Repositories\ChurchInterface as Church;
use Modules\Groupchats\Entities\Groupchat;
use Modules\Groupchats\Events\GroupCreated;
use DB;

class GroupchatsController extends BaseAdminController {

    protected $church;

    public function __construct(Repository $repository, Church $church)
    {
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
        $groups = current_user()->groupchats;
        $groups_users = DB::table('groupchat_user')->get()->pluck('id');
        $users = User::whereNotIn('id', $groups_users)->get();
        $churches = (current_user()->hasChurch(current_user()['churchtype'])) ? pluck_user_church() : $this->church->all([],true);
        return view('core::admin.create')
            ->with(compact('module','users','groups','churches'));
    }

    public function edit(Groupchat $model)
    {
        $module = $model->getTable();
        $groups = current_user()->groupchats;
        $groups_users = DB::table('groupchat_user')->get()->pluck('id');
        $users = User::whereNotIn('id', $groups_users)->get();
        $churches = (current_user()->hasChurch(current_user()['churchtype']) == true) ? pluck_user_church() : $this->church->all([],true);
        return view('core::admin.edit')
            ->with(compact('module','users','groups','churches','model'));
    }

    public function store(FormRequest $request)
    {
        $data = $request->all();

        $model = $this->repository->create($data);
        
        return $this->redirect($request, $model, trans('core::global.new_record'));
    }

    public function update(Groupchat $model,FormRequest $request)
    {
        $data = $request->all();

        $data['id'] = $model->id;

        $model = $this->repository->update($data);

        return $this->redirect($request, $model, trans('core::global.update_record'));
    }

}
