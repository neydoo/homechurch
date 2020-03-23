<?php namespace Modules\Manuals\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;
use Modules\History\Traits\Historable;

class Manual extends Base {

    use PresentableTrait,Historable;

    protected $presenter = 'Modules\Manuals\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['document'];

}