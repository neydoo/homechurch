<?php

namespace Modules\Announcements\Sidebar;


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
            $group->item(trans('announcements::global.name'),function(Item $item){
                $item->weight(config('announcements.sidebar.weight'));
                $item->icon(config('announcements.sidebar.icon'));
                $item->route('admin.announcements.index');
                $item->authorize($this->auth->hasAccess('announcements.index'));
            });
        });

        return $menu;
    }
}