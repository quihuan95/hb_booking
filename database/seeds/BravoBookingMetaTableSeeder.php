<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class BravoBookingMetaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bravo_booking_meta')->delete();
        
        \DB::table('bravo_booking_meta')->insert(array (
            0 => 
            array (
                'id' => 1,
                'booking_id' => 3,
                'name' => 'qtyroom',
                'val' => '2',
                'create_user' => NULL,
                'update_user' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'booking_id' => 4,
                'name' => 'qtyroom',
                'val' => '2',
                'create_user' => NULL,
                'update_user' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'booking_id' => 5,
                'name' => 'qtyroom',
                'val' => '2',
                'create_user' => NULL,
                'update_user' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'booking_id' => 1,
                'name' => 'qtyroom',
                'val' => '2',
                'create_user' => NULL,
                'update_user' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'booking_id' => 2,
                'name' => 'qtyroom',
                'val' => '3',
                'create_user' => NULL,
                'update_user' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'booking_id' => NULL,
                'name' => NULL,
                'val' => '5',
                'create_user' => NULL,
                'update_user' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'booking_id' => NULL,
                'name' => NULL,
                'val' => '3',
                'create_user' => NULL,
                'update_user' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'booking_id' => NULL,
                'name' => NULL,
                'val' => '1',
                'create_user' => NULL,
                'update_user' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}