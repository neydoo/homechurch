<?php namespace Modules\Churches\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class Church extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\Churches\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}