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