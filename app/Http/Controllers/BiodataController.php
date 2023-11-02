<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function showBiodata()
{
    return view('biodata');
}
}
