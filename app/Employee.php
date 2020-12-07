<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table='employees';
    public function bill(){
        return $this->hasMany('App\Bill','id_Emp','id_Emp');
    }

}
