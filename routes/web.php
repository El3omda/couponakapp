<?php

use App\Http\Controllers\FrontPagesController;
use Illuminate\Support\Facades\Route;

// --------------------------------------------//
// --------------> Front Pages <-------------- //
// --------------------------------------------//

// Home Page
Route::get('/', [FrontPagesController::class, 'index']);

// Terms And Conditions Page
Route::get('/terms', [FrontPagesController::class, 'terms']);

// Privacy Policy Page
Route::get('/privacy', [FrontPagesController::class, 'privacy']);

// Contact Page
Route::get('/contact', [FrontPagesController::class, 'contact']);