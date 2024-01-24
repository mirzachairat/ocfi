<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        return view('layout.admin');
    }

    public function usertable(){
        $user = User::get();
        return view('backend.user',compact('user'));
    }

    public function deleteuser($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('usertable')->with('success', 'User deleted successfully');
    }
}
