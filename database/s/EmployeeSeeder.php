<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            ['id_Emp'=>1,'name'=>"Nguyễn Thị Nguyệt",'gender'=>"Nữ",'address'=>"Quảng Trị",'phone'=>"09621457",],
            ['id_Emp'=>2,'name'=>"Đặng Văn Nhàng",'gender'=>"Nam",'address'=>"Bình Định",'phone'=>"09621457",],
            ['id_Emp'=>3,'name'=>"Hồ Thị Sim",'gender'=>"Nữ",'address'=>"Quảng Trị",'phone'=>"09621457",],
            ['id_Emp'=>4,'name'=>"Hồ Minh Tiến",'gender'=>"Nam",'address'=>"Quảng Bình",'phone'=>"09621457",],
            ['id_Emp'=>5,'name'=>"Hồ Thị On",'gender'=>"Nữ",'address'=>"Quảng Trị",'phone'=>"09621457",],
        ]);
    }
}
