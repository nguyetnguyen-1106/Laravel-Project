<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            ['id_RoomType'=>1,'image'=>'slide1.jpg','note'=>"Phòng đầy đủ tiện nghi"],
            ['id_RoomType'=>1, 'image'=>'slide2.jpg','note'=>"Phòng đầy đủ tiện nghi",],
            ['id_RoomType'=>2, 'image'=>'slide3.jpg','note'=>"Phòng đầy đủ tiện nghi"],
            ['id_RoomType'=>2, 'image'=>'slide4.jpg','note'=>"Phòng đầy đủ tiện nghi"],
        ]);
    }
}
