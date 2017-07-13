<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

use App\Category;

class AdminController extends Controller
{
    //
    public function index()
    {
        # code...
        $articles = Article::orderBy('id', 'desc')->take(5)->get();
        $categories = Category::orderBy('id', 'desc')->take(5)->get();
        return view('admin.index')
            ->with('articles', $articles)
            ->with('categories', $categories);
    }
}
