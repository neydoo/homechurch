<?php namespace Modules\Groupchat\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentGroupchat extends RepositoriesAbstract implements GroupchatInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}