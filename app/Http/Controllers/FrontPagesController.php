<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPagesController extends Controller
{
    
    // Home
    public function index() {
        return view('front.index');
    }

}
