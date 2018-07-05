<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use Auth;
use App\User;


class CartController extends Controller
{
    public funtion add(Request $Req, $id)
    {
      $product = Product::find($id);
      $cart = New Cart;
      $cart->id_user = Auth::user()->id;
      $cart->id_product = $product->id;
      $cart->subtotal = $product->price*$Req->qnt;
      $cart->save();
      $products = Product::all();
      return view('home', compact('products'));
    }

}
