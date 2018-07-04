<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use \Input as Input;

class addProdukController extends Controller
{
    //
    public function index(Request $Req)
    {
      Produk::create([
        'nama_produk' => $Req->input('nama_produk'),
        'harga_produk' => $Req->input('harga_produk'),
        'deskripsi_produk' => $Req->input('deskripsi_produk'),
        if( $Req->hasFile('image')) {
            $image = $Req->file('image');
            $path = public_path(). '/images/';
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move($path, $filename);

            $post->image = $path;
        }
            $post->save();
      ]);
      return redirect('/add');
    }

}
// <img src="{{ asset('images/FILENAME.EXTENSION') }}">
