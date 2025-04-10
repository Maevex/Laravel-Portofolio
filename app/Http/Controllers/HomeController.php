<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class HomeController extends Controller
{
    
    public function index()
    {
       
        $projects = Project::latest()->take(3)->get();
        
     
        return view('home', compact('projects'));
    }
}
