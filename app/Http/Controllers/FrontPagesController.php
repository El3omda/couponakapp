<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPagesController extends Controller
{
    
    // Home
    public function index() {
        return view('front.index');
    }
    
    // Terms
    public function terms() {
        return view('front.terms');
    }
    
    // Privacy Policy
    public function privacy() {
        return view('front.privacy');
    }
    
    // Contact
    public function contact() {
        return view('front.contact');
    }

}
