<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            ['id_cus'=>1,'name'=>"Nguyễn Thị Nguyệt",'identityCard'=>"123456",'gender'=>"Nữ",'address'=>"Quảng Trị",'phone_number'=>"09621457",'nationality'=>"Viet Nam"],
            ['id_cus'=>2,'name'=>"Đặng Văn Nhàng",'identityCard'=>"1234564",'gender'=>"Nam",'address'=>"Bình Định",'phone_number'=>"09621457",'nationality'=>"Viet Nam"],
            ['id_cus'=>3,'name'=>"Hồ Thị Sim",'identityCard'=>"123456",'gender'=>"Nữ",'address'=>"Quảng Trị",'phone_number'=>"09621457",'nationality'=>"Viet Nam"],
            ['id_cus'=>4,'name'=>"Hồ Minh Tiến",'identityCard'=>"123456",'gender'=>"Nam",'address'=>"Quảng Bình",'phone_number'=>"09621457",'nationality'=>"Viet Nam"],
            ['id_cus'=>5,'name'=>"Hồ Thị On",'identityCard'=>"123456",'gender'=>"Nữ",'address'=>"Quảng Trị",'phone_number'=>"09621457",'nationality'=>"Viet Nam"],
        ]);


    }
}
