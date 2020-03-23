<?php namespace Modules\Zones\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;
use Modules\History\Traits\Historable;

class Zone extends Base {

    use PresentableTrait;
    use Historable;

    protected $presenter = 'Modules\Zones\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}