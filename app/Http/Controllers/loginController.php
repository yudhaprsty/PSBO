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

class loginController extends BaseController
{
    public function login(Request $req)
    {
       $username = $req->input('username');
       $password = hash('sha256', $req->input('password'));
       // dd($password);
       $checkLogin = DB::table('users')->Where(['username'=>$username, 'password'=>$password])->first();
       // dd($checkLogin->kategori);
       if(count($checkLogin) >0){
         if($checkLogin->kategori==1) return view('awal');
         else return view('penjual');
       }else{
         echo "Login Failed";
       }
    }
}

?>
