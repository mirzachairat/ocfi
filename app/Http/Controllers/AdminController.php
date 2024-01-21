<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('layout.admin');
    }
    public function usertable(){
        return view('pages.backend.user');
    }
    public function articletable(){
        return view('pages.backend.article');
    }
    public function categorytable(){
        return view('pages.backend.category');
    }
}
