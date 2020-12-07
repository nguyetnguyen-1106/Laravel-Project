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
            ['id_Ser'=>1,'id_SerType'=>1,'image'=>'a.jpg','price'=>20000],
            ['id_Ser'=>2,'id_SerType'=>2,'image'=>'a.jpg','price'=>2300],
            ['id_Ser'=>3,'id_SerType'=>3,'image'=>'a.jpg','price'=>30000],
            ['id_Ser'=>4,'id_SerType'=>4,'image'=>'a.jpg','price'=>40000],
            ['id_Ser'=>5,'id_SerType'=>5,'image'=>'a.jpg','price'=>60000],
        ]);
    }
}
