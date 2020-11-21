<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    //
    protected $casts = [
        'filters_selected' => 'array'
    ];
    function Product(){
        return $this->belongsTo('App\Product');
    }
}
