<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table='bills';
    public function employee(){
        return $this->belongsTo('App\Employee','id_Emp','id_bill');
    }
    public function bill_detail(){
        return $this->hasMany('App\BillDetail','id_bill','id_bill');
    }
    public function user(){
        return $this->belongsTo('App\User','id','id_User');
    }
    public function receive_room(){
        return $this->belongsTo('App\receiveRoom','id_ReceiveRoom','id_ReceiveRoom');
    }
}
