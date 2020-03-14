<?php

namespace Modules\Offerring\Sidebar;


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
            $group->item(trans('offerring::global.name'),function(Item $item){
                $item->weight(config('offerring.sidebar.weight'));
                $item->icon(config('offerring.sidebar.icon'));
                $item->route('admin.offerring.index');
                $item->authorize($this->auth->hasAccess('offerring.index'));
            });
        });

        return $menu;
    }
}