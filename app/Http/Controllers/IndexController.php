<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function signin(Request $request)
    {
       $validateData=$request->validate([
       'email'=>"required",
       'password'=>'required'
       ]);
       if(Auth::attempt($validateData))
       {
        return redirect('/project');
             //later need to change
         
       }else
       {
        return redirect()->back()->with('error','Invalid Credentials');
       }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
