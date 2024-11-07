<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    
    public function index()
{
    $articles = Article::with('writer')->orderBy('views', 'desc')->paginate(3);
    session(['view_order' => 'desc']);
    $categories = Category::all();
    return view('popular', compact('articles', 'categories'));
}

public function show($id)
{
    $article = Article::with('writer')->findOrFail($id);
    $article->increment('views');
    $categories = Category::all(); // Get all categories
    return view('specificArticle', compact('article','categories'));
}


}
