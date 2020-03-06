<?php

namespace Modules\District\Sidebar;


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
            $group->item(trans('district::global.name'),function(Item $item){
                $item->weight(config('district.sidebar.weight'));
                $item->icon(config('district.sidebar.icon'));
                $item->route('admin.district.index');
                $item->authorize($this->auth->hasAccess('district.index'));
            });
        });

        return $menu;
    }
}