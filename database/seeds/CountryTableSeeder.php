<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('country')->delete();
        
        \DB::table('country')->insert(array (
            0 => 
            array (
                'id' => 1,
            'data_value' => 'Nha Trang (CXR)',
            'title' => 'Sân bay Cam Ranh, Nha Trang (CXR)',
                'country_search' => 'Nha Trang, Vietnam',
            ),
            1 => 
            array (
                'id' => 2,
            'data_value' => 'Hồ Chí Minh (SGN)',
            'title' => 'Sân bay Tân Sơn Nhất , Hồ Chí Minh (SGN)',
                'country_search' => 'Ho Chi Minh City, Vietnam',
            ),
            2 => 
            array (
                'id' => 3,
            'data_value' => 'Vinh (VII)',
            'title' => 'Sân bay Vinh, Vinh (VII)',
                'country_search' => 'Vinh, Vietnam',
            ),
            3 => 
            array (
                'id' => 4,
            'data_value' => 'Thanh Hóa (THD)',
            'title' => 'Sân bay Thọ Xuân, Thanh Hóa (THD)',
                'country_search' => 'Thanh Hoa, Vietnam',
            ),
            4 => 
            array (
                'id' => 5,
            'data_value' => 'Bắc Kinh (BJS)',
            'title' => 'Tất cả các sân bay, Bắc Kinh (BJS)',
                'country_search' => 'Beijing, China',
            ),
            5 => 
            array (
                'id' => 6,
            'data_value' => 'Dunhuang (DNH)',
            'title' => 'Sân bay Dunhuang , Dunhuang (DNH)',
                'country_search' => 'Dunhuang, China',
            ),
            6 => 
            array (
                'id' => 7,
            'data_value' => 'Tần Hoàng Đảo (SHP)',
            'title' => 'Sân bay Qinhuangdao Shanhaiguan , Tần Hoàng Đảo (SHP)',
                'country_search' => 'Qinhuangdao, China',
            ),
            7 => 
            array (
                'id' => 8,
            'data_value' => 'Manhattan (MHK)',
            'title' => 'Sân bay Manhattan Regional , Manhattan (MHK)',
                'country_search' => 'Manhattan, United States',
            ),
            8 => 
            array (
                'id' => 9,
            'data_value' => 'Hoonah (HNH)',
            'title' => 'Sân bay Hoonah , Hoonah (HNH)',
                'country_search' => 'Hoonah, United States',
            ),
            9 => 
            array (
                'id' => 10,
            'data_value' => 'Trùng Khánh (CKG)',
            'title' => 'Sân bay Trùng Khánh, Trùng Khánh (CKG)',
                'country_search' => 'Chongqing, China',
            ),
            10 => 
            array (
                'id' => 11,
            'data_value' => 'Fernando De Noronha (FEN)',
            'title' => 'Sân bay Fernando de Noronha , Fernando De Noronha (FEN)',
                'country_search' => 'Fernando De Noronha, Brazil',
            ),
            11 => 
            array (
                'id' => 12,
            'data_value' => 'Thanh Đảo (TAO)',
            'title' => 'Sân bay Qingdao Liuting , Thanh Đảo (TAO)',
                'country_search' => 'Qingdao, China',
            ),
            12 => 
            array (
                'id' => 13,
            'data_value' => 'Bắc Kinh (NAY)',
            'title' => 'Sân bay Nanyuan , Bắc Kinh (NAY)',
                'country_search' => 'Beijing, China',
            ),
            13 => 
            array (
                'id' => 14,
            'data_value' => 'Nam Kinh (NKG)',
            'title' => 'Sân bay Nanjing Lukou , Nam Kinh (NKG)',
                'country_search' => 'Nanjing, China',
            ),
            14 => 
            array (
                'id' => 15,
            'data_value' => 'Blenheim (BHE)',
            'title' => 'Sân bay Woodbourne , Blenheim (BHE)',
                'country_search' => 'Blenheim, New Zealand',
            ),
            15 => 
            array (
                'id' => 16,
            'data_value' => 'Thành Đô (CTU)',
            'title' => 'Sân bay Thành Đô, Thành Đô (CTU)',
                'country_search' => 'Chengdu, China',
            ),
            16 => 
            array (
                'id' => 17,
            'data_value' => 'Nam Ninh (NNG)',
            'title' => 'Sân bay Nanning Wuxu , Nam Ninh (NNG)',
                'country_search' => 'Nanning, China',
            ),
            17 => 
            array (
                'id' => 18,
            'data_value' => 'Cô-pen-ha-gen (CPH)',
            'title' => 'Sân bay Copenhagen , Cô-pen-ha-gen (CPH)',
                'country_search' => 'Copenhagen, Denmark',
            ),
            18 => 
            array (
                'id' => 19,
            'data_value' => 'Xanh Pê-téc-bua (LED)',
            'title' => 'Sân bay Pulkovo , Xanh Pê-téc-bua (LED)',
                'country_search' => 'St Petersburg, Russia',
            ),
            19 => 
            array (
                'id' => 20,
            'data_value' => 'Tế Ninh (JNG)',
            'title' => 'Sân bay Khúc Phụ Tế Ninh, Tế Ninh (JNG)',
                'country_search' => 'Tế Ninh, China',
            ),
            20 => 
            array (
                'id' => 21,
            'data_value' => 'Phnôm Pênh (PNH)',
            'title' => 'Sân bay Phnom Penh , Phnôm Pênh (PNH)',
                'country_search' => 'Phnom Penh, Cambodia',
            ),
            21 => 
            array (
                'id' => 22,
            'data_value' => 'Côn Minh (KMG)',
            'title' => 'Sân bay Kunming Changshui , Côn Minh (KMG)',
                'country_search' => 'Kunming, China',
            ),
            22 => 
            array (
                'id' => 23,
            'data_value' => 'Bắc Kinh (PEK)',
            'title' => 'Sân bay Bắc Kinh, Bắc Kinh (PEK)',
                'country_search' => 'Beijing, China',
            ),
            23 => 
            array (
                'id' => 24,
            'data_value' => 'Quảng Ninh (VDO)',
            'title' => 'Sân bay Vân Đồn, Quảng Ninh (VDO)',
                'country_search' => 'Van Don, VietNam',
            ),
            24 => 
            array (
                'id' => 25,
            'data_value' => 'Quảng Bình (VDH)',
            'title' => 'Sân bay Đồng Hới, Quảng Bình (VDH)',
                'country_search' => 'Quang Binh, Vietnam',
            ),
            25 => 
            array (
                'id' => 26,
            'data_value' => 'Quy Nhơn (UIH)',
            'title' => 'Sân bay Phù Cát, Quy Nhơn (UIH)',
                'country_search' => 'Quy Nhơn, Vietnam',
            ),
        ));
        
        
    }
}