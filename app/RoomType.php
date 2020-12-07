<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $table='room_types';
    public function room(){
        return $this->hasMany('App\Room','id_RoomType','id_RoomType');
    }
    public function device(){
        return $this->hasMany('App\Device','id_RoomType','id_RoomType');
    }
}
