<?php namespace Modules\Offering\Http\Controllers;

use Modules\Core\Http\Controllers\BaseAdminController;
use Modules\Offering\Http\Requests\FormRequest;
use Modules\Offering\Repositories\OfferingInterface as Repository;
use Modules\Offering\Entities\Offering;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use DateTime;

class OfferingController extends BaseAdminController {

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
        $form = $this->form(config($module.'.form'), [
            'method' => 'POST',
            'url' => route('admin.'.$module.'.store'),
            'data' => [
                'homechurches' => (current_user()->hasChurch(current_user()['churchtype'])) ? pluck_user_homechurch()->pluck('name', 'id')->all() : \Homechurches::all([],true)->pluck('name', 'id')->all()
            ]
        ]);
        return view('core::admin.create')
            ->with(compact('module','form'));
    }

    public function edit(Offering $model)
    {
        $module = $model->getTable();
        $form = $this->form(config($module.'.form'), [
            'method' => 'PUT',
            'url' => route('admin.'.$module.'.update',$model),
            'model'=>$model,
            'data' => [
                'homechurches' => (current_user()->hasChurch(current_user()['churchtype'])) ? pluck_user_homechurch()->pluck('name', 'id')->all() : \Homechurches::all([],true)->pluck('name', 'id')->all()
            ]
        ])->modify('homechurch_id', 'select', [
            'selected' => $model->homechurch_id
        ]);
        return view('core::admin.edit')
            ->with(compact('model','module','form'));
    }

    public function store(FormRequest $request)
    {
        $data = $request->all();

        $model = $this->repository->create($data);

        return $this->redirect($request, $model, trans('core::global.new_record'));
    }

    public function dataTable()
    {
        $id = request()->get('id');
        $model = !empty($id) ? $this->repository->getForDatatable($id) : $this->repository->getForDatatable();

        $model_table = $this->repository->getTable();

        return Datatables::of($model)
            ->addColumn('action', $model_table . '::admin._table-action')
            ->editColumn('amount', function($row) {
                $html = '#';
                $html .= number_format($row->amount,2);

                return $html;
            })
            ->editColumn('date', function($row) {
                $date = new DateTime($row->date);
                $html = '';
                $html .= $date->format('Y-M-d');

                return $html;
            })
            ->addColumn('week', function($row) {
                $date = new DateTime($row->date);
                $html = '';
                $html .= $date->format('W');

                return $html;
            })
            ->escapeColumns(['action'])
            ->removeColumn('id')
            ->make();
    }

    public function update(Offering $model,FormRequest $request)
    {
        $data = $request->all();

        $data['id'] = $model->id;

        $model = $this->repository->update($data);

        return $this->redirect($request, $model, trans('core::global.update_record'));
    }

    public function print(Offering $model,FormRequest $request)
    {
        $data = $request->all();

        $data['id'] = $model->id;

        $model = $this->repository->update($data);

        return $this->redirect($request, $model, trans('core::global.update_record'));
    }

}
