<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $portfolio = config('portfolio');
    return view('home', compact('portfolio'));
});