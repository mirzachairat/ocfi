<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('pages.profile');
    }
    public function konsorsium_ibc(){
        return view('pages.profile_ibc');
    }
    public function media_link(){
        return view('pages.profile_medialink');
    }
}
