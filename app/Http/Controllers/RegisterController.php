<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ModelUser;

class RegisterController extends Controller
{
    public function index()
    {
        return view('admin.view_register');
    } 

    public function create()
    {
        return view('welcome');
    }

    public function save(Request $r){
        // $id = $r->id;
        $name = $r->name;
        $username = $r->username;
        $email = $r->email;
        $password = $r->password;

        try {
            $users = new ModelUser;
            // $users->id = $id;
            $users->name = $name;
            $users->username = $username;
            $users->email = $email;
            $users->password = bcrypt($password);
            $users->level = 0;
            $users->save();

            $r->session()->flash('msg', "Data dengan pengguna $name berhasil melakukan registrasi");
            return redirect('/register/create');
        } catch (throwable $e) {
            echo $e;
        }
    }
}
