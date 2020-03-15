<?php namespace Modules\Manuals\Http\Controllers;

use Modules\Core\Http\Controllers\BasePublicController;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Modules\Manuals\Repositories\ManualInterface as Repository;
use Modules\Manuals\Entities\Manual;

class ManualsPublicController extends BasePublicController {

    public function __construct(Repository $repository)
    {
        $this->middleware('auth:account' || 'auth:admin');
        parent::__construct($repository);
    }

    public function index()
    {
        $page = request()->input('page');
        $perPage = config('myapp.manuals.per_page');
        $data = $this->repository->byPage($page, $perPage);
        $models = new Paginator($data->items, $data->totalItems, $perPage, null, ['path' => Paginator::resolveCurrentPath()]);

        return view('manuals::public.index')
            ->with(compact('models'));
    }

    public function show($slug)
    {
        $model = $this->repository->bySlug($slug);

        return view('manuals::public.show')
            ->with(compact('model'));
    }

}
