<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Project\StoreProjectRequest;
use App\Http\Requests\Project\UpdateProjectRequest;
use App\Services\ProjectService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalProject = Project::count();
        $projects = Project::latest('created_at')->get();
        return view('pages.admin.projects.index', compact('projects', 'totalProject'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function __construct(protected ProjectService $projectService){}

    public function store(StoreProjectRequest $request)
    {
        try {
           $projects = $this->projectService->createProject($request->validated(), $request->file('image'));

           
            return to_route('admin.projects.index')->with('success', 'Project berhasil ditambahkan');
        } catch (\Throwable $th) {
             return back()->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $projects = Project::findOrFail($id);
        return view('pages.admin.projects.edit', compact('projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
         
          try {
            
            $this->projectService->updateProject($project,$request->validated(), $request->file('image'));
            
            return to_route('admin.projects.index')->with('succes', 'Project berhasil diperbaruhi');
        } catch (\Throwable $th) {
             return back()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $projects = Project::findOrFail($id);
            $projects->delete();
            return to_route('admin.projects.index')->with('success', 'Project berhasil di hapus');

        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }
}
