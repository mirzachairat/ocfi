<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Subkategori;
use Illuminate\Support\Facades\Auth;


class ArticleController extends Controller
{
    public function index(){
        $data = Article::all();
        return view('backend.articles.article', compact('data'));
    }

    public function formarticle(){
        $kategori = Category::get();
        $subkategori = Subkategori::get();
        return view('backend.articles.formarticle',compact(['kategori','subkategori']));
    }

    public function tambaharticle(Request $request){   

        $user = Auth::user()->name;    
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'content' => 'required|string',
        ]);


        // Handle image upload and save the file path to the user's profile_image field
        $path = $request->file('image')->getRealPath();
        $gambar = file_get_contents($path);
        $base64 = base64_encode($gambar);
        $gambarblob = $base64;

        Article::create(
            [
              'catergory_id' => $request->catergory_id,  
              'subkategori_id' => $request->subkategori_id,  
              'article_name' => $request->article_name,
              'img_title' => $request->img_title,
              'content' => $validatedData['content'],
              'author_id' => 1,
              'created_by' => $user,
              'data_source' => $gambarblob
            ]
        );
        return redirect()->route('articletable')->with('success', 'Content saved successfully.');
    }

    public function deletearticle($id){
        
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('articletable')->with('success', 'User deleted successfully');
    } 

    public function edit($id){
        $data_article =  Article::with('Category')->where('id',$id)->first();
        $kategori = Category::get();
        $subkategori = Subkategori::get();
        return view('backend.articles.editform',compact(['data_article','kategori','subkategori']));
    }

    public function update($id){
        Article::where('id',$id)->update([
            'category_id' => $request->cagetory_id,
            'subkategori_id' => $request->subkategori_id,
            'article_name' => $request->article_name,
            'img_title' => $request->img_title,
            'content' => $request->content,
            'data_source' => $request->data_source
        ]);
     redirect->back('/articletable');   
    }
}
