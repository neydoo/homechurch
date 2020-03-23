<?php namespace Modules\Districts\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;
use Modules\History\Traits\Historable;

class District extends Base {

    use PresentableTrait;
    use Historable;

    protected $presenter = 'Modules\Districts\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}