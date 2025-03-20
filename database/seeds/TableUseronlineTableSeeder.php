<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class TableUseronlineTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('table_useronline')->delete();
        
        \DB::table('table_useronline')->insert(array (
            0 => 
            array (
                'created_at' => now(),
                'username' => '',
                'ip' => '66.249.71.213',
                'url' => 'https://vasel.vn/n/hoi-nghi-khoa-hoc-ngoai-khoa-va-phau-thuat-noi-soi-toan-quoc-2022',
                'phpsessid' => '',
            ),
            1 => 
            array (
                'created_at' => now(),
                'username' => '',
                'ip' => '114.119.138.251',
                'url' => 'https://hoingoaikhoa-ptns.vn',
                'phpsessid' => '',
            ),
        ));
        
        
    }
}