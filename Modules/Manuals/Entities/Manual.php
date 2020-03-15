<?php namespace Modules\Manuals\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class Manual extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\Manuals\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['document'];

}