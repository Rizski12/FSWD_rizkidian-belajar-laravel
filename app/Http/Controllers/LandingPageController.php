<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
     public function showLanding()
    {
        return view('pages.landing-page');
    }
}
