<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory,SoftDeletes;

        protected $guarded = [];
        protected $table = 'cities';

    public function country(){
        return $this->belongsTo(Country::class,'country_id');
    }
    public function userAddresses(){
        return $this->hasMany(UserAddress::class,'city_id');
    }
}
