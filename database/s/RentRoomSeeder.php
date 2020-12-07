<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rent_rooms')->insert([
            ['id_RentRoom'=>1,'id_Cus'=>1],
            ['id_RentRoom'=>2,'id_Cus'=>2],
            ['id_RentRoom'=>3,'id_Cus'=>3],
            ['id_RentRoom'=>4,'id_Cus'=>4],
            ['id_RentRoom'=>5,'id_Cus'=>5],
        ]);
    }
}
