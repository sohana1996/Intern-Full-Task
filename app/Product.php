<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id', 'name', 'details', 'original_price', 'discount_percentage', 'discount_amount', 'price', 'status'];

    public function images(){
        return $this->hasMany('App\ProductImage', 'product_id', 'id');
    }

    public function colors(){
        return $this->hasMany('App\ProductColor', 'product_id', 'id');
    }
    public function category(){
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }
}
