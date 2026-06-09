<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class HomeController extends Controller
{
    public function index(){

        $messages = Message::latest()->get();
        return view('pages.publik.home', compact('messages'));
    }
}
