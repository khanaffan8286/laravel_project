<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index($value = null){
        return view('welcome')->with(['value'=>$value]);
    }
}
