<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    //
    function OrderDetail(){
        return $this->belongsTo('App\OrderDetail','id','orderdetail_id');
    }
    function Product(){
        return $this->belongsTo('App\Product','id','product_id');
    }
    public function images(){
        return $this->hasMany('App\Image','product_id','id');
    } 
}
