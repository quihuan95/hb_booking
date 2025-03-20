<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class UsersfTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('usersf')->delete();
        
        \DB::table('usersf')->insert(array (
            0 => 
            array (
                'id' => 1,
                'fullname' => NULL,
                'phone' => NULL,
                'email' => NULL,
                'password' => NULL,
                'status' => 'A',
                'created_at' => '2021-06-10 21:54:11',
            ),
            1 => 
            array (
                'id' => 2,
                'fullname' => 'rrrrr',
                'phone' => '0988542856',
                'email' => 'webmaster@hoabinhtourist.com',
                'password' => 'ttttttttt',
                'status' => 'A',
                'created_at' => '2021-06-10 21:56:46',
            ),
            2 => 
            array (
                'id' => 3,
                'fullname' => 'ttttt',
                'phone' => '0988542856',
                'email' => 'webmaster@hoabinhtourist.com',
                'password' => 'ttttttttt',
                'status' => 'A',
                'created_at' => '2021-06-11 00:09:09',
            ),
            3 => 
            array (
                'id' => 4,
                'fullname' => 'Mai Thao',
                'phone' => '0986369860',
                'email' => 'thao.mai@hoabinhtourist.com',
                'password' => 'Ducphuc1',
                'status' => 'A',
                'created_at' => '2021-06-11 15:24:31',
            ),
            4 => 
            array (
                'id' => 5,
                'fullname' => 'test',
                'phone' => '0988542856',
                'email' => 'webmaster@hoabinhtourist.com',
                'password' => '123456',
                'status' => 'A',
                'created_at' => '2021-06-11 15:38:36',
            ),
            5 => 
            array (
                'id' => 6,
                'fullname' => 'test',
                'phone' => '0988542856',
                'email' => 'tesst@gmail.com',
                'password' => '123456789',
                'status' => 'A',
                'created_at' => '2021-06-11 16:18:50',
            ),
            6 => 
            array (
                'id' => 7,
                'fullname' => 'Mai Thao',
                'phone' => '0903486959',
                'email' => 'thao.mai@hoabinhtourist.com',
                'password' => 'Ducphuc1',
                'status' => 'A',
                'created_at' => '2021-06-11 16:24:23',
            ),
        ));
        
        
    }
}