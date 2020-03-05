<?php namespace Modules\Partners\Http\Controllers;

use Modules\Core\Http\Controllers\BasePublicController;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Modules\Partners\Repositories\PartnerInterface as Repository;

class PartnersPublicController extends BasePublicController {

    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }

    public function index()
    {
        $page = request()->input('page');
        $perPage = config('myapp.partners.per_page');
        $data = $this->repository->byPage($page, $perPage);
        $models = new Paginator($data->items, $data->totalItems, $perPage, null, ['path' => Paginator::resolveCurrentPath()]);

        return view('partners::public.index')
            ->with(compact('models'));
    }

    public function show($slug)
    {
        $model = $this->repository->bySlug($slug);

        return view('partners::public.show')
            ->with(compact('model'));
    }

}
