<?php namespace Modules\Churches\Http\Controllers;

use Modules\Core\Http\Controllers\BaseApiController;
use Modules\Churches\Repositories\ChurchInterface as Repository;

class ChurchApiController extends BaseApiController {

    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }

    public function getStateChurch($id)
    {
        return response()->json([
            'churches' => $this->repository->allBy('state_id',$id),
            'success' => true
        ], 200);
    }
}
