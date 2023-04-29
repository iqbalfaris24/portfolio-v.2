<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use illuminate\support\str;
use App\Models\User;

class LoginController extends Controller
{
     public function login()
     {
          return view('/login');
     }

     public function logout()
     {
          Auth::logout();
          return redirect('/login');
     }

     public function loginuser(Request $request)
     {
          if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
               return redirect('/pesan');
          } else {
               return redirect('/login');
          }
     }

     public function register()
     {
          return view('/register');
     }

     public function registeruser(Request $request)
     {
          User::create([
               'name' => $request->name,
               'email' => $request->email,
               'password' => bcrypt($request->password),
               'remember_token' => str::random(60),
          ]);
          return redirect('/login');
     }
}
