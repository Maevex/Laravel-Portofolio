<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Tampilkan semua proyek.
     */
    public function index()
    {
        // Ambil semua proyek dari database
        $projects = Project::all();
        
        // Kirim data ke view
        return view('projects', compact('projects'));
    }
    public function show($id)
{
    $project = Project::findOrFail($id);
    return view('projectshow', compact('project')); // Menggunakan 'projectshow.blade.php'
}

public function edit($id)
{
    $project = Project::findOrFail($id);
    return view('projectedit', compact('project'));
}


public function update(Request $request, $id)
{
    $request->validate([
        'category' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'overview' => 'required|string',
        'description' => 'required|string',
    ]);

    $project = Project::findOrFail($id);
    $project->update([
        'category' => $request->category,
        'title' => $request->title,
        'overview' => $request->overview,
        'description' => $request->description,
    ]);

    return redirect()->route('project.show', $id)->with('success', 'Project updated successfully!');
}



}
