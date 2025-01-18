<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\judul;

class judulController extends Controller
{
    
    public function tampil()
    {
        $judul = judul::all();
    return view('admin.judul.tampil' , compact('judul'));
}   
    public function tambah()
    {
        return view('admin.judul.tambah');
}
    public function edit($id)
{
    $judul = judul::findOrFail($id);
    return view('admin.judul.edit', compact('judul'));
}

    public function post(Request $request)
{
  

    $id = $request->get('id');
    if($id)
    {
        $judul = judul::find($id);
    }else {
    
        $judul = new judul;   
    }

    $judul->buku=$request->get('buku');
    $judul->judul=$request->get('judul');
    $judul->penulis=$request->get('penulis');
    $judul->terbit=$request->get('terbit');
    $judul->save();
    return redirect()->route('admin.judul.tampil');
}
    public function delete($id)
{
    $judul = judul::findOrFail($id);
    $judul->delete();
    
    return redirect()->route('admin.judul.tampil');
}

          

}
