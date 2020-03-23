<?php namespace Modules\Areas\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;
use Modules\History\Traits\Historable;

class Area extends Base {

    use PresentableTrait,Historable;

    protected $presenter = 'Modules\Areas\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}