<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    public function index(){
        $datakegiatan = Article::where('catergory_id',12)->get();
        return view('pages.home', compact('datakegiatan'));
    }
}
