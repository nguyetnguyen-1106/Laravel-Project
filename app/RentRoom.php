<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentRoom extends Model
{
    protected $table='rent_rooms';
    public function rent_room_detail(){
        return $this->hasMany('App\RentRoomDetail','id_RentRoom','id_RentRoom');
    }
    public function receive_room(){
        return $this->hasMany('App\ReceiveRoom','id_RentRoom','id_RentRoom');
    }
    public function user(){
        return $this->belongsTo('App\User','id','id_User');
    }
}
