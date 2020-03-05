<?php namespace Modules\Partners\Presenters;

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
        return route('partners.slug',[$this->entity->slug]);
    }
}