<?php

namespace Modules\Attendance\Sidebar;


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
            $group->item(trans('attendance::global.name'),function(Item $item){
                $item->weight(config('attendance.sidebar.weight'));
                $item->icon(config('attendance.sidebar.icon'));
                $item->route('admin.attendance.index');
                $item->authorize($this->auth->hasAccess('attendance.index'));
            });
        });

        return $menu;
    }
}