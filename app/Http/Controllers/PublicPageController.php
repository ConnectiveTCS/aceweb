<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PublicPageController extends Controller
{
    /**
     * Display the Home page.
     */
    public function home()
    {
        // You can load additional data if needed.
        return view('home');
    }

    /**
     * Display the About page.
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Display the Projects listing page.
     */
    public function projects()
    {
        $projects = Project::all(); // Fetch all projects from the database.
        return view('projects', compact('projects'));
    }

    /**
     * Display the details of a single project.
     */
    public function projectDetails($id)
    {
        $project = Project::findOrFail($id);
        return view('project-details', compact('project'));
    }

    /**
     * Display the Contact page.
     */
    public function contact()
    {
        return view('contact');
    }
}
