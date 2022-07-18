<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelAdmin;
use App\Models\ModelUser;

class Pengguna extends Controller
{
    public function index()
    {
        return View('user.krenova_dashboard');
    }

    public function informasi()
    {
        return View('user.krenova_informasi');
    }

    public function galeri()
    {
        return View('user.krenova_galeri');
    }

    public function pendaftaran()
    {
        return View('user.krenova_pendaftaran');
    }

    public function tambah()
    {
        return View('user.tambah_inovasi');
    }

    public function gokart()
    {
        return View('user.krenova_gokart');
    }

    public function keripik()
    {
        return View('user.krenova_keripik');
    }

    public function sirup()
    {
        return View('user.krenova_sirup');
    }
    
    public function oppa()
    {
        return View('user.krenova_oppa');
    }

    public function paprokes()
    {
        return View('user.krenova_paprokes');
    }

    public function pintu()
    {
        return View('user.krenova_pintu');
    }

    public function quizku()
    {
        return View('user.krenova_quizku');
    }

    public function nugget()
    {
        return View('user.krenova_nugget');
    }

    public function oil()
    {
        return View('user.krenova_oil');
    }

    public function store(Request $r)
    {
        $id = $r->id;
        $username = $r->username;
        $email = $r->email;
        $password = $r->password;
        $organisasi = $r->organisasi;
        $name = $r->name;
        $phone = $r->phone;
        $sosmed = $r->sosmed;
        $kategori = $r->kategori;
        $file = $r->file;
        $abstrak = $r->abstrak;
        $latarbelakang = $r->latarbelakang;
        $tujuan = $r->tujuan;

        try {
            $inovasi = new ModelAdmin;
            $inovasi->id = $id;
            $inovasi->username = $username;
            $inovasi->email = $email;
            $inovasi->password = $password;
            $inovasi->organisasi = $organisasi;
            $inovasi->name = $name;
            $inovasi->phone = $phone;
            $inovasi->sosmed = $sosmed;
            $inovasi->kategori = $kategori;
            $inovasi->file = $file;
            $inovasi->abstrak = $abstrak;
            $inovasi->latarbelakang = $latarbelakang;
            $inovasi->tujuan = $tujuan;
            $inovasi->save();

            $r->session()->flash('msg', "Data dengan inovasi $name berhasil tersimpan");
            return redirect('/tambah');
        } catch (throwable $e) {
            echo $e;
        }
    }

}
