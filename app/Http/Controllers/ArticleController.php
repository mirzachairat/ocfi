<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        $data = Article::all();
        return view('backend.articles.article', compact('data'));
    }

    public function formarticle(){
        return view('backend.articles.formarticle');
    }

    public function tambaharticle(Request $request){   
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
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
              'article_name' => $request->article_name,
              'img_title' => $request->img_title,
              'content' => $validatedData['content'],
              'author_id' => 1,
              'created_by' => "mirza",
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
}
