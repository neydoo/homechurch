<?php namespace Modules\Area\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class Area extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\Area\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}