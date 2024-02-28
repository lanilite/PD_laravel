<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        return Course::all();
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'banner_url' => 'required|url',
            'attendees_count' => 'required|integer|min:0',

            
        ]);
        return Course::create($validated);
    }
}

