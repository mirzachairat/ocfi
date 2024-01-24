<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    public function index(){
        $datakegiatan = Article::get();
        return view('pages.home', compact('datakegiatan'));
    }
    
    
}
