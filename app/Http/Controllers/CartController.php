<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Produk;
use Auth;
use App\User;


class CartController extends Controller
{
    public funtion add(Request $Req, $id)
    {
      $product = Produk::find($id);
      $cart = New Cart;
      $cart->id_user = Auth::user()->id;
      $cart->id_product = $product->id;
      $cart->sutotal = $product->harga_produk*$Req->qnt;
      $cart->save();
      $produk = Produk::all();
      return view('home',compact('produk'));
    }

}
