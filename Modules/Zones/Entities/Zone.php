<?php namespace Modules\Zones\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class Zone extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\Zones\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}