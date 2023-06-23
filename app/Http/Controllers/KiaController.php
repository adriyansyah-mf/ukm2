<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KiaController extends Controller
{
    public function index()
    {
        return view('pages.kia');
    }
}
