<?php namespace Modules\Faqs\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class Faq extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\Faqs\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit','files'];


}