<?php namespace Modules\Countries\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class Country extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\Countries\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}