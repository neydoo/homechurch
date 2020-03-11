<?php

namespace Modules\Districts\Sidebar;


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
            $group->item(trans('districts::global.name'),function(Item $item){
                $item->weight(config('districts.sidebar.weight'));
                $item->icon(config('districts.sidebar.icon'));
                $item->route('admin.districts.index');
                $item->authorize($this->auth->hasAccess('districts.index'));
            });
        });

        return $menu;
    }
}