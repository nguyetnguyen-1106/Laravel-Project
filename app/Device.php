<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $table='devices';
    public function room_type(){
        return $this->belongsTo('App\RoomType','id_RoomType','id_device');
    }
}
