<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('devices')->insert([
            ['id_device'=>1,'id_RoomType'=>1,'name'=>'Áo choàng','quantity'=>1,],
            ['id_device'=>2,'id_RoomType'=>2,'name'=>'Chăn ga','quantity'=>2],
            ['id_device'=>3,'id_RoomType'=>3,'name'=>'Bàn chải đánh răng','quantity'=>1],
            ['id_device'=>4,'id_RoomType'=>4,'name'=>'Sửa tắm','quantity'=>1],
            ['id_device'=>5,'id_RoomType'=>5,'name'=>'Máy sấy tóc','quantity'=>1],
        ]);
    }
}
