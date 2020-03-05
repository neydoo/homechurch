<?php

namespace Modules\Faqs\Sidebar;


use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Maatwebsite\Sidebar\SidebarExtender as PackageSideBarExtender;
use Modules\Core\Sidebar\BaseSidebarExtender;

class SidebarExtender extends BaseSidebarExtender implements PackageSideBarExtender
{
    public function extendWith(Menu $menu)
    {
        $menu->group(trans('core::global.menus.content'), function (Group $group)
        {
            $group->item(trans('faqs::global.name'),function(Item $item){
                $item->weight(config('faqs.sidebar.weight'));
                $item->icon(config('faqs.sidebar.icon'));
                $item->route('admin.faqs.index');
                $item->authorize($this->auth->hasAccess('faqs.index'));
            });
        });

        return $menu;
    }
}