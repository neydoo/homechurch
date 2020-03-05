<?php namespace Modules\Faqs\Presenters;

use Modules\Core\Presenters\Presenter;

class ModulePresenter  extends Presenter
{

    /**
     * Get title
     *
     * @return string
     */
    public function title()
    {
        return '';
    }

    public function url()
    {
        return route('faqs.slug',[$this->entity->slug]);
    }
}