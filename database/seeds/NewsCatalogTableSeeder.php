<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class NewsCatalogTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('news_catalog')->delete();
        
        \DB::table('news_catalog')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'title' => 'Cẩm nang',
                'slug' => 'cam-nang',
                'desception' => NULL,
                'rel' => 'dofollow',
                'position' => 1,
                'status' => 1,
                'created_at' => '2022-06-24 10:12:19',
                'updated_at' => '2022-06-24 10:12:19',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'title' => 'Tin tức',
                'slug' => 'tin-tuc',
                'desception' => NULL,
                'rel' => 'dofollow',
                'position' => 2,
                'status' => 1,
                'created_at' => '2022-06-24 10:12:48',
                'updated_at' => '2022-06-24 10:12:48',
            ),
        ));
        
        
    }
}