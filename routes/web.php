<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;

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

use App\Http\Controllers\PublicBlogController;

Route::get('/blog', [PublicBlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [PublicBlogController::class, 'show'])->name('blog.show');

use App\Http\Controllers\PublicProductController;
Route::get('/produk', [PublicProductController::class, 'index'])->name('produk.index');
Route::get('/produk/{product}', [PublicProductController::class, 'show'])->name('produk.show');


// Authentication Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Password Reset Routes (Simple One-Page)


Route::get('/forgot-password', [ForgotPasswordController::class, 'showForm'])->name('password.request');
Route::post('/forgot-password/verify', [ForgotPasswordController::class, 'verifyEmail'])->name('password.verify');
Route::post('/forgot-password/reset', [ForgotPasswordController::class, 'resetPassword'])->name('password.reset_simple');

// Admin Routes (Protected)
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;


Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::resource('/admin/categories', CategoryController::class)->except(['create', 'edit', 'show']);
    Route::resource('/admin/blogs', BlogController::class)->except(['create', 'edit', 'show']);
    Route::get('/admin/blogs/{blog}/detail', [BlogController::class, 'show'])->name('admin.blogs.detail');
    Route::resource('/admin/users', UserController::class)->except(['create', 'edit', 'show']);
    Route::resource('/admin/products', \App\Http\Controllers\ProductController::class)->except(['create', 'edit', 'show']);
});