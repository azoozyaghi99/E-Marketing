<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];
    protected $table = 'orders';

    const ORDERNEW = 0;
    const ORDERACCEPT = 1;
    const ORDERDRIVER = 2;
    const ORDERCOMPLETE = 3;
    const ORDERREJECT = 4;

    public static function StatusText($status)
    {
        if ($status == self::ORDERNEW)
            return 'جديد';
        elseif ($status == self::ORDERACCEPT)
            return 'مقبول';
        elseif ($status == self::ORDERDRIVER)
            return 'تحت التجهيز';
        elseif ($status == self::ORDERCOMPLETE)
            return 'مكتمل';
        else
            return 'مرفوض';
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function cart(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function driver(){
        return $this->belongsTo(User::class,'driver_id');
    }

    public function orderProducts(){
        return $this->hasMany(OrderProduct::class,'order_id');
    }
}
