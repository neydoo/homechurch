<?php

namespace Modules\Testimonials\Sidebar;


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
            $group->item('Testimonials',function(Item $item){
                $item->weight(config('testimonials.sidebar.weight'));
                $item->icon(config('testimonials.sidebar.icon'));
                $item->route('admin.testimonials.index');
                $item->authorize($this->auth->hasAccess('testimonials.index'));
                
                // $item->item(trans('core::global.menus.user'), function (Item $item) {
                //     $item->weight(0);
                //     $item->icon('fa fa-users');
                //     $item->route('admin.users.index');
                //     $item->authorize(
                //         $this->auth->hasAccess('users.index')
                //     );
                // });

                // $item->item(trans('core::global.menus.roles'), function (Item $item) {
                //     $item->weight(1);
                //     $item->icon('fa fa-flag-o');
                //     $item->route('admin.users.roles.index');
                //     $item->authorize(
                //         $this->auth->hasAccess('users.roles.index')
                //     );
                // });
            });
        });

        return $menu;
    }
}