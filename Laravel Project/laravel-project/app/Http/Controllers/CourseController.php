<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //ambil semua data 
// App\Http\Controllers\CourseController.php

public function index()
{
    // Retrieve the top 2 newest courses, eager loading the writer relationship
    $courses = Course::with('writer')->orderBy('created_at', 'desc')->take(2)->get();
    $categories = Category::all();

    // Pass the courses and categories to the view
    return view('home', compact('courses', 'categories'));
}



public function showByCategory($id)
{   
    $kategory = Category::find($id);
    $courses = Course::with('writer')->where('category_id', $id)->get(); // Get courses by category
    $categories = Category::all(); // Get all categories

    // Debugging output
    // dd($category); // This will stop execution and show the data being returned

    return view('course', compact('kategory','courses', 'categories'));
}


public function show($id)
{
    $course = Course::with('writer')->findOrFail($id);
    $categories = Category::all(); // Get all categories
    return view('specificCourse', compact('course','categories'));
}



}
