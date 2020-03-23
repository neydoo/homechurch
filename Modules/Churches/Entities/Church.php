<?php namespace Modules\Churches\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;
use Modules\History\Traits\Historable;

class Church extends Base {

    use PresentableTrait,Historable;

    protected $presenter = 'Modules\Churches\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}