<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_types')->insert([
            ['id_RoomType'=>1,'name'=>"Vip",'price'=>20000,'number_people'=>1,'max_people'=>2],
            ['id_RoomType'=>2,'name'=>"Bình thường",'price'=>40000,'number_people'=>3,'max_people'=>4]
        ]);
    }
}
