<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subkategori;
use Illuminate\Support\Facades\Auth;


class KategoriController extends Controller
{
    public function index(){
        $data = Category::get();
        return view('backend.category', compact('data'));
    }

    public function tambahkategori(Request $request){
        $user = Auth::user()->name;
        $userdata = [
            'created_by' => $user,
            'category' => $request->category
        ];

        Category::create($userdata);
        return response()->json(['success' => true]);
    }

    public function indexsub(){
        $datakategori = Category::get();
        $datac = Subkategori::get();
        return view('backend.subcategory', compact(['datac','datakategori']));    
    }

    public function tambahsub(Request $request){
        Subkategori::create($request->all());    
        return response()->json(['success' => true]); 
    }
}
