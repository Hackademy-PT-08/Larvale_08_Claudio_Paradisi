<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    public function create(){
        return view('articles.create');
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
        $article->user_id = auth()->user()->id;
        $article->save();

        return redirect('/');

    }
    //dettaglio articoli
    public function show($id){
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }
    
    //vista form modifica articolo
    public function edit($id){
        $article=Article::find($id);
        if(auth()->user()->id == $article->user_id){
        return view('articles.edit', ['article'=>$article]);
        }else{
        return redirect()->route('home');
        }
    }

    //vista modifica articolo
    public function update(StoreArticleRequest $request, $id){
      $article = Article::find($id);
      $article->title = $request->title;
      $article->article = $request->article;  
      if ($request->file('image')) {
        $imageId =uniqid();
        $article->image = 'image-article-' . $imageId . '.' . $request->file('image')->extension();
        $article->image_id = $imageId;
        $fileName = 'image-article-' . $imageId . '.' . $request->file('image')->extension();
        $image = $request->file('image')->storeAs('public', $fileName);

        }
        $article->save();

        return redirect('/'); 
    }

    //vista elimina articolo
    public function destroy($id){
        $article = Article::find($id);

        $article->delete();

        return redirect()->route('home');
    }
}
