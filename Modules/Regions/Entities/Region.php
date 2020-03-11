<?php namespace Modules\Regions\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class Region extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\Regions\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}