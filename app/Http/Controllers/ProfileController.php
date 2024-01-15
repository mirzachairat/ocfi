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
        return view('page.profile_ibc');
    }
}
