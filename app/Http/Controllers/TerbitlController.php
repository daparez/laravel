<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terbit;
class TerbitlController extends Controller
{
    public function tampil()
    {
        $terbit = terbit::all();
    return view('admin.terbit.tampil' , compact('terbit'));
}   
    public function tambah()
    {
        return view('admin.terbit.tambah');
}
    public function edit($id)
{
    $terbit = terbit::findOrFail($id);
    return view('admin.terbit.edit', compact('terbit'));
}

    public function post(Request $request)
{
  

    $id = $request->get('id');
    if($id)
    {
        $terbit = terbit::find($id);
    }else {
    
        $terbit = new terbit;   
    }

    $terbit->buku=$request->get('buku');
    $terbit->judul=$request->get('judul');
    $terbit->penulis=$request->get('penulis');
    $terbit->terbit=$request->get('terbit');
    $terbit->save();
    return redirect()->route('admin.terbit.tampil');
}
    public function delete($id)
{
    $terbit = terbit::findOrFail($id);
    $terbit->delete();
    
    return redirect()->route('admin.terbit.tampil');
}

}
