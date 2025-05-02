<?php

namespace App\Http\Controllers;
use App\Models\Penulis;
use Illuminate\Http\Request;

class dataaController extends Controller
{
    public function data(){
        $penulis = penulis::all();
        return view('data.info-penulis.ttg-penulis',['penulis'=>$penulis]);
    }
}
