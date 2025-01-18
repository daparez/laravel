<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penulis;
class PenulislController extends Controller
{
    
    public function tampil()
    {
        $penulis = penulis::all();
    return view('admin.penulis.tampil' , compact('penulis'));
}   
    public function tambah()
    {
        return view('admin.penulis.tambah');
}
    public function edit($id)
{
    $penulis = penulis::findOrFail($id);
    return view('admin.penulis.edit', compact('penulis'));
}

    public function post(Request $request)
{
  

    $id = $request->get('id');
    if($id)
    {
        $penulis = penulis::find($id);
    }else {
    
        $penulis = new penulis;   
    }

    $penulis->buku=$request->get('buku');
    $penulis->judul=$request->get('judul');
    $penulis->penulis=$request->get('penulis');
    $penulis->terbit=$request->get('terbit');
    $penulis->save();
    return redirect()->route('admin.penulis.tampil');
}
    public function delete($id)
{
    $penulis = penulis::findOrFail($id);
    $penulis->delete();
    
    return redirect()->route('admin.penulis.tampil');
}

}
 