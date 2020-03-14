<?php namespace Modules\Offerring\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class Offerring extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\Offerring\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}