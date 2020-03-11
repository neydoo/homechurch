<?php

namespace Modules\Areas\Sidebar;


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
            $group->item(trans('areas::global.name'),function(Item $item){
                $item->weight(config('areas.sidebar.weight'));
                $item->icon(config('areas.sidebar.icon'));
                $item->route('admin.areas.index');
                $item->authorize($this->auth->hasAccess('areas.index'));
            });
        });

        return $menu;
    }
}