<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
	protected $table = "tbl_product_category";

	protected $fillable = ['name', 'description'];
}
