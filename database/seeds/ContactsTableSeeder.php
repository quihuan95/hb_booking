<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contacts')->delete();
        
        \DB::table('contacts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'fullname' => 'test',
                'phone' => '0123456789',
                'email' => 'lethanh376@gmail.com',
                'date' => '05/04/2021',
                'num' => '1',
                'types' => '2',
                'status' => 'A',
                'created_at' => '2021-06-04 01:54:23',
            ),
        ));
        
        
    }
}