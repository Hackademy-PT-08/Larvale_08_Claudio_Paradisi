<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index() {
        //prendo gli aricoli dal databese e li porto nella home
        $getAllArticles = Article::all();
        $categories = Category::all();


        return view('welcome', ['articles' => $getAllArticles, 'categories' => $categories]);
    }
}
