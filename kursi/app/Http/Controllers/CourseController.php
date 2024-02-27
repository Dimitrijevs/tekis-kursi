<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //

    public function index()
    {
        $courses = Course::all();

        return response()->json($courses);
    }


    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'baner' => 'required|url',
            'address' => 'required',
            'people_number' => 'required|integer|min:0',
        ]);

        Course::create($validatedData);

        return response()->json($course, 201);
    }
}
