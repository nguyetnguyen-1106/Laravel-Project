<?php

namespace App\Http\Controllers;
use App\Room;
use App\User;
use App\Service;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    function GetTrangChu() {
        return view('users.trangchu');
    }
    function getChitiet() {
        return view('users.datphong.superiorTwin');
    }

    //view profile


    //Get admin page


    function GetServices() {
        return view('admin.service');
    }
    function GetBooking() {
        return view('admin.booking');
    }
    function GetAmount() {
        return view('admin.amount');
    }
}
