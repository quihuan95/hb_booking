<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class BravoHotelRoomListCalendarsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bravo_hotel_room_list_calendars')->delete();
        
        \DB::table('bravo_hotel_room_list_calendars')->insert(array (
            0 => 
            array (
                'id' => 1,
                'hotel_id' => 1,
                'code' => '844475605',
                'title' => 'Room1',
                'area' => '50',
                'view' => 'Hướng biển',
                'bed_type' => 'Giường đơn',
                'bed_num' => '1',
                'adults' => '1',
                'children' => '0',
                'user_id' => '9',
                'created_at' => '2022-06-20 16:06:49',
                'updated_at' => '2022-06-20 16:06:49',
                'status' => 'A',
            ),
            1 => 
            array (
                'id' => 2,
                'hotel_id' => 6,
                'code' => '334688780',
                'title' => 'Phòng Grand Comfort 2 Giường Đơn Hướng Biển',
                'area' => '33',
                'view' => 'Hướng biển',
                'bed_type' => 'Giường đơn',
                'bed_num' => '2',
                'adults' => '3',
                'children' => '0',
                'user_id' => '9',
                'created_at' => '2022-06-23 08:46:34',
                'updated_at' => '2022-06-23 08:46:34',
                'status' => 'A',
            ),
            2 => 
            array (
                'id' => 3,
                'hotel_id' => 6,
                'code' => '1058572325',
                'title' => 'Phòng Grand Comfort 1 Giường Lớn Hướng Biển',
                'area' => '33',
                'view' => 'Hướng biển',
                'bed_type' => 'Giường King',
                'bed_num' => '1',
                'adults' => '3',
                'children' => '0',
                'user_id' => '9',
                'created_at' => '2022-06-23 08:48:55',
                'updated_at' => '2022-06-23 08:48:55',
                'status' => 'A',
            ),
            3 => 
            array (
                'id' => 4,
                'hotel_id' => 6,
                'code' => '1716974340',
                'title' => 'Phòng Grand Premier 1 Giường Lớn Hướng Hồ',
                'area' => '55',
                'view' => 'Hướng Hồ',
                'bed_type' => 'Giường đôi',
                'bed_num' => '1',
                'adults' => '3',
                'children' => '0',
                'user_id' => '9',
                'created_at' => '2022-06-23 08:51:01',
                'updated_at' => '2022-06-23 08:51:01',
                'status' => 'A',
            ),
            4 => 
            array (
                'id' => 5,
                'hotel_id' => 6,
                'code' => '272729030',
                'title' => 'Phòng Grand Suite 2 Phòng Ngủ',
                'area' => '71',
                'view' => 'Hướng Vườn',
                'bed_type' => '1 giường đôi và 1 giường Queen',
                'bed_num' => '2',
                'adults' => '6',
                'children' => '0',
                'user_id' => '9',
                'created_at' => '2022-06-23 08:55:29',
                'updated_at' => '2022-06-23 08:55:29',
                'status' => 'A',
            ),
            5 => 
            array (
                'id' => 6,
                'hotel_id' => 8,
                'code' => '1302352163',
                'title' => 'Standard Double Room',
                'area' => '18m2',
                'view' => 'Hướng Nội Bộ',
                'bed_type' => 'Giường đôi',
                'bed_num' => '1',
                'adults' => '2',
                'children' => '1',
                'user_id' => '11',
                'created_at' => '2022-07-25 10:13:52',
                'updated_at' => '2022-07-25 10:13:52',
                'status' => 'A',
            ),
            6 => 
            array (
                'id' => 7,
                'hotel_id' => 8,
                'code' => '1534649087',
                'title' => 'Superior Double or Twin Room',
                'area' => '20m2',
                'view' => 'Hướng Nội Bộ',
                'bed_type' => 'Giường đôi',
                'bed_num' => '1',
                'adults' => '2',
                'children' => '1',
                'user_id' => '11',
                'created_at' => '2022-07-25 10:14:51',
                'updated_at' => '2022-07-25 10:14:51',
                'status' => 'A',
            ),
            7 => 
            array (
                'id' => 8,
                'hotel_id' => 8,
                'code' => '272293881',
                'title' => 'Deluxe Room',
                'area' => '25m2',
                'view' => 'Hướng Thành Phố',
                'bed_type' => 'Giường đơn',
                'bed_num' => '2',
                'adults' => '2',
                'children' => '1',
                'user_id' => '11',
                'created_at' => '2022-07-25 10:16:05',
                'updated_at' => '2022-07-25 10:16:05',
                'status' => 'A',
            ),
            8 => 
            array (
                'id' => 9,
                'hotel_id' => 8,
                'code' => '982322534',
                'title' => 'Suite Triple Room',
                'area' => '40m2',
                'view' => 'Hướng thành phố',
                'bed_type' => 'Giường đôi',
                'bed_num' => '2',
                'adults' => '4',
                'children' => '0',
                'user_id' => '11',
                'created_at' => '2022-07-25 10:18:44',
                'updated_at' => '2022-07-25 10:18:44',
                'status' => 'A',
            ),
            9 => 
            array (
                'id' => 10,
                'hotel_id' => 8,
                'code' => '2005404840',
                'title' => 'Family Suite',
                'area' => '45m2',
                'view' => 'Hướng một phần',
                'bed_type' => 'Giường đôi',
                'bed_num' => '3',
                'adults' => '6',
                'children' => '0',
                'user_id' => '11',
                'created_at' => '2022-07-25 10:20:02',
                'updated_at' => '2022-07-25 10:20:02',
                'status' => 'A',
            ),
        ));
        
        
    }
}