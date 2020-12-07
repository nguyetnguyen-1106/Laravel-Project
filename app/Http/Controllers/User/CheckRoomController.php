<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckRoomController extends Controller
{
    function GetDatPhong() {
        return view('users.datphong');
    }
}
