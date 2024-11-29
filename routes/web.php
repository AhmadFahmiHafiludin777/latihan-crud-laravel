<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/coba', function () {
//     return view('siswa.coba');
// });




Route::get('/siswa', [SiswaController::class, 'tampil'])->name('siswa.tampil');

Route::get('/siswa/tambah', [SiswaController::class, 'tambah'])->name('siswa.tambah');

Route::post('/siswa/submit', [SiswaController::class, 'submit'])->name('siswa.submit');

Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');

Route::post('/siswa/update/{id}', [SiswaController::class, 'update'])->name('siswa.update');

Route::post('/siswa/delete/{id}', [SiswaController::class, 'delete'])->name('siswa.delete');


// Route::get('/siswa', [SiswaController::class, 'coba'])->name(name: 'siswa.coba');

// Route::get('/siswa/coba', action: [SiswaController::class, 'getData'])->name(name: 'siswa.data');
