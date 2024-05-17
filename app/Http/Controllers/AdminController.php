<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $adminRequests = User::where('is_admin' , Null)->get();
        $revisorRequests = User::where('is_revisor' , Null)->get();
        $writerRequests = User::where('is_writer' , Null)->get();

        return view('admin.dashboard' , compact('adminRequests' , 'revisorRequests' , 'writerRequests' ));
    }

    public function setAdmin(User $user){
        $user->is_admin = true;
        $user->save();

        return redirect(route('admin.dashboard'))->with('message' , 'Hai correttamente reso amministratore 1\'utente scelto');
    }

    public function setRevisor(User $user){
        $user->is_revisor = true;
        $user->save();
        
        return redirect(route('admin.dashboard'))->with('message' , 'Hai correttamente reso revisore 1\'utente scelto');
    }

    public function setWriter(User $user){
        $user->is_writer = true;
        $user->save();
        
        return redirect(route('admin.dashboard'))->with('message' , 'Hai correttamente reso redattore 1\'utente scelto');
    }

    public function editTag(Request $request , Tag $tag){
        $request->validate([
            'name' => 'required|unique:tags',
        ]);

        $tag->update([
            'name' => strtolower($request->name),
        ]);
        return redirect(route('admin.dashboard'))->with('message' , 'Hai correttamente aggiornato il tag');
    }

    public function deleteTag(Tag $tag){
        foreach ($tag->articles as $article ){
            $article->tags()->detach($tag);
        }
        $tag->delete();
        return redirect(route('admin.dashboard'))->with('message' ,'Hai correttamente eliminato il tag');
    }

    public function editCategory(Request $request , Category $category){
        $request->validate([
            'name' => 'required|unique:categories',
        ]);

        $category->update([
            'name' => strtolower($request->name),
        ]);
        return redirect(route('admin.dashboard'))->with('message' , 'Hai correttamente aggiornato la categoria');
    }

    public function deleteCategory(Category $category){
        $category->delete();
        return redirect(route('admin.dashboard'))->with('message' ,'Hai correttamente eliminato la categoria');
    }

    public function storeCategory(Request $request){
        Category::create([
            'name' => strtolower($request->name),
        ]);

        return redirect(route('admin.dashboard'))->with('message' , 'Hai correttamente inserito una nuova categoria');

    }
}
