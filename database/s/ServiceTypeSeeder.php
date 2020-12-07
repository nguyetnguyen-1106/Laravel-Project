<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_types')->insert([
            ['id_SerType'=>1,'name'=>'Quầy bar','image'=>'a.jpg'],
            ['id_SerType'=>2,'name'=>'Phòng Spa','image'=>'a.jpg'],
            ['id_SerType'=>3,'name'=>'Giặt ủi quần áo' ,'image'=>'a.jpg'],
            ['id_SerType'=>4,'name'=>'Xe đưa đón','image'=>'a.jpg'],
            ['id_SerType'=>5,'name'=>'Phòng Gym','image'=>'a.jpg'],
        ]);
    }
}
