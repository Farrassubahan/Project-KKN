<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.home');
});

Route::get('/edukasi/organik', function () {
    return view('public.edukasi.organik');
});

Route::get('/edukasi/anorganik', function () {
    return view('public.edukasi.anorganik');
});

Route::get('/edukasi/b3', function () {
    return view('public.edukasi.b3');
});

Route::get('/program', function () {
    return view('public.program');
});

Route::get('/blog', function () {
    return view('public.informasi.blog');
});

Route::get('/blog/detail', function () {
    return view('public.informasi.blog-detail');
});
    