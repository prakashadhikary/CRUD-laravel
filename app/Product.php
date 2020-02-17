<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $table = "tbl_products";

   protected $fillable = ['name', 'description', 'price', 'quantity', 'category_id','image'];

   public function category()
    {
        return $this->hasOne('App\ProductCategory', 'id', 'category_id');
    }
}
