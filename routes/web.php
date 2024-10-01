<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('instalasi_software'); // 'home' adalah nama view tanpa ekstensi .blade.php
});
