<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentRoomDetail extends Model
{
    protected $table='rent_room_details';
    public function rent_room(){
        return $this->belongsTo('App\RentRoom','id_RentRoom','id_RentRoom');
    }
    public function user(){
        return $this->belongsTo('App\User','id','id_User');
    }
}
