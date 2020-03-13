<?php namespace Modules\Groupchats\Http\Controllers;

use Modules\Core\Http\Controllers\BasePublicController;
use Modules\Groupchats\Http\Requests\FormRequest;
use Modules\Groupchats\Http\Requests\AddUserRequest;
use Modules\Groupchats\Repositories\GroupchatInterface as Repository;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Modules\Groupchats\Events\GroupCreated;

class GroupchatsPublicController extends BasePublicController {

    public function __construct(Repository $repository)
    {
        $this->middleware('auth:account' || 'auth:admin');
        parent::__construct($repository);
    }

    public function store(FormRequest $request)
    {
        $data = $request->all();
        $data['description'] = !empty($data['description']) ? $data['description'] : ucwords($data['name']);
        $model = $this->repository->create($data);

        $users = collect($request->users);
        $users->push(current_user()->id);

        $model->users()->attach($users);

        broadcast(new GroupCreated($model))->toOthers();

        return $model;

        // return $this->redirect($request, $model, trans('core::global.new_record'));
    }

    public function index()
    {
        $groups = current_user()->groupchats;
        $page = request()->input('page');
        $perPage = config('myapp.groupchats.per_page');
        $data = $this->repository->byPage($page, $perPage,[], true);
        $models = new Paginator($data->items, $data->totalItems, $perPage, null, ['path' => Paginator::resolveCurrentPath()]);

        return view('pages::public.chat')
            ->with(compact('models','groups'));
    }

    public function addUser(AddUserRequest $request)
    {
        $data = $request->all();
        $model = $this->repository->byId($data['group_id']);

        $users = collect($request->users);

        $model->users()->attach($users);

        broadcast(new GroupCreated($model))->toOthers();

        return $model;

        // return $this->redirect($request, $model, trans('core::global.new_record'));
    }

}
