<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReceiveRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('receive_rooms')->insert([
            ['id_ReceiveRoom'=>1,'id_RentRoom'=>1,'id_Cus'=>1],
            ['id_ReceiveRoom'=>2,'id_RentRoom'=>2,'id_Cus'=>2],
            ['id_ReceiveRoom'=>3,'id_RentRoom'=>3,'id_Cus'=>3],
            ['id_ReceiveRoom'=>4,'id_RentRoom'=>4,'id_Cus'=>4],
            ['id_ReceiveRoom'=>5,'id_RentRoom'=>5,'id_Cus'=>5],
        ]);
    }
}
