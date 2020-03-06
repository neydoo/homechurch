<?php namespace Modules\Announcements\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentAnnouncement extends RepositoriesAbstract implements AnnouncementInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}