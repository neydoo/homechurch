<?php namespace Modules\Regions\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;
use Modules\History\Traits\Historable;

class Region extends Base {

    use PresentableTrait;
    use Historable;

    protected $presenter = 'Modules\Regions\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}