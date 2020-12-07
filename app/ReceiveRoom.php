<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReceiveRoom extends Model
{
    protected $table='receive_rooms';
    public function receive_room_detail(){
        return $this->hasMany('App\ReceiveRoomDetail','id_ReceiveRooom','id_ReceiveRooom');
    }
    public function rent_room(){
        return $this->belongsTo('App\RentRoom','id_RentRoom','id_RentRoom');
    }
    public function user(){
        return $this->belongsTo('App\User','id','id_User');
    }
    public function bill(){
        return $this->hasMany('App\Bill','id_ReceiveRooom','id_ReceiveRooom');
    }
}
