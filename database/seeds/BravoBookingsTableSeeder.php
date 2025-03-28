<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class BravoBookingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bravo_bookings')->delete();
        
        \DB::table('bravo_bookings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => '82c65c4e02586cd68060141a716bdb8e',
                'vendor_id' => 11,
                'customer_id' => 1,
                'payment_id' => NULL,
                'gateway' => NULL,
                'object_id' => 11,
                'object_model' => 'hotel',
                'start_date' => '2020-09-23 00:00:00',
                'end_date' => '2020-09-26 00:00:00',
                'total' => '0.00',
                'total_guests' => 0,
                'currency' => NULL,
                'status' => '1',
                'deposit' => NULL,
                'deposit_type' => NULL,
                'commission' => NULL,
                'commission_type' => NULL,
                'email' => 'louis.standbyme@gmail.com',
                'first_name' => 'cao minh tuan',
                'last_name' => NULL,
                'phone' => '09879273934',
                'address' => NULL,
                'address2' => NULL,
                'city' => NULL,
                'state' => NULL,
                'zip_code' => NULL,
                'country' => NULL,
                'customer_notes' => 'sdfdsfsdfs',
                'create_user' => 1,
                'update_user' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-09-23 21:39:41',
                'updated_at' => '2020-09-23 21:39:41',
                'buyer_fees' => '',
                'total_before_fees' => '0.00',
                'paid_vendor' => NULL,
                'object_child_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => '8c2fc02a7b5b8aa6f80e67ecc2323857',
                'vendor_id' => 11,
                'customer_id' => 1,
                'payment_id' => NULL,
                'gateway' => NULL,
                'object_id' => 11,
                'object_model' => 'hotel',
                'start_date' => '2020-09-25 00:00:00',
                'end_date' => '2020-10-09 00:00:00',
                'total' => '0.00',
                'total_guests' => 0,
                'currency' => NULL,
                'status' => '1',
                'deposit' => NULL,
                'deposit_type' => NULL,
                'commission' => NULL,
                'commission_type' => NULL,
                'email' => 'thienduongmanga@gmail.com',
                'first_name' => 'Nguyễn thanh nhàn',
                'last_name' => NULL,
                'phone' => '0923482343',
                'address' => NULL,
                'address2' => NULL,
                'city' => NULL,
                'state' => NULL,
                'zip_code' => NULL,
                'country' => NULL,
                'customer_notes' => 'toi muon phong xin',
                'create_user' => 1,
                'update_user' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-09-23 21:46:26',
                'updated_at' => '2020-09-23 21:46:26',
                'buyer_fees' => '',
                'total_before_fees' => '0.00',
                'paid_vendor' => NULL,
                'object_child_id' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => '0f5f467269a00e30dabad6dc8febd3cd',
                'vendor_id' => 11,
                'customer_id' => 1,
                'payment_id' => NULL,
                'gateway' => NULL,
                'object_id' => 11,
                'object_model' => 'hotel',
                'start_date' => '2020-09-25 00:00:00',
                'end_date' => '2020-10-07 00:00:00',
                'total' => '0.00',
                'total_guests' => 0,
                'currency' => NULL,
                'status' => '1',
                'deposit' => NULL,
                'deposit_type' => NULL,
                'commission' => NULL,
                'commission_type' => NULL,
                'email' => 'hoabinhwebmaster@gmail.com',
                'first_name' => 'by dinh thi',
                'last_name' => NULL,
                'phone' => '0892834343',
                'address' => NULL,
                'address2' => NULL,
                'city' => NULL,
                'state' => NULL,
                'zip_code' => NULL,
                'country' => NULL,
                'customer_notes' => 'sádfdsfdffsfsfsfd',
                'create_user' => 1,
                'update_user' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-09-23 21:52:52',
                'updated_at' => '2020-09-23 21:52:52',
                'buyer_fees' => '',
                'total_before_fees' => '0.00',
                'paid_vendor' => NULL,
                'object_child_id' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'd4223cd3d36998ac17c14ce6cca58c40',
                'vendor_id' => 11,
                'customer_id' => 1,
                'payment_id' => NULL,
                'gateway' => NULL,
                'object_id' => 11,
                'object_model' => 'hotel',
                'start_date' => '2020-10-02 00:00:00',
                'end_date' => '2020-10-10 00:00:00',
                'total' => '0.00',
                'total_guests' => 0,
                'currency' => NULL,
                'status' => 'cancelled',
                'deposit' => NULL,
                'deposit_type' => NULL,
                'commission' => NULL,
                'commission_type' => NULL,
                'email' => 'webmaster@hoabinh-group.com',
                'first_name' => 'ohayoe',
                'last_name' => NULL,
                'phone' => '9923434343',
                'address' => NULL,
                'address2' => NULL,
                'city' => NULL,
                'state' => NULL,
                'zip_code' => NULL,
                'country' => NULL,
                'customer_notes' => 'dsfsafsdffsfdsfs',
                'create_user' => 1,
                'update_user' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-09-23 21:54:54',
                'updated_at' => '2020-09-23 22:22:02',
                'buyer_fees' => '',
                'total_before_fees' => '0.00',
                'paid_vendor' => NULL,
                'object_child_id' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 'f8e896da371c7b7c4e7930024ea4cf23',
                'vendor_id' => 18,
                'customer_id' => 1,
                'payment_id' => NULL,
                'gateway' => NULL,
                'object_id' => 18,
                'object_model' => 'hotel',
                'start_date' => '2021-06-18 00:00:00',
                'end_date' => '2021-07-18 00:00:00',
                'total' => '0.00',
                'total_guests' => 0,
                'currency' => NULL,
                'status' => '1',
                'deposit' => NULL,
                'deposit_type' => NULL,
                'commission' => NULL,
                'commission_type' => NULL,
                'email' => 'lethanh376@gmail.com',
                'first_name' => 'test',
                'last_name' => NULL,
                'phone' => '0988542856',
                'address' => NULL,
                'address2' => NULL,
                'city' => NULL,
                'state' => NULL,
                'zip_code' => NULL,
                'country' => NULL,
                'customer_notes' => 'No smoking',
                'create_user' => 20,
                'update_user' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-06-18 17:49:24',
                'updated_at' => '2021-06-18 17:49:24',
                'buyer_fees' => '',
                'total_before_fees' => '0.00',
                'paid_vendor' => NULL,
                'object_child_id' => NULL,
            ),
        ));
        
        
    }
}