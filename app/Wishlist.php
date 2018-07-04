<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table = 'Wishlist';
   	public $timestamps = false;

   	protected $fillable = ['id', 'price', 'quantity', 'id_product', 'status_pesanan', 'checkout_status'];
}
