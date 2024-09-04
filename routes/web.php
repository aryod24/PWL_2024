<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles/{id}', [ArticleController::class, 'articles']);

Route::get('/welcome', function () { 
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'Nama : Aryo Wahyu Nugroho <br>NIM : 2241760074';
 });

Route::get('/user/aryo', function($name = 'Aryo Wahyu Nugroho') {
    return 'Nama Saya: ' . $name;
 });

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{post}/comments/{comment}', function ($commentId) {
    return 'Halaman Artikel ini '."dengan ID ".$commentId;
});

Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name;
});




