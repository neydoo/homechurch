<?php

namespace Modules\Churches\Sidebar;


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
            $group->item(trans('churches::global.name'),function(Item $item){
                $item->weight(config('churches.sidebar.weight'));
                $item->icon(config('churches.sidebar.icon'));
                $item->route('admin.churches.index');
                $item->authorize($this->auth->hasAccess('churches.index'));
            });
        });

        return $menu;
    }
}