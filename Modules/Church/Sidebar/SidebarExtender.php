<?php

namespace Modules\Church\Sidebar;


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
            $group->item(trans('church::global.name'),function(Item $item){
                $item->weight(config('church.sidebar.weight'));
                $item->icon(config('church.sidebar.icon'));
                $item->route('admin.church.index');
                $item->authorize($this->auth->hasAccess('church.index'));
            });
        });

        return $menu;
    }
}