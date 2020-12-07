<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin= new User();
        $admin->name='Administrator';
        $admin->gender='Nữ';
        $admin->dateOfBirth='2000-02-14';
        $admin->email='admin@gmail.com';
        $admin->address="101b Le Huu Trac";
        $admin->phone="0934271";
        $admin->password=Hash::make('admin');
        $admin->role='admin';
        $admin->verify = true;
        $admin->save();

        $user=new User();
        $user->name='Hồ Thị Sim';
        $user->gender='Nữ';
        $user->dateOfBirth='2000-02-14';
        $user->email='user@gmail.com';
        $user->address="101b Le Huu Trac";
        $user->phone="0934271";
        $user->password=Hash::make('user');
        $user->role='user';
        $user->verify = true;
        $user->save();
    }
}
