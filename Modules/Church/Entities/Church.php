<?php namespace Modules\Church\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class Church extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\Church\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}