<?php namespace Modules\Groupchats\Http\Controllers;

use Modules\Core\Http\Controllers\BasePublicController;
use Modules\Groupchats\Http\Requests\FormRequest;
use Modules\Groupchats\Http\Requests\AddUserRequest;
use Modules\Groupchats\Repositories\GroupchatInterface as Repository;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use App\Events\GroupCreated;

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
        $data = get_relationship($data);
        $model = $this->repository->create($data);
        $model->code = (($data['country_id'] < 10) ? '0'.$data['country_id'] : $data['country_id']).
        (($data['region_id'] < 10) ? '0'.$data['region_id'] : $data['region_id']).
        (($data['state_id'] < 10) ? '0'.$data['state_id'] : $data['state_id']).
        (($data['district_id'] < 10) ? '0'.$data['district_id'] : $data['district_id']).
        (($data['zone_id'] < 10) ? '0'.$data['zone_id'] : $data['zone_id']).
        (($data['area_id'] < 10) ? '0'.$data['area_id'] : $data['area_id']).
        (($data['church_id'] < 10) ? '0'.$data['church_id'] : $data['church_id']).
        (($model->id < 10) ? '0'.$model->id : $model->id);
        $model->save();

        if(!empty($data['users'])  && !empty($data['users'][0])){
            $users = collect($request->users);

            $model->users()->attach($users);
        }

        broadcast(new GroupCreated($model))->toOthers();

        return $model;

        // return $this->redirect($request, $model, trans('core::global.new_record'));
    }

    public function index()
    {
        try {
            $groups = current_user()->groupchats;

            return view('groupchats::public.index')
                ->with(compact('groups'));
        } catch (\Exception $e) {
            return redirect('login');
            //throw $th;
        }
        
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
