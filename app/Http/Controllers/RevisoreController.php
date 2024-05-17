<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class RevisoreController extends Controller
{
    public function dashboard(){
        $unrevisionedArticles = Article::where('is_accepted',NULL)->get();
        $acceptedArticles = Article::where('is_accepted',true)->get();
        $rejectedArticles = Article::where('is_accepted',false)->get();

        return view('revisor.dashboard' , compact('unrevisionedArticles' , 'acceptedArticles' , 'rejectedArticles'));
    }

    public function rejectArticle( Article $article){
        $article->is_accepted = false ;
        $article->is_save();

        return redirect(route('revisor.dashboard'))->with('message' , 'Hai accetato l\'articolo scelto');
    }

    public function undoArticle( Article $article){
        $article->is_accepted = NULL ;
        $article->is_save();

        return redirect(round('revisor.dashboard'))->with('message' , 'Hai riportato l\'articolo scelto in revisione');
    }


}
