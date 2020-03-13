<?php

namespace Modules\Homechurches\Sidebar;


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
            $group->item(trans('homechurches::global.name'),function(Item $item){
                $item->weight(config('homechurches.sidebar.weight'));
                $item->icon(config('homechurches.sidebar.icon'));
                $item->route('admin.homechurches.index');
                $item->authorize($this->auth->hasAccess('homechurches.index'));
            });
        });

        return $menu;
    }
}