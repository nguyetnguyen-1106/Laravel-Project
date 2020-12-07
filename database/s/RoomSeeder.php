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
            ['id_Room'=>1,'id_RoomType'=>1,'image'=>'./deluxeFamilyTriple/slide1.jpg','note'=>"Phòng đầy đủ tiện nghi"],
            ['id_Room'=>2,'id_RoomType'=>2, 'image'=>'./deluxeKing/slide1.jpg','note'=>"Phòng đầy đủ tiện nghi",],
            ['id_Room'=>3,'id_RoomType'=>3, 'image'=>'./deluxeTriple/slide1.jpg','note'=>"Phòng đầy đủ tiện nghi"],
            ['id_Room'=>4,'id_RoomType'=>4, 'image'=>'./deluxeTwin/slide1.jpg','note'=>"Phòng đầy đủ tiện nghi"],
            ['id_Room'=>5,'id_RoomType'=>5, 'image'=>'./deluxeKing/slide2.jpg','note'=>"Phòng đầy đủ tiện nghi"],
        ]);
    }
}
