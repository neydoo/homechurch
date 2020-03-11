<?php namespace Modules\Zone\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class Zone extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\Zone\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}