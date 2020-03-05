<?php namespace Modules\Faqs\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentFaq extends RepositoriesAbstract implements FaqInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}