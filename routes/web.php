<?php

use App\Http\Controllers\FrontPagesController;
use Illuminate\Support\Facades\Route;

// --------------------------------------------//
// --------------> Front Pages <-------------- //
// --------------------------------------------//

// Home Page
Route::get('/', [FrontPagesController::class, 'index']);