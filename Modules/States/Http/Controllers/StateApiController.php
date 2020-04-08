<?php namespace Modules\States\Http\Controllers;

use Modules\Core\Http\Controllers\BaseApiController;
use Modules\States\Repositories\StateInterface as Repository;

class StateApiController extends BaseApiController {

    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }

    public function getCountryState($id)
    {
        return response()->json([
            'states' => $this->repository->allBy('country_id',$id),
            'success' => true
        ], 200);
    }
}
