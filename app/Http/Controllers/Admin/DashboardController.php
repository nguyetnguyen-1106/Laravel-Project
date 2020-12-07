<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Room;
use App\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function GetTrangChuAdmin() {
        $users = User::all()->count();
        $rooms = Room::all()->count();
        $services = Service::all()->count();
        return view('admin.dashboard',compact('users','rooms','services'));
    }
}
