<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // List all projects
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects')); // Later, you can use Blade to display the projects interactively
    }

    // Show the form for creating a new project (for admin dashboard)
    public function create()
    {
        return view('admin.projects.create');
    }

    // Store a new project with file uploads
    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_name'      => 'required|string|max:255',
            'industry'          => 'required|string|max:255',
            'brief_description' => 'required|string',
            'key_objectives'    => 'required|string',
            'logo'              => 'nullable|image|max:2048',  // image file for logo
            'images.*'          => 'nullable|image|max:2048',  // each file in images array
            'website_url'       => 'nullable|url',
        ]);

        // Handle file upload for logo
        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // Handle multiple image uploads
        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imagePaths[] = $image->store('project_images', 'public');
            }
            // Since our model casts 'images' as an array, we can pass the array directly.
            $validated['images'] = $imagePaths;
        }

        $project = Project::create($validated);

        return redirect()->route('projects.index')
            ->with('success', 'Project created successfully.');
    }

    // Show a specific project
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.show', compact('project'));
    }

    // Show the form for editing a project
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));
    }

    // Update an existing project with file uploads
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $validated = $request->validate([
            'company_name'      => 'sometimes|required|string|max:255',
            'industry'          => 'sometimes|required|string|max:255',
            'brief_description' => 'sometimes|required|string',
            'key_objectives'    => 'sometimes|required|string',
            'logo'              => 'nullable|image|max:2048',
            'images.*'          => 'nullable|image|max:2048',
            'website_url'       => 'nullable|url',
        ]);

        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('logos', 'public');
        }

        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imagePaths[] = $image->store('project_images', 'public');
            }
            $validated['images'] = $imagePaths;
        }

        $project->update($validated);
        return redirect()->route('projects.index')
            ->with('success', 'Project updated successfully.');
    }

    // Delete a project
    public function destroy($id)
    {
        Project::destroy($id);
        return redirect()->route('projects.index')
            ->with('success', 'Project deleted successfully.');
    }
}
