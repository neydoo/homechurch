<?php namespace Modules\Newsletters\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentNewsletter extends RepositoriesAbstract implements NewsletterInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}