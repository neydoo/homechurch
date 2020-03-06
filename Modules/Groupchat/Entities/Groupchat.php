<?php namespace Modules\Groupchat\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class Groupchat extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\Groupchat\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}