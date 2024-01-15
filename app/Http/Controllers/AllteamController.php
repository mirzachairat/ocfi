<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllteamController extends Controller
{
    public function index(){
        return view('pages.allteam');
    }
}
