<?php

namespace Modules\Zone\Sidebar;


use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Maatwebsite\Sidebar\SidebarExtender as PackageSideBarExtender;
use Modules\Core\Sidebar\BaseSidebarExtender;

class SidebarExtender extends BaseSidebarExtender implements PackageSideBarExtender
{
    public function extendWith(Menu $menu)
    {
        $menu->group(trans('core::global.menus.hierarchy'), function (Group $group)
        {
            $group->item(trans('zone::global.name'),function(Item $item){
                $item->weight(config('zone.sidebar.weight'));
                $item->icon(config('zone.sidebar.icon'));
                $item->route('admin.zone.index');
                $item->authorize($this->auth->hasAccess('zone.index'));
            });
        });

        return $menu;
    }
}