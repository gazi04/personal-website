<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::controller(PortfolioController::class)->name('portfolio.')->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/blog/{slug}', 'post');
});

require __DIR__.'/settings.php';
