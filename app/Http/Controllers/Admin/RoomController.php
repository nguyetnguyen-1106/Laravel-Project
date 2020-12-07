<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Room;
use App\RoomType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    function roomType(){
        $roomtype = RoomType::all();
        return view('admin.rooms.createRoom',compact('roomtype'));
    }
    function getRoom() {
        $rooms = DB::table('rooms')
        ->join('room_types', 'room_types.id_roomtype', '=', 'rooms.id_roomtype')
        ->select('rooms.id_room', 'room_types.id_RoomType','room_types.name', 'rooms.image','rooms.note')->get();
        $roomtype = RoomType::all();
        return view('admin.room',compact('rooms','roomtype'));
    }
    function deleteRoom($id){
        DB:: table('rooms')->where('id_room','=',$id)->delete();
        return redirect()->route('phong');
    }
    function addRoom(Request $request){
        $idRoom = $request->input('idRoom');
        $id_RoomType = $request->input('roomType');
        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('public/image/rooms/',$image);
        $note = $request->input('note');

        $rooms = new Room();
        $rooms->id_Room = $idRoom;
        $rooms->id_RoomType = $id_RoomType;
        $rooms->image = $image;
        $rooms->note = $note;
        $rooms->save();
        return redirect()->route('phong');
    }
    function editRoom($id){
        $getRoom= DB::table('rooms')->where('id_Room','=',$id)->first();
        $roomtype = RoomType::all();
        return view('admin.rooms.editRoom',compact('getRoom','roomtype'));
    }
    function updateRoom($id, Request $request){
        $idRoom = $request->input('idRoom');
        $id_RoomType = $request->input('roomType');
        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('public/image/rooms/',$image);
        $note = $request->input('note');
        DB::table('rooms')->where('id_Room','=',$id)->update(['id_Room'=>$idRoom,'id_RoomType'=>$id_RoomType,'image'=>$image,'note'=>$note]);
        return redirect()->route('phong');
    }
    function searchRoom(Request $request){
        $roomtype = RoomType::all();
        $search = $request->input('search');
        $findRoom = Room::where('id_RoomType','=',$search)->get();
        foreach($findRoom as $findRooms){
            $findRooms->room_type;
        }
        return view('admin.rooms.search',compact('roomtype','findRoom'));
    }
}
