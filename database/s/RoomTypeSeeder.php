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
            ['id_RoomType'=>1,'name'=>"5 sao",'image'=>'img/room1.jpg','price'=>20000,'number_people'=>3,'max_people'=>3],
            ['id_RoomType'=>2,'name'=>"4 sao",'image'=>'img/room1.jpg','price'=>40000,'number_people'=>4,'max_people'=>3],
            ['id_RoomType'=>3,'name'=>"5 sao",'image'=>'img/room1.jpg','price'=>20000,'number_people'=>3,'max_people'=>3],
            ['id_RoomType'=>4,'name'=>"5 sao",'image'=>'img/room1.jpg','price'=>20000,'number_people'=>5,'max_people'=>3],
            ['id_RoomType'=>5,'name'=>"4 sao",'image'=>'img/room1.jpg','price'=>30000,'number_people'=>2,'max_people'=>3],
        ]);
    }
}
