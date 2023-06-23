<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeslingController extends Controller
{
    public function index(){
        return view('pages.kesling');
    }
    
}
