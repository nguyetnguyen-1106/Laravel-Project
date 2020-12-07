<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReceiveRoomDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('receive_room_details')->insert([
            ['id_ReceiveRoom'=>1,'id_Room'=>1,'id_Cus'=>1,'receive_date'=>'2020-05-21','estimated_date'=>'2020-07-25','actual_date'=>'2020-08-10'],
            ['id_ReceiveRoom'=>2,'id_Room'=>2,'id_Cus'=>2,'receive_date'=>'2020-05-21','estimated_date'=>'2020-07-25','actual_date'=>'2020-08-10'],
            ['id_ReceiveRoom'=>3,'id_Room'=>3,'id_Cus'=>3,'receive_date'=>'2020-05-21','estimated_date'=>'2020-07-25','actual_date'=>'2020-08-10'],
            ['id_ReceiveRoom'=>4,'id_Room'=>4,'id_Cus'=>4,'receive_date'=>'2020-05-21','estimated_date'=>'2020-07-25','actual_date'=>'2020-08-10'],
            ['id_ReceiveRoom'=>5,'id_Room'=>5,'id_Cus'=>5,'receive_date'=>'2020-05-21','estimated_date'=>'2020-07-25','actual_date'=>'2020-08-10'],
        ]);
    }
}
