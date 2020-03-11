<?php

namespace Modules\Area\Sidebar;


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
            $group->item(trans('area::global.name'),function(Item $item){
                $item->weight(config('area.sidebar.weight'));
                $item->icon(config('area.sidebar.icon'));
                $item->route('admin.area.index');
                $item->authorize($this->auth->hasAccess('area.index'));
            });
        });

        return $menu;
    }
}