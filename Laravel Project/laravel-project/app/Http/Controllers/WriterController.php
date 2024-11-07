<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index()
    {
        $writers = Writer::all(); // Get all writers
        $categories = Category::all();
        return view('writer', compact('writers', 'categories'));
    }

    public function showWriterContent($id)
{
        // Get the writer with their courses or articles
        $writer = Writer::with('articles', 'courses')->findOrFail($id);
        $categories = Category::all();
        // Return a view with the writer and their content
        return view('writersCourseArticlePage', compact('writer', 'categories'));
    }
}
