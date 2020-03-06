<?php

namespace Modules\Groupchat\Sidebar;


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
            $group->item(trans('groupchat::global.name'),function(Item $item){
                $item->weight(config('groupchat.sidebar.weight'));
                $item->icon(config('groupchat.sidebar.icon'));
                $item->route('admin.groupchat.index');
                $item->authorize($this->auth->hasAccess('groupchat.index'));
            });
        });

        return $menu;
    }
}