<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    public function index(){
        $data_article = Article::get();
        return view('pages.home', compact('data_article'));
    }
}
