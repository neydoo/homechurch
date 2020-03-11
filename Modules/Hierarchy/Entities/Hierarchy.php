<?php namespace Modules\Hierarchy\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class Hierarchy extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\Hierarchy\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}