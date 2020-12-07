<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bill_details')->insert([
            ['id_bill'=>1,'id_Room'=>1,'id_Ser'=>1,'room_charge'=>1322,'service_charge'=>20202,'discount'=>70,'day_number'=>3,'totalPrice'=>70000],
            ['id_bill'=>2,'id_Room'=>2,'id_Ser'=>2,'room_charge'=>2233,'service_charge'=>12322,'discount'=>60,'day_number'=>4,'totalPrice'=>70000],
            ['id_bill'=>3,'id_Room'=>3,'id_Ser'=>3,'room_charge'=>323333,'service_charge'=>2000,'discount'=>80,'day_number'=>3,'totalPrice'=>70000],
            ['id_bill'=>4,'id_Room'=>4,'id_Ser'=>4,'room_charge'=>433332,'service_charge'=>2000,'discount'=>90,'day_number'=>3,'totalPrice'=>70000],
            ['id_bill'=>5,'id_Room'=>5,'id_Ser'=>5,'room_charge'=>5,'service_charge'=>3000,'discount'=>9200,'day_number'=>5,'totalPrice'=>70000],
        ]);
    }
}
