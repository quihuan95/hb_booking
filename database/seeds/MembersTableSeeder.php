<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('members')->delete();
        
        \DB::table('members')->insert(array (
            0 => 
            array (
                'id' => 1,
                'position' => 'Anh',
                'name' => 'Tuan',
                'department' => 'truyen thong',
                'workplace' => 'doan thi diem',
                'city' => 'hà nội',
                'receiving_address' => 'Cơ quan',
                'address' => '21 y mieu - ngo sy lien - dong da - hanoi',
                'phone' => '0987923793',
                'mobile' => '09879237931',
                'fax' => '09879237932',
                'email' => 'louis.standbyme@gmail.com',
                'password' => '$2y$10$yLNP5F.B.tIbAEvJdjwBYOI3eWZs9ARciUMWK45or8XU3XAfrKU5y',
                'remember_token' => 'vdYCSpkdIfffEIVGWtRdmugH1urGJYoLVc6ri86S5pRTM4RsCOL32IO8tljG',
                'is_member' => 1,
                'membership_code' => 'sdfdfdfdfdfdf',
                'created_at' => '2021-11-02 17:21:08',
                'updated_at' => '2021-11-03 09:32:56',
            ),
            1 => 
            array (
                'id' => 3,
                'position' => 'Bác sĩ',
                'name' => 'Ngô Sỹ Thanh Nam',
                'department' => 'Ngoại tiêu hóa',
                'workplace' => 'Bv Tâm Anh',
                'city' => 'Hà Nội',
                'receiving_address' => 'Nhà riêng',
                'address' => 'Nhà 403, tập thể A7, 34 Ngọc Khánh, Ngọc Khánh, Ba Đình, Hà Nội',
                'phone' => '0915224868',
                'mobile' => '0915224868',
                'fax' => 'không',
                'email' => 'dr.namngo@gmail.com',
                'password' => '$2y$10$QXoVNHMmWw3jJyfoOCNZduuk6rLQqFcaCsYhHh8KBY4BVC30fg.Ui',
                'remember_token' => 'EW2P19aZNhuzXVTkRt4ka085XA48DSRKBADQJCeVe5qF6wX5ZzhVwiHYNYzm',
                'is_member' => 1,
                'membership_code' => 'không',
                'created_at' => '2021-12-11 15:38:35',
                'updated_at' => '2021-12-11 15:38:35',
            ),
            2 => 
            array (
                'id' => 4,
                'position' => 'Anh',
                'name' => 'Nguyễn Hữu Bình',
                'department' => 'Ngoại Tổng Hợp',
                'workplace' => 'Bệnh viện đa khoa khu vực Quảng Nam',
                'city' => 'Quảng Nam',
                'receiving_address' => 'Nhà riêng',
                'address' => 'Duy Vinh, Duy Xuyên, Quảng Nam',
                'phone' => '0359257375',
                'mobile' => '0359257375',
                'fax' => 'không',
                'email' => 'nguyenhuubinh0609@gmail.com',
                'password' => '$2y$10$khQo63RrXB2.CyXZbINs3OZ2MspeWNcy6eeo.lNz3m.L4V.yqiBZ2',
                'remember_token' => 'GQe61bJ6TGnAz7E2Cd7mWA8AwJLD6ojBaWPSlkfM2KGl5ZbNIQtBsXvp3e11',
                'is_member' => 0,
                'membership_code' => 'không',
                'created_at' => '2021-12-11 18:39:12',
                'updated_at' => '2021-12-11 18:39:12',
            ),
            3 => 
            array (
                'id' => 5,
                'position' => 'Anh',
                'name' => 'Nguyễn Tiến Đạt',
                'department' => 'Sinh viên Bác sỹ Đa khoa',
                'workplace' => 'Đại học Y Khoa Vinh',
                'city' => 'Vinh',
                'receiving_address' => 'Nhà riêng',
                'address' => 'Số 269, đường Lê Đại Hành, phường Hưng Trí, thị xã Kỳ Anh, tỉnh Hà Tĩnh',
                'phone' => '0987713697',
                'mobile' => '0987713697',
                'fax' => 'Không có',
                'email' => 'tiendat276@gmail.com',
                'password' => '$2y$10$35nAIt09Z2xueBiFXpnj3OmZ2o4SHwhFY9RSb0gwBfQnZeL2xDlCG',
                'remember_token' => '8HX8tIj9HeT8mFLaCu0CtCiDFNRgxMeAt70eOIPHpIIOp1TdO7prp3mdEg32',
                'is_member' => 0,
                'membership_code' => 'Không có',
                'created_at' => '2021-12-12 19:45:23',
                'updated_at' => '2021-12-12 19:45:23',
            ),
            4 => 
            array (
                'id' => 9,
                'position' => 'Anh',
                'name' => 'tran thedu',
                'department' => 'Ngoại Nhũ học - Tiêu hóa',
                'workplace' => 'Bệnh viện Ung bướu thành phố Cần Thơ',
                'city' => 'Cần Thơ',
                'receiving_address' => 'Nhà riêng',
                'address' => '12/15, Nguyen Van Linh street, Binh Pho A,',
                'phone' => '0383209341',
                'mobile' => '038329341',
                'fax' => NULL,
                'email' => 'thedutran@gmail.com',
                'password' => '$2y$10$uS2ObtxAea3qFGXBoAtjfePvn9bdvUcO9x/jxTjGtQuGDVUodQT3u',
                'remember_token' => '',
                'is_member' => 0,
                'membership_code' => NULL,
                'created_at' => '2021-12-20 16:14:02',
                'updated_at' => '2021-12-20 16:14:02',
            ),
            5 => 
            array (
                'id' => 10,
                'position' => 'Chị',
                'name' => 'cao thị hoàn',
                'department' => 'abc',
                'workplace' => 'abc',
                'city' => 'ha o',
                'receiving_address' => 'Cơ quan',
                'address' => '40 tràn thi',
                'phone' => NULL,
                'mobile' => '0985000039',
                'fax' => NULL,
                'email' => 'hoanct175@gmail.com',
                'password' => '$2y$10$AoiDjlGSE4lYTn9qTZx.2uxoA8FVn3NBHd6JD4VU2Vx9PxkGS95Gy',
                'remember_token' => '',
                'is_member' => 0,
                'membership_code' => NULL,
                'created_at' => '2021-12-21 12:26:19',
                'updated_at' => '2021-12-21 12:26:19',
            ),
        ));
        
        
    }
}