<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class ConfigTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('config')->delete();
        
        \DB::table('config')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Cổng thông tin điện tử Vasel',
                'keywords' => 'vasel, cong thong tin dien tu vasel',
                'description' => 'Cổng thông tin điện tử Vasel',
                'face_app_id' => 'https://facebook.com',
                'author' => 'https://google.com',
                'publisher' => 'https://twitter.com',
                'page_id' => 'https://instagram.com',
                'email' => 'ipaquangninh@gmail.com',
                'phone_number' => '02033533686',
                'canonical' => 'https://investinquangninh.vn/',
                'created_at' => '2021-12-30 06:38:58',
                'updated_at' => '2021-12-30 06:38:58',
                'status' => 'A',
            ),
        ));
        
        
    }
}