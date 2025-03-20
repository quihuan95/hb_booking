<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class MenusAdminTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus_admin')->delete();
        
        \DB::table('menus_admin')->insert(array (
            0 => 
            array (
                'id' => 1,
                'pid' => 0,
                'name' => 'Dashboard',
                'icon' => 'icon ion-ios-desktop',
                'orders' => 1,
                'folder' => 'dashboard',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            1 => 
            array (
                'id' => 2,
                'pid' => 0,
                'name' => 'News',
                'icon' => 'ion-md-bookmarks',
                'orders' => 2,
                'folder' => 'news/list',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            2 => 
            array (
                'id' => 3,
                'pid' => 2,
                'name' => 'All News',
                'icon' => '',
                'orders' => 2,
                'folder' => 'news/list',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            3 => 
            array (
                'id' => 4,
                'pid' => 2,
                'name' => 'Add News',
                'icon' => '',
                'orders' => 3,
                'folder' => 'news/add',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            4 => 
            array (
                'id' => 5,
                'pid' => 2,
                'name' => 'Categories',
                'icon' => '',
                'orders' => 4,
                'folder' => 'news/categories',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            5 => 
            array (
                'id' => 6,
                'pid' => 2,
                'name' => 'Tags',
                'icon' => '',
                'orders' => 4,
                'folder' => 'news/tags',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            6 => 
            array (
                'id' => 7,
                'pid' => 0,
                'name' => 'Page',
                'icon' => 'icon ion-ios-bookmarks',
                'orders' => 3,
                'folder' => 'page',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            7 => 
            array (
                'id' => 8,
                'pid' => 0,
                'name' => 'Location',
                'icon' => 'icon ion-md-compass',
                'orders' => 4,
                'folder' => 'location',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            8 => 
            array (
                'id' => 9,
                'pid' => 0,
                'name' => 'Hotel',
                'icon' => 'fa fa-building-o',
                'orders' => 5,
                'folder' => 'hotels/list',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            9 => 
            array (
                'id' => 10,
                'pid' => 9,
                'name' => 'All Hotels',
                'icon' => '',
                'orders' => 1,
                'folder' => 'hotels/list',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            10 => 
            array (
                'id' => 11,
                'pid' => 9,
                'name' => 'Add new Hotel',
                'icon' => '',
                'orders' => 2,
                'folder' => 'hotels/add',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            11 => 
            array (
                'id' => 12,
                'pid' => 9,
                'name' => 'Attributes',
                'icon' => '',
                'orders' => 3,
                'folder' => 'hotels/attribute',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            12 => 
            array (
                'id' => 13,
                'pid' => 9,
                'name' => 'Room Attributes',
                'icon' => '',
                'orders' => 3,
                'folder' => 'hotels/room-attribute',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            13 => 
            array (
                'id' => 15,
                'pid' => 0,
                'name' => 'Reviews',
                'icon' => 'icon ion-ios-text',
                'orders' => 6,
                'folder' => 'reviews',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            14 => 
            array (
                'id' => 16,
                'pid' => 0,
                'name' => 'Menu',
                'icon' => 'icon ion-ios-apps',
                'orders' => 7,
                'folder' => 'menu',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            15 => 
            array (
                'id' => 17,
                'pid' => 0,
                'name' => 'Payouts',
                'icon' => 'icon ion-md-card',
                'orders' => 8,
                'folder' => 'payout',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            16 => 
            array (
                'id' => 18,
                'pid' => 0,
                'name' => 'Quản lý yêu cầu',
                'icon' => 'icon ion-ios-apps',
                'orders' => 9,
                'folder' => 'request',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            17 => 
            array (
                'id' => 19,
                'pid' => 0,
                'name' => 'Templates',
                'icon' => 'icon ion-logo-html5',
                'orders' => 11,
                'folder' => 'template',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            18 => 
            array (
                'id' => 20,
                'pid' => 0,
                'name' => 'Setting',
                'icon' => 'icon ion-ios-cog',
                'orders' => 13,
                'folder' => 'setting/general-setting',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            19 => 
            array (
                'id' => 21,
                'pid' => 20,
                'name' => 'General Settings',
                'icon' => '',
                'orders' => 1,
                'folder' => 'setting/general-setting',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            20 => 
            array (
                'id' => 22,
                'pid' => 20,
                'name' => 'Hotel Settings',
                'icon' => '',
                'orders' => 2,
                'folder' => 'setting/hotel-setting',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            21 => 
            array (
                'id' => 23,
                'pid' => 20,
                'name' => 'Space Settings',
                'icon' => '',
                'orders' => 3,
                'folder' => 'setting/space-setting',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            22 => 
            array (
                'id' => 24,
                'pid' => 20,
                'name' => 'Tour Settings',
                'icon' => '',
                'orders' => 4,
                'folder' => 'setting/tour-setting',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            23 => 
            array (
                'id' => 25,
                'pid' => 20,
                'name' => 'News Settings',
                'icon' => '',
                'orders' => 5,
                'folder' => 'setting/news-setting',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            24 => 
            array (
                'id' => 26,
                'pid' => 20,
                'name' => 'Booking Settings',
                'icon' => '',
                'orders' => 6,
                'folder' => 'setting/booking-setting',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            25 => 
            array (
                'id' => 27,
                'pid' => 20,
                'name' => 'User Settings',
                'icon' => '',
                'orders' => 8,
                'folder' => 'setting/user-setting',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            26 => 
            array (
                'id' => 28,
                'pid' => 20,
                'name' => 'Vendor Settings',
                'icon' => '',
                'orders' => 9,
                'folder' => 'setting/vendor-setting',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            27 => 
            array (
                'id' => 29,
                'pid' => 20,
                'name' => 'Payment Settings',
                'icon' => '',
                'orders' => 10,
                'folder' => 'setting/payment-setting',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            28 => 
            array (
                'id' => 30,
                'pid' => 20,
                'name' => 'Style Settings',
                'icon' => '',
                'orders' => 11,
                'folder' => 'setting/style-setting',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            29 => 
            array (
                'id' => 31,
                'pid' => 20,
                'name' => 'Advance Settings',
                'icon' => '',
                'orders' => 12,
                'folder' => 'setting/advance-setting',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
            30 => 
            array (
                'id' => 32,
                'pid' => 20,
                'name' => 'Email Settings',
                'icon' => '',
                'orders' => 13,
                'folder' => 'setting/email-setting',
                'status' => 'A',
                'created_at' => '2022-06-11 17:41:54',
            ),
        ));
        
        
    }
}