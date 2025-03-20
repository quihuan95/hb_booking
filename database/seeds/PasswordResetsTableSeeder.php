<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class PasswordResetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('password_resets')->delete();
        
        \DB::table('password_resets')->insert(array (
            0 => 
            array (
                'email' => 'louis.standbyme3@gmail.com',
                'token' => 'kv6jIdSKBybJEIEY3nd1oGPIPDDGNisY8WkEW9bRQEROLZrhNxUNjcoZTGsSSxmg',
                'created_at' => '2021-11-03 09:25:03',
            ),
        ));
        
        
    }
}