<?php namespace Modules\Announcements\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class Announcement extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\Announcements\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}