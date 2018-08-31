<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'payment_method','total','shipping_id'
    ];

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function shipping()
    {
        return $this->hasMany('App\Shipping');
    }
}
