<?php namespace Modules\Regions\Presenters;

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
        return $this->entity->title;
    }

    public function url()
    {
        return route('regions.slug',[$this->entity->slug]);
    }
}