<?php namespace Modules\Partners\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class Partner extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\Partners\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];


}