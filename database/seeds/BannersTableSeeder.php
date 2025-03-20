<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banners')->delete();
        
        \DB::table('banners')->insert(array (
            0 => 
            array (
                'id' => 26,
                'name' => 'BD',
                'src' => 'https://vasel.vn/storage/app/public/photos/sponsors/7.jpg',
                'redirect' => '/',
                'orders' => 9,
                'idvideo' => NULL,
                'type' => 2,
                'status' => 1,
                'created_at' => '2022-01-25 13:38:53',
            ),
            1 => 
            array (
                'id' => 27,
                'name' => 'Gohnson',
                'src' => 'https://vasel.vn/storage/app/public/photos/sponsors/1.jpg',
                'redirect' => '/',
                'orders' => 1,
                'idvideo' => NULL,
                'type' => 2,
                'status' => 1,
                'created_at' => '2022-01-25 13:39:53',
            ),
            2 => 
            array (
                'id' => 28,
                'name' => 'Medtronic',
                'src' => 'https://vasel.vn/storage/app/public/photos/sponsors/2.jpg',
                'redirect' => '/',
                'orders' => 2,
                'idvideo' => NULL,
                'type' => 2,
                'status' => 1,
                'created_at' => '2022-01-25 13:41:28',
            ),
            3 => 
            array (
                'id' => 29,
                'name' => 'Storz',
                'src' => 'https://vasel.vn/storage/app/public/photos/sponsors/3.jpg',
                'redirect' => '/',
                'orders' => 3,
                'idvideo' => NULL,
                'type' => 2,
                'status' => 1,
                'created_at' => '2022-01-25 13:42:13',
            ),
            4 => 
            array (
                'id' => 30,
                'name' => 'Olymbus',
                'src' => 'https://vasel.vn/storage/app/public/photos/sponsors/4.jpg',
                'redirect' => '/',
                'orders' => 4,
                'idvideo' => NULL,
                'type' => 2,
                'status' => 1,
                'created_at' => '2022-01-25 13:43:12',
            ),
            5 => 
            array (
                'id' => 31,
                'name' => 'AstraZeneca',
                'src' => 'https://vasel.vn/storage/app/public/photos/sponsors/5.jpg',
                'redirect' => '/',
                'orders' => 5,
                'idvideo' => NULL,
                'type' => 2,
                'status' => 1,
                'created_at' => '2022-01-25 13:44:06',
            ),
            6 => 
            array (
                'id' => 32,
                'name' => 'Pfizer',
                'src' => 'https://vasel.vn/storage/app/public/photos/sponsors/6.jpg',
                'redirect' => '/',
                'orders' => 6,
                'idvideo' => NULL,
                'type' => 2,
                'status' => 1,
                'created_at' => '2022-01-25 13:45:00',
            ),
            7 => 
            array (
                'id' => 33,
                'name' => 'Hội nghị khoa học Ngoại khoa và Phẫu thuật nội soi toàn quốc 2022',
                'src' => 'https://vasel.vn/storage/app/public/photos/banner.jpg',
                'redirect' => 'https://vasel.vn/storage/app/public/photos/banner.jpg',
                'orders' => 1,
                'idvideo' => NULL,
                'type' => 1,
                'status' => 1,
                'created_at' => '2022-05-16 10:39:51',
            ),
        ));
        
        
    }
}