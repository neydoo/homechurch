<?php

namespace Modules\Partners\Sidebar;


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
            $group->item('Partners',function(Item $item){
                $item->weight(config('partners.sidebar.weight'));
                $item->icon(config('partners.sidebar.icon'));
                $item->route('admin.partners.index');
                $item->authorize($this->auth->hasAccess('partners.index'));
            });
        });

        return $menu;
    }
}