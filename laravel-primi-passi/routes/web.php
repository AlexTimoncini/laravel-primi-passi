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
    $data = [
        'navItems' => [
            'home',
            'about-us',
            'spiderman',
            'nowayhome'
        ]
    ];
    return view('home', $data);
})->name('home');

Route::get('/about-us', function () {

    return view('about-us');
})->name('about-us');

Route::get('/spiderman', function () {

    return view('spiderman');
})->name('spiderman');

Route::get('/nowayhome', function () {

    return view('nowayhome');
})->name('nowayhome');
