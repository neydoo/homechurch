<?php namespace Modules\Menus\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use DB;

class MenuLinksTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_links')->truncate();

        $menu_links = [

            [
                'id' => '1',
                'slug' => '/',
                'parent_id' => 0,
                'page_id' => 1,
                'uri' => '',
                'title' => 'Home',
                'status' => '1',
                'url' => '',
                'link_type' => '',
                'menu_id' => '1',
                'position' => null,
                'created_at' => '2015-06-25 21:57:44',
                'updated_at' => '2015-06-25 20:26:35',
            ],
            [
                'id' => '2',
                'slug' => '/',
                'parent_id' => 0,
                'page_id' => 2,
                'uri' => '',
                'url' => '',
                'title' => 'About Us',
                'status' => '1',
                'menu_id' => '1',
                'link_type' => '',
                'position' => null,
                'created_at' => '2015-06-25 21:57:44',
                'updated_at' => '2015-06-25 20:26:35',
            ],
            [
                'id' => '6',
                'slug' => '/',
                'parent_id' => 0,
                'page_id' => 6,
                'url' => '',
                'uri' => '',
                'title' => 'Media',
                'link_type' => '',
                'status' => '1',
                'menu_id' => '1',
                'position' => null,
                'created_at' => '2015-06-25 21:57:44',
                'updated_at' => '2015-06-25 20:26:35',
            ],            
            [
                'id' => '7',
                'slug' => '/',
                'parent_id' => 6,
                'page_id' => 7,
                'url' => '',
                'uri' => '',
                'title' => 'Photo Gallery',
                'status' => '1',
                'menu_id' => '1',
                'link_type' => '',
                'position' => null,
                'created_at' => '2015-06-25 21:57:44',
                'updated_at' => '2015-06-25 20:26:35',
            ],
            [
                'id' => '8',
                'slug' => '/',
                'parent_id' => 6,
                'page_id' => 8,
                'url' => '',
                'uri' => '/',
                'title' => 'Events',
                'status' => '1',
                'menu_id' => '1',
                'link_type' => '',
                'position' => null,
                'created_at' => '2015-06-25 21:57:44',
                'updated_at' => '2015-06-25 20:26:35',
            ],
            [
                'id' => '9',
                'slug' => '/',
                'parent_id' => 6,
                'page_id' => 9,
                'url' => '',
                'uri' => '',
                'title' => 'Messages',
                'status' => '1',
                'menu_id' => '1',
                'link_type' => '',
                'position' => null,
                'created_at' => '2015-06-25 21:57:44',
                'updated_at' => '2015-06-25 20:26:35',
            ],
            [
                'id' => '10',
                'slug' => '/',
                'parent_id' => 6,
                'page_id' => 10,
                'url' => '',
                'uri' => '',
                'title' => 'Testimonials',
                'status' => '1',
                'menu_id' => '1',
                'position' => null,
                'link_type' => '',
                'created_at' => '2015-06-25 21:57:44',
                'updated_at' => '2015-06-25 20:26:35',
            ],            
            [
                'id' => '11',
                'slug' => '/',
                'parent_id' => 0,
                'page_id' => 3,
                'url' => '',
                'uri' => '/',
                'title' => 'Contact Us',
                'link_type' => '',
                'status' => '1',
                'menu_id' => '1',
                'position' => null,
                'created_at' => '2015-06-25 21:57:44',
                'updated_at' => '2015-06-25 20:26:35',
            ],
            [
                'id' => '12',
                'slug' => '/',
                'parent_id' => 0,
                'page_id' => 1,
                'uri' => '',
                'title' => 'Home',
                'link_type' => '',
                'status' => '1',
                'url' => '',
                'menu_id' => '2',
                'position' => null,
                'created_at' => '2015-06-25 21:57:44',
                'updated_at' => '2015-06-25 20:26:35',
            ],
            [
                'id' => '13',
                'slug' => '/',
                'parent_id' => 0,
                'page_id' => 2,
                'uri' => '',
                'url' => '',
                'title' => 'About Us',
                'link_type' => '',
                'status' => '1',
                'menu_id' => '2',
                'position' => null,
                'created_at' => '2015-06-25 21:57:44',
                'updated_at' => '2015-06-25 20:26:35',
            ],
            [
                'id' => '14',
                'slug' => '/',
                'parent_id' => 0,
                'page_id' => 6,
                'url' => '',
                'uri' => '',
                'title' => 'Media',
                'link_type' => '',
                'status' => '1',
                'menu_id' => '2',
                'position' => null,
                'created_at' => '2015-06-25 21:57:44',
                'updated_at' => '2015-06-25 20:26:35',
            ],
            [
                'id' => '15',
                'slug' => '/',
                'parent_id' => 0,
                'page_id' => 3,
                'url' => '',
                'uri' => '/',
                'title' => 'Contact Us',
                'status' => '1',
                'menu_id' => '2',
                'link_type' => '',
                'position' => null,
                'created_at' => '2015-06-25 21:57:44',
                'updated_at' => '2015-06-25 20:26:35',
            ],
        ];
        DB::table('menu_links')->insert( $menu_links );
    }

}