<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    public function create(){
        return view('create-article');
    }

    public function store(StoreArticleRequest $request){
        
        $imageId =uniqid();
        
        $article = new Article;

        $article->title = $request->title;
        $article->article = $request->article;
        //ho scordato di mettere ->nullable alla creazione della migration, vado a sistemare con un if/else
        if ($request->file('image')) {

            $article->image = 'image-article-' . $imageId . '.' . $request->file('image')->extension();
            $article->image_id = $imageId;
            $fileName = 'image-article-' . $imageId . '.' . $request->file('image')->extension();
            $image = $request->file('image')->storeAs('public', $fileName);

        } else {

            $article->image = '';
            $article->image_id = '';

        }
        $article->save();

        return redirect('/');

    }
}
