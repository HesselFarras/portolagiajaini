<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $portfolio = config('portfolio');
    return view('home', compact('portfolio'));
});

Route::get('/cv/download', function () {
    $path = public_path('documents/CV_HESSEL_FARRAS.pdf');
    if (!file_exists($path)) {
        abort(404);
    }
    return response()->download($path, 'CV_HESSEL_FARRAS.pdf', [
        'Content-Type' => 'application/pdf',
    ]);
})->name('cv.download');