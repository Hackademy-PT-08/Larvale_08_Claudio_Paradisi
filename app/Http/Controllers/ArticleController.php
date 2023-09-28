<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    public function create(){
        $categories = Category::all();
        return view('articles.create' , ['categories' => $categories]);
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

        $categories = $request->category;

        foreach($categories as $category){
            $currentArticle = Article::find($article->id);

            $currentArticle->categories()->attach($category);
        }

        return redirect('/');

    }
    //dettaglio articoli
    public function show($id){
        $article = Article::find($id);
        $categories = Category::all();


        return view('articles.show', ['article' => $article]);
    }
    
    //vista form modifica articolo
    public function edit($id){
        $article=Article::find($id);
        $categories = Category::all();

        if(auth()->user()->id == $article->user_id){
        return view('articles.edit', ['article'=>$article,'categories' => $categories]);
        }else{
        return redirect()->route('home');
        }
    }

    //vista modifica articolo
    public function update(StoreArticleRequest $request, $id){
      $article = Article::find($id);
      $categories = Category::all();

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

        $categories = $request->category;

        foreach($categories as $category){
            $currentArticle = Article::find($article->id);

            $currentArticle->categories()->attach($category);
        }

        return redirect('/'); 
    }

    //vista elimina articolo
    public function destroy($id){
        $categories = Category::all();

        $article = Article::find($id);

        $article->delete();

        return redirect()->route('home');
    }
}
