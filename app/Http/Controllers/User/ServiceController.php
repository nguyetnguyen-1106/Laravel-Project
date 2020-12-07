<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    function getRestaurant() {
        $restaurant = DB::table('services')->where('name','=',"Nhà hàng")->get();
        return view('users.nhahang', compact('restaurant'));
    }
}
