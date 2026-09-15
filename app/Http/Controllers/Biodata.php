<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Biodata extends Controller
{
    //disini controller biodata 
    public function index()
    {
        $nama = "Isyati Hilwa Uyuni";
        $NIM = "253107050002";
        $alamat = "Sampang";

        return view('biodata.P4', [
            'jeneng' => $nama,
            'NIM' => $NIM,
            'omah' => $alamat
        ]);
    }

    public function show($nama, $nim, $alamat)
    {
        return view('biodata.P4', [
            'jeneng' => $nama,
            'NIM' => $nim,
            'omah' => $alamat
        ]);
    }

    public function tampil()
    {
        return view('halaman.produk');
    }
}
