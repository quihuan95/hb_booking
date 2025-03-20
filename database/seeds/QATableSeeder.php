<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class QATableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('q_a')->delete();
        
        
        
    }
}