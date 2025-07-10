<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($value = null){
        return view('welcome')->with(['value' => $value]);
    }
}
