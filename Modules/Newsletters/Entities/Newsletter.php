<?php namespace Modules\NewsLetters\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class NewsLetter extends Base {

    use PresentableTrait;
    protected $table = "newsletters";
    protected $presenter = 'Modules\NewsLetters\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];


}