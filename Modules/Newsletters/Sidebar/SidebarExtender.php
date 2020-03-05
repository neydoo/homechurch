<?php

namespace Modules\Newsletters\Sidebar;


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
            $group->item(trans('newsletters::global.name'),function(Item $item){
                $item->weight(config('newsletters.sidebar.weight'));
                $item->icon(config('newsletters.sidebar.icon'));
                $item->route('admin.newsletters.index');
                $item->authorize($this->auth->hasAccess('newsletters.index'));
            });
        });

        return $menu;
    }
}