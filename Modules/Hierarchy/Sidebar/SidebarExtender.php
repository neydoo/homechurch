<?php

namespace Modules\Hierarchy\Sidebar;


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
            $group->item(trans('hierarchy::global.name'),function(Item $item){
                $item->weight(config('hierarchy.sidebar.weight'));
                $item->icon(config('hierarchy.sidebar.icon'));
                $item->route('admin.hierarchy.index');
                $item->authorize($this->auth->hasAccess('hierarchy.index'));
            });
        });

        return $menu;
    }
}