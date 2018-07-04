<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'Produk';
   	public $timestamps = false;

   	protected $fillable = ['id', 'nama_produk', 'harga_produk', 'deskripsi_produk', 'gambar_produk', 'varian'];
}
