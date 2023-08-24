<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // provo a far vedere le card degli articoli direttamente nell' index del profilo
        $categories = Category::all();

        $user_articles = User::find(auth()->user()->id);
        return view('users.profilo', ['articles' => $user_articles->articles, 'categories' => $categories]);
    }
}
