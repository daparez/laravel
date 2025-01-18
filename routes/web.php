<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//routes buku
route::get('admin/buku/tampil',[App\Http\Controllers\BukuController::class,'tampil'])->name('admin.buku.tampil');
route::get('admin/buku/tambah',[App\Http\Controllers\BukuController::class,'tambah'])->name('admin.buku.tambah');
route::get('admin/buku/edit/{id}',[App\Http\Controllers\BukuController::class,'edit'])->name('admin.buku.edit');
route::post('admin/buku/tampil',[App\Http\Controllers\BukuController::class,'post'])->name('admin.buku.post');
route::get('/admin/buku/tampil/delete/{id}',[App\Http\Controllers\BukuController::class,'delete']);

route::get('admin/judul/tampil',[App\Http\Controllers\JudulController::class,'tampil'])->name('admin.judul.tampil');
route::get('admin/judul/tambah',[App\Http\Controllers\JudulController::class,'tambah'])->name('admin.judul.tambah');
route::get('admin/judul/edit/{id}',[App\Http\Controllers\JudulController::class,'edit'])->name('admin.judul.edit');
route::post('admin/judul/tampil',[App\Http\Controllers\JudulController::class,'post'])->name('admin.judul.post');
route::get('/admin/judul/tampil/delete/{id}',[App\Http\Controllers\JudulController::class,'delete']);

route::get('admin/penulis/tampil',[App\Http\Controllers\PenulislController::class,'tampil'])->name('admin.penulis.tampil');
route::get('admin/penulis/tambah',[App\Http\Controllers\PenulislController::class,'tambah'])->name('admin.penulis.tambah');
route::get('admin/penulis/edit/{id}',[App\Http\Controllers\PenulislController::class,'edit'])->name('admin.penulis.edit');
route::post('admin/penulis/tampil',[App\Http\Controllers\PenulislController::class,'post'])->name('admin.penulis.post');
route::get('/admin/penulis/tampil/delete/{id}',[App\Http\Controllers\PenulislController::class,'delete']);

route::get('admin/terbit/tampil',[App\Http\Controllers\TerbitlController::class,'tampil'])->name('admin.terbit.tampil');
route::get('admin/terbit/tambah',[App\Http\Controllers\TerbitlController::class,'tambah'])->name('admin.tebit.tambah');
route::get('admin/terbit/edit/{id}',[App\Http\Controllers\TerbitlController::class,'edit'])->name('admin.terbit.edit');
route::post('admin/terbit/tampil',[App\Http\Controllers\TerbitlController::class,'post'])->name('admin.terbit.post');
route::get('/admin/terbit/tampil/delete/{id}',[App\Http\Controllers\TerbitlController::class,'delete']);
 