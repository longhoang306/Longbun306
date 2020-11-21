<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    function order(){
        return $this->hasOne('App\Order','id','order_id');
    }

    function user(){
        return $this->belongsTo('App\User');
    }
    function ProductOrder(){
        return $this->belongsTo('App\ProductOrder','id','productorder_id');
    }
   
}
