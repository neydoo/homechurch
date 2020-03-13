<?php

namespace Modules\Groupchats\Sidebar;


use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Maatwebsite\Sidebar\SidebarExtender as PackageSideBarExtender;
use Modules\Core\Sidebar\BaseSidebarExtender;

class SidebarExtender extends BaseSidebarExtender implements PackageSideBarExtender
{
    public function extendWith(Menu $menu)
    {
        $menu->group(trans('core::global.menus.manage'), function (Group $group)
        {
            $group->item(trans('groupchats::global.name'),function(Item $item){
                $item->weight(config('groupchats.sidebar.weight'));
                $item->icon(config('groupchats.sidebar.icon'));
                $item->route('admin.groupchats.index');
                $item->authorize($this->auth->hasAccess('groupchats.index'));
            });
        });

        return $menu;
    }
}