<?php namespace Modules\Testimonials\Http\Controllers;

use Modules\Core\Http\Controllers\BasePublicController;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Modules\Testimonials\Repositories\TestimonialInterface as Repository;

class TestimonialsPublicController extends BasePublicController {

    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }

    public function index()
    {
        $page = request()->input('page');
        $perPage = config('myapp.testimonials.per_page');
        $data = $this->repository->byPage($page, $perPage);
        $models = new Paginator($data->items, $data->totalItems, $perPage, null, ['path' => Paginator::resolveCurrentPath()]);

        return view('testimonials::public.index')
            ->with(compact('models'));
    }

    public function show($slug)
    {
        $model = $this->repository->bySlug($slug);

        return view('testimonials::public.show')
            ->with(compact('model'));
    }

}
