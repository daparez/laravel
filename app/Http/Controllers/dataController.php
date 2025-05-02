<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;

class dataController extends Controller
{
    public function data(){
        $buku = buku::all();
        return view('data.info-buku.ttg-buku',['buku'=>$buku]);
    }
}
