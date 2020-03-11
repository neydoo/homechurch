<?php

namespace Modules\Zones\Sidebar;


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
            $group->item(trans('zones::global.name'),function(Item $item){
                $item->weight(config('zones.sidebar.weight'));
                $item->icon(config('zones.sidebar.icon'));
                $item->route('admin.zones.index');
                $item->authorize($this->auth->hasAccess('zones.index'));
            });
        });

        return $menu;
    }
}