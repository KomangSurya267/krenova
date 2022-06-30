<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if($user = Auth::user()){
            if($user->level == '1'){
                return redirect()->intended('admin');
            }elseif($user->level == '0'){
                return redirect()->intended('pengguna');
            }
        }

        return view('admin.view_login');
    }

    public function proses(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $kredensial = $request->only('username','password');

        if (Auth::attempt($kredensial)){
             $request->session()->regenerate();
             $user = Auth::user();

             if($user->level == '1'){
                 return redirect()->intended('admin');
             }elseif($user->level == '0'){
                 return redirect()->intended('pengguna');
             }

             return redirect()->intended('/');
        }

        return back()->withErrors([
            'username' => 'Maaf username atau Password anda salah',
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/admin');
    }
}
