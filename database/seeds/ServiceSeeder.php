<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            ['id_Service'=>1,'name'=>'Quầy bar','image'=>'a.jpg','price'=>20000],
            ['id_Service'=>2,'name'=>'Phòng Spa','image'=>'a.jpg','price'=>2300],
            ['id_Service'=>3,'name'=>'Giặt ủi quần áo','image'=>'a.jpg','price'=>30000],
            ['id_Service'=>4,'name'=>'Xe đưa đón','image'=>'a.jpg','price'=>40000],
            ['id_Service'=>5,'name'=>'Phòng Gym','image'=>'a.jpg','price'=>60000],
        ]);
    }
}
