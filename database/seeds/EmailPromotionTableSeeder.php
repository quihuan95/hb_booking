<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class EmailPromotionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('email_promotion')->delete();
        
        \DB::table('email_promotion')->insert(array (
            0 => 
            array (
                'id' => 1,
                'email' => 'thanhls1987@gmail.com',
                'status' => 'A',
                'created_at' => '2021-06-01 07:54:00',
            ),
            1 => 
            array (
                'id' => 2,
                'email' => 'Trnghaiyen436@gmail.com',
                'status' => 'A',
                'created_at' => '2021-06-16 17:16:03',
            ),
            2 => 
            array (
                'id' => 3,
                'email' => 'minhsangnew@gmail.com',
                'status' => 'A',
                'created_at' => '2021-06-18 12:07:53',
            ),
            3 => 
            array (
                'id' => 4,
                'email' => 'tranhlibra.ads@gmail.com',
                'status' => 'A',
                'created_at' => '2021-07-22 17:35:09',
            ),
            4 => 
            array (
                'id' => 5,
                'email' => 'thanhls1987@gmail.com',
                'status' => 'A',
                'created_at' => '2021-12-30 11:32:50',
            ),
            5 => 
            array (
                'id' => 6,
                'email' => 'webmaster@hoabinhtourist.com',
                'status' => 'A',
                'created_at' => '2022-01-13 10:23:32',
            ),
        ));
        
        
    }
}