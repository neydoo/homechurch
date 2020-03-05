<?php namespace Modules\Testimonials\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class Testimonial extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\Testimonials\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit','files'];

    public $attachments = ['image'];
}