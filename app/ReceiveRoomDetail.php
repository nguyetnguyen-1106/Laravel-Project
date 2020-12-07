<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReceiveRoomDetail extends Model
{
    protected $table='receive_room_detail';
    public function room(){
        return $this->belongsTo('App\Room','id_Room','id_Room');
    }
    public function user(){
        return $this->belongsTo('App\User','id','id_User');
    }
    public function receive_room(){
        return $this->belongsTo('App\ReceiveRoom','id_ReceiveRooom','id_ReceiveRooom');
    }
}
