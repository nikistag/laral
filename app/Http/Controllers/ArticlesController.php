<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Article;
use App\Tag;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;


use \Auth;

class ArticlesController extends Controller {

    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'edit', 'update', 'destroy']]);
        $this->middleware('creator', ['only' => ['update', 'destroy', 'edit']]);
    }
            
    public function index() {
        
       // return \Auth::user()->name;
        
        $articles = Article::latest('published_at', 'desc')->published()->get();

        return view('articles.index', compact('articles'));
    }

    public function show(Article $article) {       
      
        return view('articles.show', compact('article'));
    }

    public function create() {
        
        $allTags = Tag::lists('name', 'id');
    
        return view('articles.create', compact('allTags')); 
      
    }

    public function store(ArticleRequest $request) {
        
       
        
        $article = Auth::user()->articles()->create($request->all());
        
        $article->tags()->attach($request->input('tags'));

//        $article = new Article($request->all());
//        
//        Auth::user()->articles()->save($article);
        
//        session()->flash('flash_message', 'Your article has been created!');
//        
//        session()->flash('flash_message_important', true);
                
       flash()->overlay('Your article has been created', 'Good Job!');

        return redirect('articles');
    }

    public function edit(Article $article) {
       
        $allTags = Tag::lists('name', 'id');
        $ownTags = $article->tags->lists('id')->all();
        
        return view('articles.edit', compact('article', 'allTags', 'ownTags'));
    }

    public function update(Article $article, ArticleRequest $request) {


        $article->update($request->all());
        
        $article->tags()->sync($request->input('tags'));

        return redirect('articles');
    }
    

}
