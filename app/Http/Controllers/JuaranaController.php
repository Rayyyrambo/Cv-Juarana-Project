<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuaranaController extends Controller
{
    public function index(){
        return view('layouts.juarana');
    }
}
