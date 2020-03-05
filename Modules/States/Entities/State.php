<?php namespace Modules\States\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class State extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\States\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}