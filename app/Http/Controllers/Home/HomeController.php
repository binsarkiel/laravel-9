<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function aboutPage() {
        return view('about');
    }

    public function contactPage() {
        return view('contact');
    }
}
