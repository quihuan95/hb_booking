<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'title' => 'Menu chính',
                'slug' => 'menu-chinh',
                'redirect' => NULL,
                'position' => 1,
                'level' => 1,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-06-14 15:42:58',
                'updated_at' => '2022-06-14 15:42:58',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 1,
                'title' => 'Trang chủ',
                'slug' => 'trang-chu',
                'redirect' => '/',
                'position' => 1,
                'level' => 1,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-06-15 13:52:45',
                'updated_at' => '2022-06-15 13:52:45',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 1,
                'title' => 'Khách sạn',
                'slug' => 'khach-san',
                'redirect' => 'https://hoabinhbooking.test/khach-san',
                'position' => 2,
                'level' => 2,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2025-03-15 11:52:16',
                'updated_at' => '2022-07-26 09:18:13',
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 1,
                'title' => 'Tin tức',
                'slug' => 'tin-tuc',
                'redirect' => 'https://hoabinhbooking.test/tin-tuc',
                'position' => 3,
                'level' => 3,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2025-03-15 11:52:25',
                'updated_at' => '2022-08-01 10:54:28',
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 1,
                'title' => 'Cẩm nang',
                'slug' => 'cam-nang',
                'redirect' => 'https://hoabinhbooking.test/cam-nang',
                'position' => 4,
                'level' => 4,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2025-03-15 11:52:31',
                'updated_at' => '2022-07-23 11:34:53',
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 1,
                'title' => 'Liên hệ',
                'slug' => 'lien-he',
                'redirect' => 'https://hoabinhbooking.test/lien-he',
                'position' => 5,
                'level' => 5,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2025-03-15 11:52:33',
                'updated_at' => '2022-07-23 11:35:24',
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 3,
                'title' => 'Khách sạn miền bắc',
                'slug' => 'khach-san-mien-bac',
                'redirect' => NULL,
                'position' => 1,
                'level' => 1,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 09:51:54',
                'updated_at' => '2022-07-23 09:51:54',
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => 3,
                'title' => 'Khách sạn miền Trung',
                'slug' => 'khach-san-mien-trung',
                'redirect' => NULL,
                'position' => 2,
                'level' => 2,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 09:52:31',
                'updated_at' => '2022-07-23 09:52:31',
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => 3,
                'title' => 'Khách sạn miền Nam',
                'slug' => 'khach-san-mien-nam',
                'redirect' => NULL,
                'position' => 3,
                'level' => 3,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 09:52:53',
                'updated_at' => '2022-07-23 09:52:53',
            ),
            9 => 
            array (
                'id' => 10,
                'parent_id' => 3,
                'title' => 'Chuỗi khách sạn',
                'slug' => 'chuoi-khach-san',
                'redirect' => NULL,
                'position' => 4,
                'level' => 4,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 09:53:19',
                'updated_at' => '2022-07-23 09:53:19',
            ),
            10 => 
            array (
                'id' => 11,
                'parent_id' => 7,
                'title' => 'Cát Bà - Hải Phòng',
                'slug' => 'cat-ba-hai-phong',
                'redirect' => NULL,
                'position' => 1,
                'level' => 1,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 09:53:47',
                'updated_at' => '2022-07-23 09:53:47',
            ),
            11 => 
            array (
                'id' => 12,
                'parent_id' => 7,
                'title' => 'Hạ Long - Quảng Ninh',
                'slug' => 'ha-long-quang-ninh',
                'redirect' => NULL,
                'position' => 2,
                'level' => 2,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 09:54:05',
                'updated_at' => '2022-07-23 09:54:05',
            ),
            12 => 
            array (
                'id' => 13,
                'parent_id' => 7,
                'title' => 'Hà Nội',
                'slug' => 'ha-noi',
                'redirect' => NULL,
                'position' => 3,
                'level' => 3,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 09:54:23',
                'updated_at' => '2022-07-23 09:54:23',
            ),
            13 => 
            array (
                'id' => 14,
                'parent_id' => 7,
                'title' => 'Mai Châu - Hòa Bình',
                'slug' => 'mai-chau-hoa-binh',
                'redirect' => NULL,
                'position' => 4,
                'level' => 4,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 09:54:44',
                'updated_at' => '2022-07-23 09:54:44',
            ),
            14 => 
            array (
                'id' => 15,
                'parent_id' => 7,
                'title' => 'Mộc Châu - Sơn La',
                'slug' => 'moc-chau-son-la',
                'redirect' => NULL,
                'position' => 5,
                'level' => 5,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 09:55:03',
                'updated_at' => '2022-07-23 09:55:03',
            ),
            15 => 
            array (
                'id' => 16,
                'parent_id' => 7,
                'title' => 'Ninh Bình',
                'slug' => 'ninh-binh',
                'redirect' => NULL,
                'position' => 6,
                'level' => 6,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 09:55:22',
                'updated_at' => '2022-07-23 09:55:22',
            ),
            16 => 
            array (
                'id' => 17,
                'parent_id' => 7,
                'title' => 'Sapa - Lào Cai',
                'slug' => 'sapa-lao-cai',
                'redirect' => NULL,
                'position' => 7,
                'level' => 7,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 09:55:40',
                'updated_at' => '2022-07-23 09:55:40',
            ),
            17 => 
            array (
                'id' => 18,
                'parent_id' => 7,
                'title' => 'Vĩnh Phúc',
                'slug' => 'vinh-phuc',
                'redirect' => NULL,
                'position' => 8,
                'level' => 8,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 09:56:11',
                'updated_at' => '2022-07-23 09:56:11',
            ),
            18 => 
            array (
                'id' => 19,
                'parent_id' => 8,
                'title' => 'Bình Thuận',
                'slug' => 'binh-thuan',
                'redirect' => NULL,
                'position' => 1,
                'level' => 1,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 09:56:55',
                'updated_at' => '2022-07-23 09:56:55',
            ),
            19 => 
            array (
                'id' => 20,
                'parent_id' => 8,
                'title' => 'Đà Lạt',
                'slug' => 'da-lat',
                'redirect' => NULL,
                'position' => 2,
                'level' => 2,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 09:57:13',
                'updated_at' => '2022-07-23 09:57:13',
            ),
            20 => 
            array (
                'id' => 21,
                'parent_id' => 8,
                'title' => 'Đà Nẵng',
                'slug' => 'da-nang',
                'redirect' => NULL,
                'position' => 3,
                'level' => 3,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 09:57:30',
                'updated_at' => '2022-07-23 09:57:30',
            ),
            21 => 
            array (
                'id' => 22,
                'parent_id' => 8,
                'title' => 'Hội An',
                'slug' => 'hoi-an',
                'redirect' => NULL,
                'position' => 4,
                'level' => 4,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 09:57:46',
                'updated_at' => '2022-07-23 09:57:46',
            ),
            22 => 
            array (
                'id' => 23,
                'parent_id' => 8,
                'title' => 'Huế',
                'slug' => 'hue',
                'redirect' => NULL,
                'position' => 5,
                'level' => 5,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 09:58:05',
                'updated_at' => '2022-07-23 09:58:05',
            ),
            23 => 
            array (
                'id' => 24,
                'parent_id' => 8,
                'title' => 'Nha Trang',
                'slug' => 'nha-trang',
                'redirect' => NULL,
                'position' => 6,
                'level' => 6,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 09:58:25',
                'updated_at' => '2022-07-23 09:58:25',
            ),
            24 => 
            array (
                'id' => 25,
                'parent_id' => 8,
                'title' => 'Ninh Thuận',
                'slug' => 'ninh-thuan',
                'redirect' => NULL,
                'position' => 7,
                'level' => 7,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 09:59:11',
                'updated_at' => '2022-07-23 09:59:11',
            ),
            25 => 
            array (
                'id' => 26,
                'parent_id' => 8,
                'title' => 'Phú Yên',
                'slug' => 'phu-yen',
                'redirect' => NULL,
                'position' => 8,
                'level' => 8,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 09:59:43',
                'updated_at' => '2022-07-23 09:59:43',
            ),
            26 => 
            array (
                'id' => 27,
                'parent_id' => 8,
                'title' => 'Quy Nhơn - Bình Định',
                'slug' => 'quy-nhon-binh-dinh',
                'redirect' => NULL,
                'position' => 10,
                'level' => 10,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 10:00:01',
                'updated_at' => '2022-07-23 10:00:01',
            ),
            27 => 
            array (
                'id' => 28,
                'parent_id' => 9,
                'title' => 'Cần Thơ',
                'slug' => 'can-tho',
                'redirect' => NULL,
                'position' => 1,
                'level' => 1,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 10:00:22',
                'updated_at' => '2022-07-23 10:00:22',
            ),
            28 => 
            array (
                'id' => 29,
                'parent_id' => 9,
                'title' => 'Côn Đảo',
                'slug' => 'con-dao',
                'redirect' => NULL,
                'position' => 2,
                'level' => 2,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 10:00:38',
                'updated_at' => '2022-07-23 10:00:38',
            ),
            29 => 
            array (
                'id' => 30,
                'parent_id' => 9,
                'title' => 'Hồ Chí Minh',
                'slug' => 'ho-chi-minh',
                'redirect' => NULL,
                'position' => 3,
                'level' => 3,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 10:00:54',
                'updated_at' => '2022-07-23 10:00:54',
            ),
            30 => 
            array (
                'id' => 31,
                'parent_id' => 9,
                'title' => 'Phú Quốc',
                'slug' => 'phu-quoc',
                'redirect' => NULL,
                'position' => 4,
                'level' => 4,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 10:01:10',
                'updated_at' => '2022-07-23 10:01:10',
            ),
            31 => 
            array (
                'id' => 32,
                'parent_id' => 9,
                'title' => 'Vũng Tàu',
                'slug' => 'vung-tau',
                'redirect' => NULL,
                'position' => 5,
                'level' => 5,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 10:01:37',
                'updated_at' => '2022-07-23 10:01:37',
            ),
            32 => 
            array (
                'id' => 33,
                'parent_id' => 10,
                'title' => 'Chuỗi Flamingo',
                'slug' => 'chuoi-flamingo',
                'redirect' => NULL,
                'position' => 1,
                'level' => 1,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 10:01:57',
                'updated_at' => '2022-07-23 10:01:57',
            ),
            33 => 
            array (
                'id' => 34,
                'parent_id' => 10,
                'title' => 'Chuỗi FLC',
                'slug' => 'chuoi-flc',
                'redirect' => NULL,
                'position' => 2,
                'level' => 2,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 10:02:12',
                'updated_at' => '2022-07-23 10:02:12',
            ),
            34 => 
            array (
                'id' => 35,
                'parent_id' => 10,
                'title' => 'Chuỗi Fusions',
                'slug' => 'chuoi-fusions',
                'redirect' => NULL,
                'position' => 3,
                'level' => 3,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 10:02:27',
                'updated_at' => '2022-07-23 10:02:27',
            ),
            35 => 
            array (
                'id' => 36,
                'parent_id' => 10,
                'title' => 'Chuỗi Meliá',
                'slug' => 'chuoi-melia',
                'redirect' => NULL,
                'position' => 4,
                'level' => 4,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 10:02:43',
                'updated_at' => '2022-07-23 10:02:43',
            ),
            36 => 
            array (
                'id' => 37,
                'parent_id' => 10,
                'title' => 'Chuỗi Mường Thanh',
                'slug' => 'chuoi-muong-thanh',
                'redirect' => NULL,
                'position' => 5,
                'level' => 5,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 10:02:59',
                'updated_at' => '2022-07-23 10:02:59',
            ),
            37 => 
            array (
                'id' => 38,
                'parent_id' => 10,
                'title' => 'Chuỗi Victoria',
                'slug' => 'chuoi-victoria',
                'redirect' => NULL,
                'position' => 6,
                'level' => 6,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 10:03:16',
                'updated_at' => '2022-07-23 10:03:16',
            ),
            38 => 
            array (
                'id' => 39,
                'parent_id' => 10,
                'title' => 'Chuỗi Vinpearl',
                'slug' => 'chuoi-vinpearl',
                'redirect' => NULL,
                'position' => 7,
                'level' => 7,
                'desception' => NULL,
                'rel' => 1,
                'idvideo' => NULL,
                'icon_url' => NULL,
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'status' => 1,
                'created_at' => '2022-07-23 10:03:32',
                'updated_at' => '2022-07-23 10:03:32',
            ),
        ));
        
        
    }
}