<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class BravoAttrsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bravo_attrs')->delete();
        
        \DB::table('bravo_attrs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Travel Styles',
                'slug' => 'travel-styles',
                'service' => 'tour',
                'create_user' => NULL,
                'update_user' => NULL,
                'created_at' => '2020-09-15 08:30:07',
                'updated_at' => '2020-09-15 08:30:07',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Facilities',
                'slug' => 'facilities',
                'service' => 'tour',
                'create_user' => NULL,
                'update_user' => NULL,
                'created_at' => '2020-09-15 08:30:07',
                'updated_at' => '2020-09-15 08:30:07',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Amenities',
                'slug' => 'amenities',
                'service' => 'space',
                'create_user' => NULL,
                'update_user' => NULL,
                'created_at' => '2020-09-15 08:30:07',
                'updated_at' => '2020-09-15 08:30:07',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Tiện nghi',
                'slug' => 'facilities-1',
                'service' => 'hotel',
                'create_user' => 1,
                'update_user' => NULL,
                'created_at' => '2020-09-15 08:30:07',
                'updated_at' => '2020-09-23 22:01:28',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Hotel Service',
                'slug' => 'hotel-service',
                'service' => 'hotel',
                'create_user' => NULL,
                'update_user' => NULL,
                'created_at' => '2020-09-15 08:30:07',
                'updated_at' => '2020-09-23 15:06:54',
                'deleted_at' => '2020-09-23 15:06:54',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Room Amenities',
                'slug' => 'room-amenities',
                'service' => 'hotel_room',
                'create_user' => NULL,
                'update_user' => NULL,
                'created_at' => '2020-09-15 08:30:07',
                'updated_at' => '2020-09-15 08:30:07',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}