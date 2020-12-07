<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table='rooms';
    public function room_type(){
        return $this->belongsTo('App\RoomType','id_RoomType','id_RoomType');
    }
    public function bill_detail(){
        return $this->hasMany('App\BillDetal','id_Room','id_Room');
    }
    public function receive_room(){
        return $this->hasMany('App\Receiveroom','id_Room','id_Room');
    }
}
