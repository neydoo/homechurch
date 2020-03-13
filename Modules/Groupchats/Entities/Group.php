<?php namespace Modules\Groupchats\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class Group extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\Groupchats\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}