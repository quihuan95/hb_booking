<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('videos')->delete();
        
        \DB::table('videos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => '"Khám bệnh an toàn - Không lo Covid" - Tư vấn bệnh lý Đại trực tràng',
                'slug' => 'kham-benh-an-toan-khong-lo-covid-tu-van-benh-ly-dai-truc-trang',
                'code' => 'T0hlL15yx4k',
                'img' => 'https://vasel.vn/storage/app/public/photos/video/vd1.jpg',
                'desc1' => NULL,
                'orders' => 1,
                'status' => 'A',
                'created_at' => '2021-11-01 13:55:02',
                'updated_at' => '2021-11-01 13:55:02',
            ),
            1 => 
            array (
                'id' => 3,
                'title' => 'Phẫu thuật nội soi qua lỗ liên hợp điều trị thoát vị đĩa đệm cột sống thắt lưng',
                'slug' => 'phau-thuat-noi-soi-qua-lo-lien-hop-dieu-tri-thoat-vi-dia-dem-cot-song-that-lung',
                'code' => 'pljJBnCJiX4',
                'img' => 'https://vasel.vn/storage/app/public/photos/video/vd2.jpg',
                'desc1' => NULL,
                'orders' => 2,
                'status' => 'A',
                'created_at' => '2021-11-01 13:54:47',
                'updated_at' => '2021-11-01 13:54:47',
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'Chương trình đào tạo trực tuyến Kỹ thuật phẫu thuật cột sống ít xâm lấn',
                'slug' => 'chuong-trinh-dao-tao-truc-tuyen-ky-thuat-phau-thuat-cot-song-it-xam-lan',
                'code' => 'GeX6DK4y7vk',
                'img' => 'https://vasel.vn/storage/app/public/photos/video/vd3.jpg',
                'desc1' => NULL,
                'orders' => 3,
                'status' => 'A',
                'created_at' => '2021-11-01 14:02:27',
                'updated_at' => '2021-11-01 14:02:27',
            ),
            3 => 
            array (
                'id' => 5,
                'title' => 'Điều trị ung thư gan bằng sóng cao tần',
                'slug' => 'dieu-tri-ung-thu-gan-bang-song-cao-tan',
                'code' => 'nj5Sm1tnaFQ',
                'img' => 'https://vasel.vn/storage/app/public/photos/video/vd4.jpg',
                'desc1' => NULL,
                'orders' => 4,
                'status' => 'A',
                'created_at' => '2021-11-01 14:05:54',
                'updated_at' => '2021-11-01 14:05:54',
            ),
            4 => 
            array (
                'id' => 6,
                'title' => 'Khám và tư vấn miễn phí Bệnh lý Tăng huyết áp',
                'slug' => 'kham-va-tu-van-mien-phi-benh-ly-tang-huyet-ap',
                'code' => 'p_ssrAjxwWQ',
                'img' => 'https://vasel.vn/storage/app/public/photos/video/vd5.jpg',
                'desc1' => NULL,
                'orders' => 5,
                'status' => 'A',
                'created_at' => '2021-11-01 14:09:04',
                'updated_at' => '2021-11-01 14:09:04',
            ),
        ));
        
        
    }
}