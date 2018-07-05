<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Wishlist;
use Auth;

class CheckoutController extends Controller
{
    public function index($id)
    {
      $wishlist = Wishlist::find($id);
      $product = Product::find($wishlist->id_product);
      return view('checkout', compact('product','wishlist'));
    }

    public function status($id)
    {
      Wishlist::where('id','=',$id) -> update(['checkout_status'=>1]);
      $wishlist = Wishlist::where('checkout_status','=',1)->get();
      return view('order', compact('wishlist'));
    }

    public function showOrder()
    {
      $products = Wishlist::where('checkout_status','=',1)->get();
      return view('sales',compact('products'));
    }

    public function show()
    {
      $wishlist = Wishlist::where('checkout_status','=',1)->get();
      return view('order', compact('wishlist'));
    }

    public function changeStatus(Request $req, $id){
      // dd($req->status);
      Wishlist::where('id','=',$id)->update(['status'=>$req->status]);
      $products = Wishlist::where('checkout_status','=',1)->where('id_user','=',Auth::user()->id)->get();
      return view('sales',compact('products'));
    }

    public function statusAcc($id){
      // dd($req->status);
      Wishlist::where('id','=',$id)->update(['status'=>3]);
      $wishlist = Wishlist::where('checkout_status','=',1)->get();
      return view('order',compact('wishlist'));
    }

    public function destroy(Wishlist $wishlist)
    {
         $wishlist->delete();
         return redirect('wishlist');
    }
}
