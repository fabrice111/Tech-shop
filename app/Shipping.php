<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    protected $fillable = [
        'user_phonenumber','user_fullname','email','firstname','lastname','address','phonenumber','city','product_name','product_price','product_quantity',
    ];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
