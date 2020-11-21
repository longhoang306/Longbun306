<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    function Product(){
        return $this->belongTo('App\Product','id','product_id');
    }

}
