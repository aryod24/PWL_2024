<?php

use Illuminate\Support\Facades\Route;

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


