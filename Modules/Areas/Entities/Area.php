<?php namespace Modules\Areas\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class Area extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\Areas\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}