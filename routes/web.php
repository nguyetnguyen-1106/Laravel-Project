<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// ADMIN PAGE
/*****************************USER************************ */
Route::get('users',[
    'as'=>'nguoidung',
    'uses'=>'Admin\UserController@getUser'
]);
Route::delete('/user/{id}',"Admin\UserController@deleteUser");

/***********************ROOM***************************/
//Room
Route::get('room',[
    'as'=>'phong',
    'uses'=>'Admin\RoomController@GetRoom'
]);
Route::get('addroom',[
    'as'=>'themphong',
    'uses'=>'Admin\RoomController@roomType'
]);
Route::post('addroom','Admin\RoomController@addRoom');
Route::get('room/{id}/edit','Admin\RoomController@editRoom');
Route::patch('room/{id}','Admin\RoomController@updateRoom');
Route::delete('/room/{id}',"Admin\RoomController@deleteRoom");
Route::post('room/search',"Admin\RoomController@searchRoom");
/*----------------------------SERVICE------------------------------------------------*/
Route::get('service',[
    'as'=>'dichvu',
    'uses'=>'Admin\ServiceController@getServices'
]);
Route::get('addservice',[
    'as'=>'themdichvu',
    'uses'=>'Admin\ServiceController@create'
]);
Route::post('addservice','Admin\ServiceController@addService');
Route::delete('/service/{id}',"Admin\ServiceController@deleteService");
Route::get('service/{id}/edit','Admin\ServiceController@editService');
Route::patch('service/{id}','Admin\ServiceController@updateService');
/*--------------------------EMPLOYEE----------------------------------------------*/
//Employee
Route::get('employee',['as'=>'nhanvien','uses'=>'Admin\EmployeeController@GetEmployee']);
Route::get('addmployee',[
    'as'=>'themnhanvien',
    'uses'=>'Admin\EmployeeController@createEmployee'
]);
Route::post('addemployee','Admin\EmployeeController@AddEmployee');
Route::delete('/employee/{id}',"Admin\EmployeeController@deleteEmployee");
Route::get('employee/{id}/edit','Admin\EmployeeController@editEmployee');
Route::patch('employee/{id}','Admin\EmployeeController@updateEmployee');
Route::post('employee/search',"Admin\EmployeeController@searchEmployee");

/*******************************THỐNG KÊ************************************** */
Route::get('dashboard',[
    'as'=>'dieukhien',
    'uses'=>'Admin\DashboardController@GetTrangChuAdmin'
]);
/*-------------------------------ĐẶT PHÒNG---------------------------------------------*/
Route::get('booking',[
    'as'=>'bookphong',
    'uses'=>'PageController@GetBooking'
]);
Route::get('amount',[
    'as'=>'thanhtoan',
    'uses'=>'PageController@GetAmount'
]);
/**************************************************************************** */
//USERS PAGE
Route::get('trang-chu',[
    'as'=>'trangchu',
    'uses'=>'PageController@GetTrangChu'
]);
/****************************************************************************** */
Route::get('view-profile',[
    'as'=>'viewprofile',
    'uses'=>'User\ProfileController@GetViewProfile'
]);
Route::patch('view-profile/{id}','User\ProfileController@UpdateProfile');

/****************************************************************************** */
Route::get('dat-phong',[
    'as'=>'datphong',
    'uses'=>'User\CheckRoomController@GetDatPhong'
]);

// phần này chưa viết j hết, ms viết cho một cái đầu tiên, chờ có database rồi ms ...
Route::get('chi-tiet',[
    'as'=>'chitiet',
    'uses'=>'PageController@getChitiet'
]);

Route::get('nha-hang',[
    'as'=>'nhahang',
    'uses'=>'User\ServiceController@getRestaurant'
]);

// Auth
/*********************************************************** */
Route::get('login',[
    'as'=>'dangnhap',
    'uses'=>'Auth\LoginController@getLogin'
]);
Route::post('login',[
    'as'=>'dangnhap',
    'uses'=>'Auth\LoginController@login'
]);
/****************************************************** */
Route::get('signup',[
    'as'=>'dangki',
    'uses'=>'Auth\SignUpController@getSignUp'
]);
Route::post('signup',[
    'as'=>'dangki',
    'uses'=>'Auth\SignUpController@signup'
]);
Route::get('verify',[
    'as'=>'nhapma',
    'uses'=>'Auth\SignUpController@getVerify'
]);
Route::post('verify',[
    'as'=>'nhapma',
    'uses'=>'Auth\SignUpController@checkVerify'
]);
/****************************************************** */
Route::get('logout',[
    'as'=>'dangxuat',
    'uses'=>'Auth\LoginController@logout'
]);
/****************************************************** */
Route::get('forgotPass',[
    'as'=>'quenmatkhau',
    'uses'=>'Auth\ForgotPassController@GetForgotPass'
]);
Route::post('forgotPass','Auth\ForgotPassController@ForgotPass');

Route::get('verifychangepass',[
    'as'=>'nhapma',
    'uses'=>'Auth\ForgotPassController@getVerify'
]);

Route::post('verifychangepass','Auth\ForgotPassController@checkVerify');

Route::get('changPass',[
    'as'=>'doimatkhau',
    'uses'=>'Auth\ForgotPassController@getChangPass'
]);
Route::post('changePass','Auth\ForgotPassController@ChangPass');


