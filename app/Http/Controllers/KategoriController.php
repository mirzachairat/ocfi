<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class KategoriController extends Controller
{
    public function index(){
        $data = Category::get();
        return view('backend.category', compact('data'));
    }
}
