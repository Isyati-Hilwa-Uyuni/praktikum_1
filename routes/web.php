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

Route::get('/saya', function () {
    $judul = "BIODATA";
    $nama = "Isyati Hilwa Uyuni";
    $ttl = "Sampang, 14-February-2006";
    $nim = "253107050002";
    $prodi = "Manajemen Informatika";
    $jurusan = "Tenologi Informasi";
    $alamat = "Jl. Aji Gunung 1";
    $hp = "081935921316";
    $foto = 'img src="img/saya.jpg"';
    return view('biodata.Biodata', ['judul' => $judul,
        'nama' => $nama,
        'ttl' => $ttl,
        'nim' => $nim,
        'prodi' => $prodi,
        'jurusan' => $jurusan,
        'alamat' => $alamat,
        'hp' => $hp]);
});

Route::get('/ortu', function () {
    $judul = "BIODATA";
    $bapak = "Somadani";
    $ibu = "Dewi Amina";
    $ttl_b = "Sampang, 27 Juni 1977";
    $ttl_i = "Sampang, 25 Mei 1983";
    $kerja_b = "Wiraswasta";
    $kerja_i = "Ibu Rumah Tangga";
    $alamat = "Jl. Aji Gunung 1";
    $hp = "081935921316";
    $foto = 'img src="img/bapak.jpg"';
    $foto = 'img src="img/ibu.jpg"';
    return view('biodata.ortu', ['judul' => $judul,
        'bapak' => $bapak,
        'ibu' => $ibu,
        'ttl_b' => $ttl_b,
        'ttl_i' => $ttl_i,
        'kerja_b' => $kerja_b,
        'kerja_i' => $kerja_i,
        'alamat' => $alamat,
        'hp' => $hp]);
});

Route::get('/smk', function () {
    $smk = "https://smkn2sampang.sch.id/";
    return view('biodata.smk', ['smk' => $smk]);
    //return view('biodata.data', ['nama' => $nama]);
});