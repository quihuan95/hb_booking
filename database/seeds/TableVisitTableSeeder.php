<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class TableVisitTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('table_visit')->delete();
        
        \DB::table('table_visit')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'today',
                'today' => '17',
                'value' => 22,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'all',
                'today' => '',
                'value' => 366285,
            ),
        ));
        
        
    }
}