<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "tittle" => 'Home',
    ]);
});

Route::get('/about', function () {
    $films = [
        [
        "gambar" => "Gambar film",
        "judul" => "KKN Desa Penari",
        "tahun" => "2017",
        "deskripsion" => "Bllablablablabla"
        ],
        [
            "gambar" => "Gambar film 2",
            "judul" => "Milea",
            "tahun" => "2018",
            "deskripsion" => "Kamu nanya"
            ]
        ];
    return view('about', [
    "films" => $films]);
});

Route::get('/search', function () {
    return view('posts');
});

