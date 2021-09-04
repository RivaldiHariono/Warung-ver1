<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'price', 'stock', 'categories_id', 'users_id'
    ];

    protected $hidden = [
        
    ];

    public function user(){
        return $this->hasOne(User::class, 'id','users_id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'categories_id','id');
    }
}
