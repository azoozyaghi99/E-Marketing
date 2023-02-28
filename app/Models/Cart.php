<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];
    protected $table = 'carts';

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function cartProducts(){
        return $this->hasMany(CartProduct::class,'cart_id');
    }

    public function orders(){
        return $this->hasMany(Order::class,'cart_id');
    }
}
