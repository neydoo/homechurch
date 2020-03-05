<?php namespace Modules\NewsLetters\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class NewsletterSubscription extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\NewsLetters\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];


}