<?php namespace Modules\Homechurches\Http\Controllers;

use Modules\Core\Http\Controllers\BasePublicController;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Illuminate\Http\Request;
// use Modules\Homechurches\Http\Requests\FormRequest;
use Modules\Homechurches\Repositories\HomechurchInterface as Repository;

class HomechurchesPublicController extends BasePublicController {

    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
        $this->middleware('auth.account');
    }

    public function index()
    {
        $page = request()->input('page');
        $perPage = config('myapp.homechurches.per_page',10);
        $data = $this->repository->byPage($page, $perPage);
        $models = new Paginator($data->items, $data->totalItems, $perPage, null, ['path' => Paginator::resolveCurrentPath()], true);

        return view('homechurches::public.index')
            ->with(compact('models'));
    }

    public function show($slug)
    {
        $model = $this->repository->bySlug($slug);

        return view('homechurches::public.show')
            ->with(compact('model'));
    }

    public function assigntochurch(Request $request)
    {
        $data = $request->all();
        $model = $this->repository->byId($data['homechurch_id']);
        $model->users()->attach(current_user()->id);
        return response()->json([
            'message' => 'user attached successfully!',
            'success' => true
        ], 200);
    }

    public function store(Request $request)
    {
        try {
            $data = $request->all();
            $data = get_relationship($data);
            $data['description'] = !empty($data['description']) ?: ucwords($data['name']);
            $data['owner_id'] = current_user()['id'];
            $data['status'] = 0; 
            $model = $this->repository->create($data);
            $model->save();
            // $data['msg'] = trans('core::global.new_record');
            // $data['success'] = true;
            // $model->users()->attach(current_user()->id);
            return redirect()->back()->withSuccess(trans('core::global.new_record'));
        } catch (\Exception $e) {
            // dd($e->getMessage());
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

}
