<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bills')->insert([
            ['id_bill'=>1,'id_Emp'=>1,'id_Cus'=>1,'id_ReceiveRoom'=>1,'dateOfPayment'=>'2020-07-20','totalPrice'=>70000],
            ['id_bill'=>2,'id_Emp'=>2,'id_Cus'=>2,'id_ReceiveRoom'=>2,'dateOfPayment'=>'2020-07-21','totalPrice'=>60000],
            ['id_bill'=>3,'id_Emp'=>3,'id_Cus'=>3,'id_ReceiveRoom'=>3,'dateOfPayment'=>'2020-07-23','totalPrice'=>80000],
            ['id_bill'=>4,'id_Emp'=>4,'id_Cus'=>4,'id_ReceiveRoom'=>4,'dateOfPayment'=>'2020-07-25','totalPrice'=>90000],
            ['id_bill'=>5,'id_Emp'=>5,'id_Cus'=>5,'id_ReceiveRoom'=>5,'dateOfPayment'=>'2020-07-27','totalPrice'=>9200000],

        ]);
    }
}
