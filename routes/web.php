<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $portfolio = config('portfolio');
    return view('home', compact('portfolio'));
});

Route::get('/cv/download', function () {
    $path = public_path('documents/CV_Hessel_Farras_Abiyyu.pdf');

    abort_unless(is_file($path), 404);

    return response()->download($path, 'CV_Hessel_Farras_Abiyyu.pdf', [
        'Content-Type' => 'application/pdf',
        'Cache-Control' => 'no-store, no-cache, must-revalidate',
    ]);
})->name('cv.download');