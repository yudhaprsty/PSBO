<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'Product';
   	public $timestamps = false;

   	protected $fillable = [
      'id', 'name', 'price', 'description', 'image', 'variant'
    ];
}
