<?php

namespace Modules\Homechurch\Sidebar;


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
            $group->item(trans('homechurch::global.name'),function(Item $item){
                $item->weight(config('homechurch.sidebar.weight'));
                $item->icon(config('homechurch.sidebar.icon'));
                $item->route('admin.homechurch.index');
                $item->authorize($this->auth->hasAccess('homechurch.index'));
            });
        });

        return $menu;
    }
}