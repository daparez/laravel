<?php

namespace App\Http\Controllers;
use App\Models\Terbit;
use Illuminate\Http\Request;

class dataaaController extends Controller
{
    public function data(){
        $terbit = terbit::all();
        return view('data.info-terbit.ttg-terbit',['terbit'=>$terbit]);
    }
}
