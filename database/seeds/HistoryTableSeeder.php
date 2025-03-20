<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class HistoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('history')->delete();
        
        \DB::table('history')->insert(array (
            0 => 
            array (
                'id' => 1,
                'account' => 'administrator',
                'signin' => '2022-06-24 08:34:51',
                'signout' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'account' => 'administrator',
                'signin' => '2022-07-22 13:46:06',
                'signout' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'account' => 'administrator',
                'signin' => '2025-03-14 07:56:28',
                'signout' => NULL,
            ),
        ));
        
        
    }
}