<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('Frontend.modules.pages.home');
    }

    public function shop()
    {
        return view('Frontend.modules.pages.shop');
    }
}
