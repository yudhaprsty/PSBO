<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;
use App\User;

class registerController extends BaseController
{
    //register
    public function index(Request $req)
    {
       User::create([
         'username' => $req->input('username'),
         'password' => hash('sha256', $req->input('password')),
         'email' => $req->input('email'),
         'phone' => $req->input('phone'),
         'kategori' => $req->input('kategori')
        ]);
       return redirect('/login')->with('status', 'User berhasil ditambahkan!');
    }
}

?>
