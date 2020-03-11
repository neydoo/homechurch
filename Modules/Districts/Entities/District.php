<?php namespace Modules\Districts\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class District extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\Districts\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}