<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Produk;
use Auth;
use App\User;
use App\Wishlist;

class produkController extends Controller
{
    //save produk to database
    public function store(Request $Req)
    {
      $product = new Produk;
      $product->id = $Req->id;
      $product->id_user = Auth::user()->id;
      $product->nama_produk = $Req->nama_produk;
      $product->deskripsi_produk = $Req->deskripsi_produk;
      $product->harga_produk = $Req->harga_produk;
      $product->varian = $Req->varian;
      if ($Req->hasFile('gambar_produk'))
           {
             $file = $Req->file('gambar_produk');
             $name = $file->getClientOriginalName();
             $product->gambar_produk = $name;
             $file->move(public_path().'/images/produk/', $name);
           }
      $product->save();
      return redirect('/add');
    }
    public function add($id)
    {
      $product = new Wishlist;
      $product->id_product = $id;
      $product->quantity = 1;
      $product->price = Produk::find($id)->harga_produk;
      $product->id_user = Produk::find($id)->id_user;
      $product->save();
      $produks = Produk::all();
      return view('home',compact('produks'));
    }

    public function lihat()
    {
      $wishlist = Wishlist::where('checkout_status','=',0)->get();
      return view('wishlist',compact('wishlist'));
    }

    //display product on profile
    public function show()
    {
      $ids = Auth::user()->id;
      $data = Produk::where('id_user','=',$ids)->get();
      return view('profil',['products' => $data]);
    }

    public function edit($id)
    {
      $produk = Produk::find($id);
      return view('edit', ['produk' => $produk]);
    }

    public function update(Request $Req, $id)
    {
      $product = Produk::where('id',$id)->first();
      $product->nama_produk = $Req->nama_produk;
      $product->deskripsi_produk = $Req->deskripsi_produk;
      $product->harga_produk = $Req->harga_produk;
      $product->varian = $Req->varian;
      // if ($Req->hasFile('gambar_produk'))
      //      {
      //        $file = $Req->file('gambar_produk');
      //        $name = $file->getClientOriginalName();
      //        $product->gambar_produk = $name;
      //        $file->move(public_path().'/images/produk/', $name);
      //      }
      $product->save();
      return redirect('/profil');
    }

    public function destroy(Produk $product)
    {
         $product->delete();
         return redirect('/profil');
    }

    public function index()
    {
      $produks = Produk::all();
      // dd($produks);
      return view('home', ['produks' => $produks]);
    }

    public function display($id)
    {
      $product = Produk::where('id','=',$id)->get();
      // dd($produk);
      return view('produk',['product' => $product]);
    }

}
