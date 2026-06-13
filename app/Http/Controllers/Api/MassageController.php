<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MassageController extends Controller
{
    public function index(){
        $message = Message::latest()->get();
        $data = $message->map(function($item){
            return [
                'user' => $item -> user,
                'email' => $item -> email,
                'description' => $item -> description,
            ];
        });
        return response()->json($data);
    }
}
