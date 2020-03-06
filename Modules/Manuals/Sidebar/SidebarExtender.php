<?php

namespace Modules\Manuals\Sidebar;


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
            $group->item(trans('manuals::global.name'),function(Item $item){
                $item->weight(config('manuals.sidebar.weight'));
                $item->icon(config('manuals.sidebar.icon'));
                $item->route('admin.manuals.index');
                $item->authorize($this->auth->hasAccess('manuals.index'));
            });
        });

        return $menu;
    }
}