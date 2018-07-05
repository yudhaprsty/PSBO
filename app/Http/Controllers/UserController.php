<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function profile(){
      return view('profil');
    }
    
    public function store(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        //  $user->role_id = $request->role_id;
        if ($request->hasFile('image'))
             {
               $file = $request->file('image');
               $name = $file->getClientOriginalName();
               $user->image = $name;
               $file->move(public_path().'/images/user/', $name);
             }
        // $user->image = $request->image;
        $user->save();
        return redirect('/profil');
        // return redirect();
    }
}
