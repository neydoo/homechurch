<?php

namespace Modules\Offering\Sidebar;


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
            $group->item(trans('offering::global.name'),function(Item $item){
                $item->weight(config('offering.sidebar.weight'));
                $item->icon(config('offering.sidebar.icon'));
                $item->route('admin.offering.index');
                $item->authorize($this->auth->hasAccess('offering.index'));
            });
        });

        return $menu;
    }
}