<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use Auth;
use App\User;
use App\Wishlist;
// use DB;

class ProductController extends Controller
{
  public function store(Request $Req)
  {
    $product = new Product;
    $product->id = $Req->id;
    $product->id_user = Auth::user()->id;
    $product->name = $Req->name;
    $product->description = $Req->description;
    $product->price = $Req->price;
    $product->variant = $Req->variant;
    if ($Req->hasFile('image'))
         {
           $file = $Req->file('image');
           $name = $file->getClientOriginalName();
           $product->image = $name;
           $file->move(public_path().'/images/product/', $name);
         }
    $product->save();
    return redirect('/profil');
  }

  public function add($id)
  {
    $product = new Wishlist;
    $product->id_product = $id;
    $product->id_customer = Auth::User()->id;
    $product->quantity = 1;
    $product->price = Product::find($id)->price;
    $product->id_user = Product::find($id)->id_user;
    $product->save();
    $products = Product::all();
    return view('home',compact('products'));
  }

  public function showWishlist()
  {
    $wishlist = Wishlist::all();
    return view('wishlist',compact('wishlist'));
  }

  public function show()
  {
    $ids = Auth::user()->id;
    $data = Product::where('id_user','=', $ids)->get();
    // dd($data);
    return view('profil', ['products' => $data]);
  }

  public function showProduct($id)
  {
    $product = Product::where('id', '=', $id)->get();
    return view('product',['product' => $product]);
  }

  public function showSeeds()
  {
    $products = Product::all();
    return view('seeds',['products' => $products]);
  }

  public function showPlants()
  {
    $products = Product::all();
    return view('plants',['products' => $products]);
  }

  public function showTools()
  {
    $products = Product::all();
    return view('tools',['products' => $products]);
  }

  public function edit($id)
  {
    $product = Product::find($id);
    return view('editProduct', ['product' => $product]);
  }

  public function update(Request $Req, $id)
  {
    $product = Product::where('id',$id)->first();
    $product->name = $Req->name;
    $product->description = $Req->description;
    $product->price = $Req->price;
    $product->variant = $Req->variant;
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

  public function destroy(Product $product)
  {
       $product->delete();
       return redirect('/profil');
  }

  public function index()
  {
    $products = Product::all();
    // dd($produks);
    return view('home', ['products' => $products]);
  }
}
