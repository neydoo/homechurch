<?php namespace Modules\Homechurch\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class Homechurch extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\Homechurch\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}