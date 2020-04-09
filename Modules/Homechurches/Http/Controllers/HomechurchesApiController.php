<?php namespace Modules\Homechurches\Http\Controllers;

use Modules\Core\Http\Controllers\BaseApiController;
use Modules\Homechurches\Repositories\HomechurchInterface as Repository;

class HomechurchesApiController extends BaseApiController {

    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }

    public function getByChurch($id)
    {
        return response()->json([
            'homechurches' => $this->repository->allBy('church_id',$id),
            'success' => true
        ], 200);
    }
}
