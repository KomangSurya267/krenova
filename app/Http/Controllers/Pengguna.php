<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
