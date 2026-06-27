<?php

namespace App\Http\Controllers\Admin;

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
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'name_project'=>'required|string|max:255',
                'tanggal_project'=>'required|date',
                'alamat_project'=>'required|string|max:255',
                'image'=>'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            ]);

            if($request->hasFile('image')){
                $file = $request->File('image');
                $imageName = time() . '_' . str_replace(' ', '_', $file->getClientOriginalName());
                $file->storeAs('projects', $imageName, 'public');
                $data['image']=$imageName;
            }
            Project::create($data);
            return to_route('admin.projects.index')->with('succes', 'Project berhasil ditambahkan');
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
    public function update(Request $request, string $id)
    {
         $projects = Project::findOrFail($id);
          try {
            $data = $request->validate([
                'name_project'=>'required|string|max:255',
                'tanggal_project'=>'required|date',
                'alamat_project'=>'required|string|max:255',
                'image'=>'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            ]);

            if($request->hasFile('image')){
                $file = $request->File('image');
                $imageName = time() . '_' . str_replace(' ', '_', $file->getClientOriginalName());
                $file->storeAs('projects', $imageName, 'public');
                $data['image']=$imageName;
            }
            $projects->update($data);
            return to_route('admin.projects.index')->with('succes', 'Project berhasil ditambahkan');
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
