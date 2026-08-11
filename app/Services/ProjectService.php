<?php

namespace App\Services;
use App\Models\Project;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
class ProjectService
{
    public function createProject(array $data, ?UploadedFile $imageFile = null): Project{
        if($imageFile){
            $imageName = time(). '_' . str_replace(' ', '_', $imageFile->getClientOriginalName());
            $imageFile->storeAs('projects', $imageName, 'public');
            $data['image']= $imageName;
        }
        return Project::create($data);
    }
    
    public function updateProject(Project $project, array $data, ?UploadedFile $imageFile = null):Project{
        if($imageFile){
            if($project->image){
                Storage::disk('public')->delete('projects/' .$project->image);
            }
            $imageName = time(). '_' . str_replace(' ', '_', $imageFile->getClientOriginalName());
            $imageFile->storeAs('projects', $imageName, 'public');
            $data['image']= $imageName;
        }
        $project->update($data);
        return $project;
    }
   
}
