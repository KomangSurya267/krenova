<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelAdmin;
use App\Models\ModelUser;

class Admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[
            'dataInovasi' => ModelAdmin::all()
        ];
        return View('admin.data_inovasi', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.tambah_inovasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            $inovasi->save();

            $r->session()->flash('msg', "Data dengan inovasi $name berhasil tersimpan");
            return redirect('/admin');
        } catch (throwable $e) {
            echo $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inovasi = ModelAdmin::find($id);
        $data = [
            'id' => $id,
            'username' => $inovasi->username,
            'email' => $inovasi->email,
            'password' => $inovasi->password,
            'organisasi' => $inovasi->organisasi,
            'name' => $inovasi->name,
            'phone' => $inovasi->phone,
            'sosmed' => $inovasi->sosmed,
            'kategori' => $inovasi->kategori,
            'file' => $inovasi->file
        ];
        
        return View('admin.edit_inovasi', compact('inovasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
        // dd($admin);
        // $id = $r->id;
        $username = $r->username;
        $email = $r->email;
        $password = $r->password;
        $organisasi = $r->organisasi;
        $name = $r->name;
        $phone = $r->phone;
        $sosmed = $r->sosmed;
        $kategori = $r->kategori;
        $file = $r->file;

        try {
            $inovasi = ModelAdmin::find($id);
            $inovasi->username = $username;
            $inovasi->email = $email;
            $inovasi->password = $password;
            $inovasi->organisasi = $organisasi;
            $inovasi->name = $name;
            $inovasi->phone = $phone;
            $inovasi->sosmed = $sosmed;
            $inovasi->kategori = $kategori;
            $inovasi->file = $file;
            // dd($inovasi);
            $inovasi->update();

            $r->session()->flash('msg', "Data dengan inovasi $name berhasil diubah");
            return redirect('admin');
        } catch (throwable $e) {
            echo $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ModelAdmin::find($id)->delete();
        return redirect()->back();
    }

    public function user()
    {
        $data=ModelUser::all();
        // dd($data->dataUser);
        return view('admin.data_user', compact('data'));
    }

}
