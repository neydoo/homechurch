<?php namespace Modules\Attendance\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class Attendance extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\Attendance\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}