<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'administrator',
                'email' => 'administrator',
                'password' => 'd1c189b0a30f7f66c0c955eb0f00b228',
                'display_name' => '123456A@',
                'gender' => 1,
                'birthday' => NULL,
                'roles' => 13,
                'remember_token' => 'UHAAfR6iFD8WUIoGWmniJjcDmaexcA7bjl13rbe9',
                'created_at' => NULL,
                'updated_at' => '2021-03-08 09:45:14',
            ),
            1 => 
            array (
                'id' => 16,
                'name' => 'Mạnh Nguyễn',
                'email' => 'nguyenmanh1997.forjob@gmail.com',
                'password' => '0ba3aca3e64a7dc2c22d8fb881ef25f7',
                'display_name' => '123456mgA@',
                'gender' => 1,
                'birthday' => '2022-01-26',
                'roles' => 13,
                'remember_token' => '0DLsdSgjaA5AnJnBDc8ZfZ8kwWyYZNJ9tG9rhree',
                'created_at' => '2022-01-26 06:56:39',
                'updated_at' => '2022-01-26 06:56:39',
            ),
        ));
        
        
    }
}