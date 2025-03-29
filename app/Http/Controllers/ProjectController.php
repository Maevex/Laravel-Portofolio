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
    return view('projects.show', compact('project'));
}

}
