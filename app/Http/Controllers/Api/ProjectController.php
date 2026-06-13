<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index(){
        $project = Project::latest()->get();
        $data = $project->map(function($item){
            return [
                'id'=>$item->id,
                'name_project'=> $item->name_project,
                'tanggal_project'=>(float)$item->tanggal_project,
                'alamat_project'=>$item->alamat_project,
                'image'=>env('APP_URL'). Storage::url('projects/'.$item->image),
            ];
        });
        return response()->json($data);
    }
}
