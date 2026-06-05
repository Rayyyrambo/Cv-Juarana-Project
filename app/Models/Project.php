<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Fillable;
class Project extends Model
{
    protected $fillable = [
        'image', 'name_project', 'tanggal_project', 'alamat_project',
    ];
}
