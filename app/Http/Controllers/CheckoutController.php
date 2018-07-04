<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\User;
use App\Wishlist;
use Auth;
class CheckoutController extends Controller
{
    public function index($id)
    {
      $wishlist = Wishlist::find($id);
      $produk = Produk::find($wishlist->id_product);
      return view('checkout', compact('produk','wishlist'));
    }

    public function status($id)
    {
      Wishlist::where('id','=',$id)->update(['checkout_status'=>1]);
      $wishlist=Wishlist::where('checkout_status','=',1)->get();
      return view('/order', compact('wishlist'));
    }
    public function showpesanan()
    {
      $products = Wishlist::where('checkout_status','=',1)->where('id_user','=',Auth::user()->id)->get();
      return view('/pesanan',compact('products'));
    }
    public function show()
    {
      $wishlist = Wishlist::where('checkout_status','=',1)->where('id_user','=',Auth::user()->id)->get();
      return view('/order', compact('wishlist'));
    }
    public function ubah_status(Request $req,$id){
      // dd($req->status);
      Wishlist::where('id','=',$id)->update(['status_pesanan'=>$req->status]);
      $products = Wishlist::where('checkout_status','=',1)->where('id_user','=',Auth::user()->id)->get();
      return view('/pesanan',compact('products'));
    }
    public function ubah_status_terima($id){
      // dd($req->status);
      Wishlist::where('id','=',$id)->update(['status_pesanan'=>3]);
      $wishlist = Wishlist::where('checkout_status','=',1)->where('id_user','=',Auth::user()->id)->get();
      return view('/order',compact('wishlist'));
    }
}
