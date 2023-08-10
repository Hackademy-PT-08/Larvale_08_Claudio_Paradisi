<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // provo a far vedere le card degli articoli direttamente nell' index del profilo

        $user_articles = User::find(auth()->user()->id);
        return view('users.profilo', ['articles' => $user_articles->articles]);
    }
}
