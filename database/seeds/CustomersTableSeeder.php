<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customers')->delete();
        
        \DB::table('customers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'fullname' => 'fullname',
                'gender' => 'A',
                'phone' => 'phone',
                'email' => 'email',
                'status' => 1,
                'created_at' => '2021-05-04 23:22:38',
                'updated_at' => now(),
            ),
            1 => 
            array (
                'id' => 2,
                'fullname' => 'fullname',
                'gender' => 'A',
                'phone' => 'phone',
                'email' => 'email',
                'status' => 1,
                'created_at' => '2021-05-04 23:22:38',
                'updated_at' => now(),
            ),
        ));
        
        
    }
}