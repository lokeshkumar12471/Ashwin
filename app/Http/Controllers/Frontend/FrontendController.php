<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        return view('pages.Frontend.home');
    }
}