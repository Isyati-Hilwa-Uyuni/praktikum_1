<?php

use Illuminate\Support\Facades\Route;

Route::get('/hilwa', function () {
    return view('welcome');
});

Route::get('/luqman_ganteng', function () {
    return view('malang');
});

Route::get('/biodata', function () {
    return view('Biodata');
});

Route::get('/Orangtua', function () {
    return view('Orangtua');
});

Route::get('/sekolah', function () {
    return view('Sekolah');
});

Route::get('/apaya', function () {
    $nama = "Jane Doe";
    return view('biodata.data', compact('nama'));
    //return view('biodata.data', ['nama' => $nama]);
});

Route::get('/coba', function () {
    $judul = "BIODATA";
    $nama = "Isyati Hilwa Uyuni";
    $ttl = "Sampang, 14-February-2006";
    $nim = "253107050002";
    $prodi = "Manajemen Informatika";
    $jurusan = "Tenologi Informasi";
    $alamat = "Jl. Aji Gunung 1";
    $hp = "081935921316";
    return view('biodata.Biodata', ['judul' => $judul,
        'nama' => $nama,
        'ttl' => $ttl,
        'nim' => $nim,
        'prodi' => $prodi,
        'jurusan' => $jurusan,
        'alamat' => $alamat,
        'hp' => $hp]);
});