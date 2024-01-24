<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class BeritaController extends Controller
{
    public function kegiatan(){
        $datakegiatan = Article::all();
        return view('pages.kegiatans.kegiatan', compact('datakegiatan'));
    }

    public function detailkegiatan($id){
        $datakegiatan = Article::where('id',$id)->first();
        return view('pages.kegiatans.detail_kegiatan',compact('datakegiatan'));
     }
}
