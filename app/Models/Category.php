<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];
    protected $table = 'categories';

    public function products(){
        return $this->hasMany(Product::class,'category_id');
    }

    public function parent(){
        return $this->belongsTo(Category::class,'parent_id');
    }
}
