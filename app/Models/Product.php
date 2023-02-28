<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];
    protected $table = 'products';

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function cartProducts(){
        return $this->hasMany(CartProduct::class,'product_id');
    }
    public function feedBacks(){
        return $this->hasMany(FeedBack::class,'product_id');
    }
    public function orderProducts(){
        return $this->hasMany(OrderProduct::class,'product_id');
    }
    public function userFavs(){
        return $this->hasMany(UserFav::class,'product_id');
    }
}
