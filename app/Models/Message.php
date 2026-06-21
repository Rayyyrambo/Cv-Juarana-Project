<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Fillable;
class Message extends Model
{
    protected $fillable = [
    'email', 'user', 'description', 'created_ad'
    ];
}
