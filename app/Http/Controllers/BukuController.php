<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
class BukuController extends Controller
{
    
    
        public function tampil()
        {
            $buku = buku::all();
        return view('admin.buku.tampil' , compact('buku'));
    }   
        public function tambah()
        {
            return view('admin.buku.tambah');
    }
        public function edit($id)
    {
        $buku = buku::findOrFail($id);
        return view('admin.buku.edit', compact('buku'));
    }

        public function post(Request $request)
    {
      

        $id = $request->get('id');
        if($id)
        {
            $buku = buku::find($id);
        }else {
        
            $buku = new buku;   
        }

        $buku->buku=$request->get('buku');
        $buku->judul=$request->get('judul');
        $buku->penulis=$request->get('penulis');
        $buku->terbit=$request->get('terbit');
        $buku->save();
        return redirect()->route('admin.buku.tampil');
    }
        public function delete($id)
    {
        $buku = buku::findOrFail($id);
        $buku->delete();
        
        return redirect()->route('admin.buku.tampil');
    }
   
              

}
