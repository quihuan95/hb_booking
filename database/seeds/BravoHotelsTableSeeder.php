<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class BravoHotelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bravo_hotels')->delete();
        
        \DB::table('bravo_hotels')->insert(array (
            0 => 
            array (
                'id' => 3,
                'title' => 'Khách sạn FLC Luxury Quy Nhơn',
                'slug' => 'khach-san-flc-luxury-quy-nhon',
                'content' => NULL,
                'image_id' => 6,
                'banner_image_id' => 0,
                'location_id' => 45,
                'address' => 'Khu 4, Nhơn Lý Bãi Biển Cát Tiến, Xã Nhơn Lý, Thành Phố Quy Nhơn, Bình Định, Việt Nam',
                'map_lat' => NULL,
                'map_lng' => NULL,
                'map_zoom' => NULL,
                'is_featured' => NULL,
                'gallery' => '7,8,9,10,11,12,13,',
                'video' => NULL,
            'policy' => '[{"title":"H\\u01b0\\u1edbng d\\u1eabn nh\\u1eadn ph\\u00f2ng","content":"Quy\\u0301 kha\\u0301ch vui lo\\u0300ng xu\\u00e2\\u0301t tri\\u0300nh H\\u1ecd\\u0302 chi\\u00ea\\u0301u\\/CMND va\\u0300 Phi\\u00ea\\u0301u nh\\u1ea1\\u0302n pho\\u0300ng cu\\u0309a HBG khi nh\\u1ea1\\u0302n pho\\u0300ng ta\\u0323i kha\\u0301ch sa\\u0323n. (Kha\\u0301ch sa\\u0323n co\\u0301 th\\u00ea\\u0309 se\\u0303 ye\\u0302u c\\u00e2\\u0300u Quy\\u0301 kha\\u0301ch s\\u00f4\\u0301 the\\u0309 ti\\u0301n du\\u0323ng ho\\u1ea1\\u0306c ti\\u00ea\\u0300n \\u0111\\u1ea1\\u0306t co\\u0323c cho ca\\u0301c di\\u0323ch vu\\u0323 pha\\u0301t sinh trong th\\u01a1\\u0300i gian lu\\u031bu tru\\u0301 cu\\u0309a Quy\\u0301 kha\\u0301ch)"},{"title":"Ch\\u00ednh s\\u00e1ch ph\\u1ee5 thu tr\\u1ebb em","content":null},{"title":"Ch\\u00ednh s\\u00e1ch tr\\u1ea3 ph\\u00f2ng mu\\u1ed9n","content":"Y\\u00eau c\\u1ea7u tr\\u1ea3 ph\\u00f2ng mu\\u1ed9n s\\u1ebd \\u0111\\u01b0\\u1ee3c \\u0111\\u00e1p \\u1ee9ng t\\u00f9y theo \\u0111i\\u1ec1u ki\\u1ec7n s\\u1eb5n c\\u00f3 c\\u1ee7a ch\\u1ed7 ngh\\u1ec9.\\r\\nTr\\u1ea3 ph\\u00f2ng t\\u1eeb 12:00 \\u0111\\u1ebfn 18:00: ph\\u1ee5 thu 50% ti\\u1ec1n ph\\u00f2ng\\r\\nTr\\u1ea3 ph\\u00f2ng sau 18:00: ph\\u1ee5 thu 100% ti\\u1ec1n ph\\u00f2ng"}]',
                'star_rate' => 2,
                'price' => '0.00',
                'check_in_time' => '14:00PM',
                'check_out_time' => '12:00AM',
                'allow_full_day' => NULL,
                'sale_price' => '0.00',
                'status' => 'publish',
                'create_user' => -1,
                'update_user' => 9,
                'deleted_at' => NULL,
                'created_at' => '2022-06-22 13:57:51',
                'updated_at' => '2022-06-22 13:57:51',
            ),
            1 => 
            array (
                'id' => 4,
                'title' => 'FLC Ha Long Bay Golf Club & Luxury Resort',
                'slug' => 'flc-ha-long-bay-golf-club-luxury-resort',
                'content' => NULL,
                'image_id' => 14,
                'banner_image_id' => 0,
                'location_id' => 45,
                'address' => NULL,
                'map_lat' => NULL,
                'map_lng' => NULL,
                'map_zoom' => NULL,
                'is_featured' => NULL,
                'gallery' => '15,16,17,18,19,20,21,22,23,24,',
                'video' => NULL,
            'policy' => '[{"title":"H\\u01b0\\u1edbng d\\u1eabn nh\\u1eadn ph\\u00f2ng","content":"Quy\\u0301 kha\\u0301ch vui lo\\u0300ng xu\\u00e2\\u0301t tri\\u0300nh H\\u1ecd\\u0302 chi\\u00ea\\u0301u\\/CMND va\\u0300 Phi\\u00ea\\u0301u nh\\u1ea1\\u0302n pho\\u0300ng cu\\u0309a HBG khi nh\\u1ea1\\u0302n pho\\u0300ng ta\\u0323i kha\\u0301ch sa\\u0323n. (Kha\\u0301ch sa\\u0323n co\\u0301 th\\u00ea\\u0309 se\\u0303 ye\\u0302u c\\u00e2\\u0300u Quy\\u0301 kha\\u0301ch s\\u00f4\\u0301 the\\u0309 ti\\u0301n du\\u0323ng ho\\u1ea1\\u0306c ti\\u00ea\\u0300n \\u0111\\u1ea1\\u0306t co\\u0323c cho ca\\u0301c di\\u0323ch vu\\u0323 pha\\u0301t sinh trong th\\u01a1\\u0300i gian lu\\u031bu tru\\u0301 cu\\u0309a Quy\\u0301 kha\\u0301ch)"},{"title":"Ch\\u00ednh s\\u00e1ch ph\\u1ee5 thu tr\\u1ebb em","content":null},{"title":"Ch\\u00ednh s\\u00e1ch tr\\u1ea3 ph\\u00f2ng mu\\u1ed9n","content":"Y\\u00eau c\\u1ea7u tr\\u1ea3 ph\\u00f2ng mu\\u1ed9n s\\u1ebd \\u0111\\u01b0\\u1ee3c \\u0111\\u00e1p \\u1ee9ng t\\u00f9y theo \\u0111i\\u1ec1u ki\\u1ec7n s\\u1eb5n c\\u00f3 c\\u1ee7a ch\\u1ed7 ngh\\u1ec9.\\r\\nTr\\u1ea3 ph\\u00f2ng t\\u1eeb 12:00 \\u0111\\u1ebfn 18:00: ph\\u1ee5 thu 50% ti\\u1ec1n ph\\u00f2ng\\r\\nTr\\u1ea3 ph\\u00f2ng sau 18:00: ph\\u1ee5 thu 100% ti\\u1ec1n ph\\u00f2ng"}]',
                'star_rate' => 3,
                'price' => '0.00',
                'check_in_time' => '14:00PM',
                'check_out_time' => '12:00AM',
                'allow_full_day' => NULL,
                'sale_price' => '0.00',
                'status' => 'publish',
                'create_user' => -1,
                'update_user' => 9,
                'deleted_at' => NULL,
                'created_at' => '2022-06-22 14:26:23',
                'updated_at' => '2022-06-22 14:26:23',
            ),
            2 => 
            array (
                'id' => 5,
                'title' => 'Khách Sạn FLC Luxury Sầm Sơn',
                'slug' => 'khach-san-flc-luxury-sam-son',
                'content' => NULL,
                'image_id' => 25,
                'banner_image_id' => 0,
                'location_id' => 45,
                'address' => 'Quảng Cư, Thị Xã Sầm Sơn, Thanh Hóa, Việt Nam',
                'map_lat' => NULL,
                'map_lng' => NULL,
                'map_zoom' => NULL,
                'is_featured' => NULL,
                'gallery' => '26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,',
                'video' => NULL,
            'policy' => '[{"title":"H\\u01b0\\u1edbng d\\u1eabn nh\\u1eadn ph\\u00f2ng","content":"Quy\\u0301 kha\\u0301ch vui lo\\u0300ng xu\\u00e2\\u0301t tri\\u0300nh H\\u1ecd\\u0302 chi\\u00ea\\u0301u\\/CMND va\\u0300 Phi\\u00ea\\u0301u nh\\u1ea1\\u0302n pho\\u0300ng cu\\u0309a HBG khi nh\\u1ea1\\u0302n pho\\u0300ng ta\\u0323i kha\\u0301ch sa\\u0323n. (Kha\\u0301ch sa\\u0323n co\\u0301 th\\u00ea\\u0309 se\\u0303 ye\\u0302u c\\u00e2\\u0300u Quy\\u0301 kha\\u0301ch s\\u00f4\\u0301 the\\u0309 ti\\u0301n du\\u0323ng ho\\u1ea1\\u0306c ti\\u00ea\\u0300n \\u0111\\u1ea1\\u0306t co\\u0323c cho ca\\u0301c di\\u0323ch vu\\u0323 pha\\u0301t sinh trong th\\u01a1\\u0300i gian lu\\u031bu tru\\u0301 cu\\u0309a Quy\\u0301 kha\\u0301ch)"},{"title":"Ch\\u00ednh s\\u00e1ch ph\\u1ee5 thu tr\\u1ebb em","content":null},{"title":"Ch\\u00ednh s\\u00e1ch tr\\u1ea3 ph\\u00f2ng mu\\u1ed9n","content":"Y\\u00eau c\\u1ea7u tr\\u1ea3 ph\\u00f2ng mu\\u1ed9n s\\u1ebd \\u0111\\u01b0\\u1ee3c \\u0111\\u00e1p \\u1ee9ng t\\u00f9y theo \\u0111i\\u1ec1u ki\\u1ec7n s\\u1eb5n c\\u00f3 c\\u1ee7a ch\\u1ed7 ngh\\u1ec9.\\r\\nTr\\u1ea3 ph\\u00f2ng t\\u1eeb 12:00 \\u0111\\u1ebfn 18:00: ph\\u1ee5 thu 50% ti\\u1ec1n ph\\u00f2ng\\r\\nTr\\u1ea3 ph\\u00f2ng sau 18:00: ph\\u1ee5 thu 100% ti\\u1ec1n ph\\u00f2ng"}]',
                'star_rate' => 5,
                'price' => '0.00',
                'check_in_time' => '14:00PM',
                'check_out_time' => '12:00AM',
                'allow_full_day' => NULL,
                'sale_price' => '0.00',
                'status' => 'publish',
                'create_user' => -1,
                'update_user' => 9,
                'deleted_at' => NULL,
                'created_at' => '2022-06-22 14:34:11',
                'updated_at' => '2022-06-22 14:34:11',
            ),
            3 => 
            array (
                'id' => 6,
                'title' => 'Khách Sạn FLC Grand Sầm Sơn',
                'slug' => 'khach-san-flc-grand-sam-son',
                'content' => NULL,
                'image_id' => 46,
                'banner_image_id' => 0,
                'location_id' => 45,
                'address' => 'Bãi Biển Sầm Sơn, Hồ Xuân Hương, Thị Xã Sầm Sơn, Thanh Hóa, Việt Nam',
                'map_lat' => NULL,
                'map_lng' => NULL,
                'map_zoom' => NULL,
                'is_featured' => NULL,
                'gallery' => '47,48,49,50,51,52,53,54,55,56,57,',
                'video' => NULL,
            'policy' => '[{"title":"H\\u01b0\\u1edbng d\\u1eabn nh\\u1eadn ph\\u00f2ng","content":"Quy\\u0301 kha\\u0301ch vui lo\\u0300ng xu\\u00e2\\u0301t tri\\u0300nh H\\u1ecd\\u0302 chi\\u00ea\\u0301u\\/CMND va\\u0300 Phi\\u00ea\\u0301u nh\\u1ea1\\u0302n pho\\u0300ng cu\\u0309a HBG khi nh\\u1ea1\\u0302n pho\\u0300ng ta\\u0323i kha\\u0301ch sa\\u0323n. (Kha\\u0301ch sa\\u0323n co\\u0301 th\\u00ea\\u0309 se\\u0303 ye\\u0302u c\\u00e2\\u0300u Quy\\u0301 kha\\u0301ch s\\u00f4\\u0301 the\\u0309 ti\\u0301n du\\u0323ng ho\\u1ea1\\u0306c ti\\u00ea\\u0300n \\u0111\\u1ea1\\u0306t co\\u0323c cho ca\\u0301c di\\u0323ch vu\\u0323 pha\\u0301t sinh trong th\\u01a1\\u0300i gian lu\\u031bu tru\\u0301 cu\\u0309a Quy\\u0301 kha\\u0301ch)"},{"title":"Ch\\u00ednh s\\u00e1ch ph\\u1ee5 thu tr\\u1ebb em","content":null},{"title":"Ch\\u00ednh s\\u00e1ch tr\\u1ea3 ph\\u00f2ng mu\\u1ed9n","content":"Y\\u00eau c\\u1ea7u tr\\u1ea3 ph\\u00f2ng mu\\u1ed9n s\\u1ebd \\u0111\\u01b0\\u1ee3c \\u0111\\u00e1p \\u1ee9ng t\\u00f9y theo \\u0111i\\u1ec1u ki\\u1ec7n s\\u1eb5n c\\u00f3 c\\u1ee7a ch\\u1ed7 ngh\\u1ec9.\\r\\nTr\\u1ea3 ph\\u00f2ng t\\u1eeb 12:00 \\u0111\\u1ebfn 18:00: ph\\u1ee5 thu 50% ti\\u1ec1n ph\\u00f2ng\\r\\nTr\\u1ea3 ph\\u00f2ng sau 18:00: ph\\u1ee5 thu 100% ti\\u1ec1n ph\\u00f2ng"}]',
                'star_rate' => 5,
                'price' => '0.00',
                'check_in_time' => '14:00PM',
                'check_out_time' => '12:00AM',
                'allow_full_day' => NULL,
                'sale_price' => '0.00',
                'status' => 'publish',
                'create_user' => -1,
                'update_user' => 9,
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 16:47:09',
                'updated_at' => '2022-06-23 16:47:09',
            ),
            4 => 
            array (
                'id' => 7,
                'title' => 'Khách Sạn Caravelle Sài Gòn',
                'slug' => 'khach-san-caravelle-sai-gon',
                'content' => NULL,
                'image_id' => 58,
                'banner_image_id' => 0,
                'location_id' => 26,
                'address' => '19 - 23, Công Trường Lam Sơn, Quận 1, Hồ Chí Minh, Việt Nam',
                'map_lat' => NULL,
                'map_lng' => NULL,
                'map_zoom' => NULL,
                'is_featured' => NULL,
                'gallery' => '59,60,61,62,63,64,65,',
                'video' => NULL,
            'policy' => '[{"title":"H\\u01b0\\u1edbng d\\u1eabn nh\\u1eadn ph\\u00f2ng","content":"Quy\\u0301 kha\\u0301ch vui lo\\u0300ng xu\\u00e2\\u0301t tri\\u0300nh H\\u1ecd\\u0302 chi\\u00ea\\u0301u\\/CMND va\\u0300 Phi\\u00ea\\u0301u nh\\u1ea1\\u0302n pho\\u0300ng cu\\u0309a HBG khi nh\\u1ea1\\u0302n pho\\u0300ng ta\\u0323i kha\\u0301ch sa\\u0323n. (Kha\\u0301ch sa\\u0323n co\\u0301 th\\u00ea\\u0309 se\\u0303 ye\\u0302u c\\u00e2\\u0300u Quy\\u0301 kha\\u0301ch s\\u00f4\\u0301 the\\u0309 ti\\u0301n du\\u0323ng ho\\u1ea1\\u0306c ti\\u00ea\\u0300n \\u0111\\u1ea1\\u0306t co\\u0323c cho ca\\u0301c di\\u0323ch vu\\u0323 pha\\u0301t sinh trong th\\u01a1\\u0300i gian lu\\u031bu tru\\u0301 cu\\u0309a Quy\\u0301 kha\\u0301ch)"},{"title":"Ch\\u00ednh s\\u00e1ch ph\\u1ee5 thu tr\\u1ebb em","content":null},{"title":"Ch\\u00ednh s\\u00e1ch tr\\u1ea3 ph\\u00f2ng mu\\u1ed9n","content":"Y\\u00eau c\\u1ea7u tr\\u1ea3 ph\\u00f2ng mu\\u1ed9n s\\u1ebd \\u0111\\u01b0\\u1ee3c \\u0111\\u00e1p \\u1ee9ng t\\u00f9y theo \\u0111i\\u1ec1u ki\\u1ec7n s\\u1eb5n c\\u00f3 c\\u1ee7a ch\\u1ed7 ngh\\u1ec9.\\r\\nTr\\u1ea3 ph\\u00f2ng t\\u1eeb 12:00 \\u0111\\u1ebfn 18:00: ph\\u1ee5 thu 50% ti\\u1ec1n ph\\u00f2ng\\r\\nTr\\u1ea3 ph\\u00f2ng sau 18:00: ph\\u1ee5 thu 100% ti\\u1ec1n ph\\u00f2ng"}]',
                'star_rate' => 5,
                'price' => '0.00',
                'check_in_time' => '14:00PM',
                'check_out_time' => '12:00AM',
                'allow_full_day' => NULL,
                'sale_price' => '0.00',
                'status' => 'publish',
                'create_user' => -1,
                'update_user' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-06-27 10:20:56',
                'updated_at' => '2022-06-27 10:20:56',
            ),
            5 => 
            array (
                'id' => 8,
                'title' => 'Khách Sạn Diamond Legend',
                'slug' => 'khach-san-diamond-legend',
                'content' => NULL,
                'image_id' => 66,
                'banner_image_id' => 0,
                'location_id' => 46,
                'address' => '59, Hàng Cót, Quận Hoàn Kiếm, Hà Nội, Việt Nam',
                'map_lat' => NULL,
                'map_lng' => NULL,
                'map_zoom' => NULL,
                'is_featured' => NULL,
                'gallery' => '67,68,69,70,71,',
                'video' => NULL,
            'policy' => '[{"title":"H\\u01b0\\u1edbng d\\u1eabn nh\\u1eadn ph\\u00f2ng","content":"Quy\\u0301 kha\\u0301ch vui lo\\u0300ng xu\\u00e2\\u0301t tri\\u0300nh H\\u1ecd\\u0302 chi\\u00ea\\u0301u\\/CMND va\\u0300 Phi\\u00ea\\u0301u nh\\u1ea1\\u0302n pho\\u0300ng cu\\u0309a HBG khi nh\\u1ea1\\u0302n pho\\u0300ng ta\\u0323i kha\\u0301ch sa\\u0323n. (Kha\\u0301ch sa\\u0323n co\\u0301 th\\u00ea\\u0309 se\\u0303 ye\\u0302u c\\u00e2\\u0300u Quy\\u0301 kha\\u0301ch s\\u00f4\\u0301 the\\u0309 ti\\u0301n du\\u0323ng ho\\u1ea1\\u0306c ti\\u00ea\\u0300n \\u0111\\u1ea1\\u0306t co\\u0323c cho ca\\u0301c di\\u0323ch vu\\u0323 pha\\u0301t sinh trong th\\u01a1\\u0300i gian lu\\u031bu tru\\u0301 cu\\u0309a Quy\\u0301 kha\\u0301ch)"},{"title":"Ch\\u00ednh s\\u00e1ch ph\\u1ee5 thu tr\\u1ebb em","content":null},{"title":"Ch\\u00ednh s\\u00e1ch tr\\u1ea3 ph\\u00f2ng mu\\u1ed9n","content":"Y\\u00eau c\\u1ea7u tr\\u1ea3 ph\\u00f2ng mu\\u1ed9n s\\u1ebd \\u0111\\u01b0\\u1ee3c \\u0111\\u00e1p \\u1ee9ng t\\u00f9y theo \\u0111i\\u1ec1u ki\\u1ec7n s\\u1eb5n c\\u00f3 c\\u1ee7a ch\\u1ed7 ngh\\u1ec9.\\r\\nTr\\u1ea3 ph\\u00f2ng t\\u1eeb 12:00 \\u0111\\u1ebfn 18:00: ph\\u1ee5 thu 50% ti\\u1ec1n ph\\u00f2ng\\r\\nTr\\u1ea3 ph\\u00f2ng sau 18:00: ph\\u1ee5 thu 100% ti\\u1ec1n ph\\u00f2ng"}]',
                'star_rate' => 5,
                'price' => '0.00',
                'check_in_time' => NULL,
                'check_out_time' => NULL,
                'allow_full_day' => NULL,
                'sale_price' => '0.00',
                'status' => 'publish',
                'create_user' => -1,
                'update_user' => 11,
                'deleted_at' => NULL,
                'created_at' => '2022-07-25 09:43:15',
                'updated_at' => '2022-07-25 09:43:15',
            ),
        ));
        
        
    }
}