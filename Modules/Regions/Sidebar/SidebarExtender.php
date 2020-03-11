<?php

namespace Modules\Regions\Sidebar;


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
            $group->item(trans('regions::global.name'),function(Item $item){
                $item->weight(config('regions.sidebar.weight'));
                $item->icon(config('regions.sidebar.icon'));
                $item->route('admin.regions.index');
                $item->authorize($this->auth->hasAccess('regions.index'));
            });
        });

        return $menu;
    }
}