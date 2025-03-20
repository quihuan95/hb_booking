<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('location')->delete();
        
        \DB::table('location')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'title' => 'Khách sạn miền bắc',
                'slug' => 'khach-san-mien-bac',
                'desception' => NULL,
                'orders' => 1,
                'status' => 'A',
                'created_at' => '2022-06-15 16:30:15',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 1,
                'title' => 'Cát Bà - Hải Phòng',
                'slug' => 'cat-ba-hai-phong',
                'desception' => NULL,
                'orders' => 1,
                'status' => 'A',
                'created_at' => '2022-06-15 16:45:11',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 1,
                'title' => 'Hạ Long - Quảng Ninh',
                'slug' => 'ha-long-quang-ninh',
                'desception' => NULL,
                'orders' => 2,
                'status' => 'A',
                'created_at' => '2022-06-15 17:02:18',
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 1,
                'title' => 'Mai Châu - Hòa Bình',
                'slug' => 'mai-chau-hoa-binh',
                'desception' => NULL,
                'orders' => 3,
                'status' => 'A',
                'created_at' => '2022-06-15 17:03:44',
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 1,
                'title' => 'Mộc Châu - Sơn La',
                'slug' => 'moc-chau-son-la',
                'desception' => NULL,
                'orders' => 4,
                'status' => 'A',
                'created_at' => '2022-06-15 17:03:58',
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 1,
                'title' => 'Ninh Bình',
                'slug' => 'ninh-binh',
                'desception' => NULL,
                'orders' => 5,
                'status' => 'A',
                'created_at' => '2022-06-15 17:04:11',
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 1,
                'title' => 'Sapa - Lào Cai',
                'slug' => 'sapa-lao-cai',
                'desception' => NULL,
                'orders' => 6,
                'status' => 'A',
                'created_at' => '2022-06-15 17:04:27',
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => 1,
                'title' => 'Vĩnh Phúc',
                'slug' => 'vinh-phuc',
                'desception' => NULL,
                'orders' => 7,
                'status' => 'A',
                'created_at' => '2022-06-15 17:04:39',
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => 0,
                'title' => 'Khách sạn miền Trung',
                'slug' => 'khach-san-mien-trung',
                'desception' => NULL,
                'orders' => 2,
                'status' => 'A',
                'created_at' => '2022-06-15 17:04:52',
            ),
            9 => 
            array (
                'id' => 10,
                'parent_id' => 9,
                'title' => 'Bình Thuận',
                'slug' => 'binh-thuan',
                'desception' => NULL,
                'orders' => 1,
                'status' => 'A',
                'created_at' => '2022-06-15 17:05:03',
            ),
            10 => 
            array (
                'id' => 11,
                'parent_id' => 9,
                'title' => 'Đà Lạt',
                'slug' => 'da-lat',
                'desception' => NULL,
                'orders' => 2,
                'status' => 'A',
                'created_at' => '2022-06-15 17:05:17',
            ),
            11 => 
            array (
                'id' => 12,
                'parent_id' => 9,
                'title' => 'Đà Nẵng',
                'slug' => 'da-nang',
                'desception' => NULL,
                'orders' => 3,
                'status' => 'A',
                'created_at' => '2022-06-15 17:05:29',
            ),
            12 => 
            array (
                'id' => 13,
                'parent_id' => 9,
                'title' => 'Hội An - Quảng Nam',
                'slug' => 'hoi-an-quang-nam',
                'desception' => NULL,
                'orders' => 4,
                'status' => 'A',
                'created_at' => '2022-06-15 17:05:43',
            ),
            13 => 
            array (
                'id' => 14,
                'parent_id' => 9,
                'title' => 'Huế',
                'slug' => 'hue',
                'desception' => NULL,
                'orders' => 5,
                'status' => 'A',
                'created_at' => '2022-06-15 17:05:57',
            ),
            14 => 
            array (
                'id' => 15,
                'parent_id' => 9,
                'title' => 'Nha Trang',
                'slug' => 'nha-trang',
                'desception' => NULL,
                'orders' => 6,
                'status' => 'A',
                'created_at' => '2022-06-15 17:06:39',
            ),
            15 => 
            array (
                'id' => 16,
                'parent_id' => 9,
                'title' => 'Ninh Thuận',
                'slug' => 'ninh-thuan',
                'desception' => NULL,
                'orders' => 7,
                'status' => 'A',
                'created_at' => '2022-06-15 17:06:54',
            ),
            16 => 
            array (
                'id' => 17,
                'parent_id' => 9,
                'title' => 'Phú Yên',
                'slug' => 'phu-yen',
                'desception' => NULL,
                'orders' => 8,
                'status' => 'A',
                'created_at' => '2022-06-15 17:07:14',
            ),
            17 => 
            array (
                'id' => 18,
                'parent_id' => 9,
                'title' => 'Quy Nhơn - Bình Định',
                'slug' => 'quy-nhon-binh-dinh',
                'desception' => NULL,
                'orders' => 9,
                'status' => 'A',
                'created_at' => '2022-06-15 17:07:28',
            ),
            18 => 
            array (
                'id' => 19,
                'parent_id' => 9,
                'title' => 'Nghệ An',
                'slug' => 'nghe-an',
                'desception' => NULL,
                'orders' => 10,
                'status' => 'A',
                'created_at' => '2022-06-15 17:07:42',
            ),
            19 => 
            array (
                'id' => 20,
                'parent_id' => 9,
                'title' => 'Hà Tĩnh',
                'slug' => 'ha-tinh',
                'desception' => NULL,
                'orders' => 11,
                'status' => 'A',
                'created_at' => '2022-06-15 17:07:57',
            ),
            20 => 
            array (
                'id' => 21,
                'parent_id' => 9,
                'title' => 'Quảng Bình',
                'slug' => 'quang-binh',
                'desception' => NULL,
                'orders' => 12,
                'status' => 'A',
                'created_at' => '2022-06-15 17:08:09',
            ),
            21 => 
            array (
                'id' => 22,
                'parent_id' => 9,
                'title' => 'Khánh Hòa',
                'slug' => 'khanh-hoa',
                'desception' => NULL,
                'orders' => 13,
                'status' => 'A',
                'created_at' => '2022-06-15 17:08:23',
            ),
            22 => 
            array (
                'id' => 23,
                'parent_id' => 0,
                'title' => 'Khách sạn miền Nam',
                'slug' => 'khach-san-mien-nam',
                'desception' => NULL,
                'orders' => 3,
                'status' => 'A',
                'created_at' => '2022-06-15 17:12:56',
            ),
            23 => 
            array (
                'id' => 24,
                'parent_id' => 23,
                'title' => 'Cần Thơ',
                'slug' => 'can-tho',
                'desception' => NULL,
                'orders' => 1,
                'status' => 'A',
                'created_at' => '2022-06-15 17:13:08',
            ),
            24 => 
            array (
                'id' => 25,
                'parent_id' => 23,
                'title' => 'Côn Đảo',
                'slug' => 'con-dao',
                'desception' => NULL,
                'orders' => 2,
                'status' => 'A',
                'created_at' => '2022-06-15 17:13:22',
            ),
            25 => 
            array (
                'id' => 26,
                'parent_id' => 23,
                'title' => 'Hồ Chí Minh',
                'slug' => 'ho-chi-minh',
                'desception' => NULL,
                'orders' => 3,
                'status' => 'A',
                'created_at' => '2022-06-15 17:13:35',
            ),
            26 => 
            array (
                'id' => 27,
                'parent_id' => 23,
                'title' => 'Phú Quốc',
                'slug' => 'phu-quoc',
                'desception' => NULL,
                'orders' => 4,
                'status' => 'A',
                'created_at' => '2022-06-15 17:13:50',
            ),
            27 => 
            array (
                'id' => 28,
                'parent_id' => 23,
                'title' => 'Vũng Tàu',
                'slug' => 'vung-tau',
                'desception' => NULL,
                'orders' => 5,
                'status' => 'A',
                'created_at' => '2022-06-15 17:14:02',
            ),
            28 => 
            array (
                'id' => 29,
                'parent_id' => 23,
                'title' => 'Kiên Giang',
                'slug' => 'kien-giang',
                'desception' => NULL,
                'orders' => 6,
                'status' => 'A',
                'created_at' => '2022-06-15 17:14:15',
            ),
            29 => 
            array (
                'id' => 30,
                'parent_id' => 23,
                'title' => 'Phan Thiết',
                'slug' => 'phan-thiet',
                'desception' => NULL,
                'orders' => 7,
                'status' => 'A',
                'created_at' => '2022-06-15 17:14:33',
            ),
            30 => 
            array (
                'id' => 31,
                'parent_id' => 0,
                'title' => 'Chuỗi khách sạn',
                'slug' => 'chuoi-khach-san',
                'desception' => NULL,
                'orders' => 4,
                'status' => 'A',
                'created_at' => '2022-06-15 17:14:48',
            ),
            31 => 
            array (
                'id' => 32,
                'parent_id' => 31,
                'title' => 'Chuỗi Flamingo',
                'slug' => 'chuoi-flamingo',
                'desception' => NULL,
                'orders' => 1,
                'status' => 'A',
                'created_at' => '2022-06-15 17:15:01',
            ),
            32 => 
            array (
                'id' => 33,
                'parent_id' => 31,
                'title' => 'Chuỗi FLC',
                'slug' => 'chuoi-flc',
                'desception' => NULL,
                'orders' => 2,
                'status' => 'A',
                'created_at' => '2022-06-15 17:15:12',
            ),
            33 => 
            array (
                'id' => 34,
                'parent_id' => 31,
                'title' => 'Chuỗi Fusions',
                'slug' => 'chuoi-fusions',
                'desception' => NULL,
                'orders' => 3,
                'status' => 'A',
                'created_at' => '2022-06-15 17:15:24',
            ),
            34 => 
            array (
                'id' => 35,
                'parent_id' => 31,
                'title' => 'Chuỗi Meliá',
                'slug' => 'chuoi-melia',
                'desception' => NULL,
                'orders' => 4,
                'status' => 'A',
                'created_at' => '2022-06-15 17:15:36',
            ),
            35 => 
            array (
                'id' => 36,
                'parent_id' => 31,
                'title' => 'Chuỗi Mường Thanh',
                'slug' => 'chuoi-muong-thanh',
                'desception' => NULL,
                'orders' => 5,
                'status' => 'A',
                'created_at' => '2022-06-15 17:15:48',
            ),
            36 => 
            array (
                'id' => 37,
                'parent_id' => 31,
                'title' => 'Chuỗi Victoria',
                'slug' => 'chuoi-victoria',
                'desception' => NULL,
                'orders' => 6,
                'status' => 'A',
                'created_at' => '2022-06-15 17:16:02',
            ),
            37 => 
            array (
                'id' => 38,
                'parent_id' => 31,
                'title' => 'Chuỗi Vinpearl',
                'slug' => 'chuoi-vinpearl',
                'desception' => NULL,
                'orders' => 7,
                'status' => 'A',
                'created_at' => '2022-06-15 17:16:15',
            ),
            38 => 
            array (
                'id' => 39,
                'parent_id' => 0,
                'title' => 'Điện Biên',
                'slug' => 'dien-bien',
                'desception' => NULL,
                'orders' => 5,
                'status' => 'A',
                'created_at' => '2022-06-15 17:16:39',
            ),
            39 => 
            array (
                'id' => 40,
                'parent_id' => 0,
                'title' => 'Thái Nguyên',
                'slug' => 'thai-nguyen',
                'desception' => NULL,
                'orders' => 6,
                'status' => 'A',
                'created_at' => '2022-06-15 17:16:52',
            ),
            40 => 
            array (
                'id' => 41,
                'parent_id' => 0,
                'title' => 'Hòa Bình',
                'slug' => 'hoa-binh',
                'desception' => NULL,
                'orders' => 7,
                'status' => 'A',
                'created_at' => '2022-06-15 17:17:04',
            ),
            41 => 
            array (
                'id' => 42,
                'parent_id' => 0,
                'title' => 'Bắc Kạn',
                'slug' => 'bac-kan',
                'desception' => NULL,
                'orders' => 8,
                'status' => 'A',
                'created_at' => '2022-06-15 17:17:14',
            ),
            42 => 
            array (
                'id' => 43,
                'parent_id' => 0,
                'title' => 'Quảng Nam',
                'slug' => 'quang-nam',
                'desception' => NULL,
                'orders' => 9,
                'status' => 'A',
                'created_at' => '2022-06-15 17:17:24',
            ),
            43 => 
            array (
                'id' => 44,
                'parent_id' => 0,
                'title' => 'Hải Phòng',
                'slug' => 'hai-phong',
                'desception' => NULL,
                'orders' => 10,
                'status' => 'A',
                'created_at' => '2022-06-15 17:17:33',
            ),
            44 => 
            array (
                'id' => 45,
                'parent_id' => 9,
                'title' => 'Thanh Hóa',
                'slug' => 'thanh-hoa',
                'desception' => NULL,
                'orders' => 10,
                'status' => 'A',
                'created_at' => '2022-06-15 17:07:42',
            ),
            45 => 
            array (
                'id' => 46,
                'parent_id' => 1,
                'title' => 'Thành Phố Hà Nội',
                'slug' => 'ha-noi',
                'desception' => NULL,
                'orders' => 1,
                'status' => 'A',
                'created_at' => '2022-06-15 16:45:11',
            ),
        ));
        
        
    }
}