<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable ,SoftDeletes;

    protected $table = 'users';
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userFavs(){
        return $this->hasMany(UserFav::class,'user_id');
    }
    public function feedBacks(){
        return $this->hasMany(FeedBack::class,'user_id');
    }
    public function orders(){
        return $this->hasMany(Order::class,'user_id');
    }
    public function carts(){
        return $this->hasMany(Cart::class,'user_id');
    }
    public function userAddresses(){
        return $this->hasMany(UserAddress::class,'user_id');
    }
}
