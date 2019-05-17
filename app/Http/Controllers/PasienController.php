<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;

class PasienController extends Controller
{
    //

    public function index(){
        return Pasien::all();
    }

    public function create(request $request){
        $pasien = new Pasien;
        $pasien->nama = $request->nama;
        $pasien->alamat = $request->alamat;
        $pasien->save();

        return "Data berhasil ditambahkan";
    }

    public function update(request $request, $id){
        $nama = $request->nama;
        $alamat = $request->alamat;

        $pasien = Pasien::find($id);
        $pasien->nama = $nama;
        $pasien->alamat = $alamat;
        $pasien->save();

        return "Data berhasil diperbarui";
    }

    public function delete ($id){
        $pasien = Pasien::find($id);
        $pasien->delete();

        return "Data berhasil dihapus";
    }
}
