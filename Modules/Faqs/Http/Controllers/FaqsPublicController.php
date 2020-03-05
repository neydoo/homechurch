<?php namespace Modules\Faqs\Http\Controllers;

use Modules\Core\Http\Controllers\BasePublicController;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Modules\Faqs\Repositories\FaqInterface as Repository;

class FaqsPublicController extends BasePublicController {

    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }

    public function index()
    {
        $page = request()->input('page');
        $perPage = config('myapp.faqs.per_page',10);
        $data = $this->repository->byPage($page, $perPage);
        $models = new Paginator($data->items, $data->totalItems, $perPage, null, ['path' => Paginator::resolveCurrentPath()]);

        return view('faqs::public.index')
            ->with(compact('models'));
    }

    public function show($slug)
    {
        $model = $this->repository->bySlug($slug);

        return view('faqs::public.show')
            ->with(compact('model'));
    }

}
