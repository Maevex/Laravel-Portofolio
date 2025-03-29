<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class HomeController extends Controller
{
    /**
     * Tampilkan halaman home dengan 3 proyek terbaru.
     */
    public function index()
    {
        // Ambil 3 proyek terbaru berdasarkan created_at
        $projects = Project::latest()->take(3)->get();
        
        // Kirim data ke view
        return view('home', compact('projects'));
    }
}
