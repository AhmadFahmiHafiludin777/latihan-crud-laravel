<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SiswaController extends Controller
{
    function tampil() {
        $siswa = Siswa::get();
        return view('siswa.tampil', compact('siswa'));
        
    }

    function coba() {
        // $siswa = Siswa::get();
        return view('siswa.coba');
    }

    public function getData() {
        $siswa = Siswa::select(['id', 'nis', 'nama', 'alamat', 'no_telp', 'jenis_kelamin', 'hobi']);
    
        return DataTables::of($siswa)->addIndexColumn()->make(true);
    }

    function tambah() {
        return view('siswa.tambah');
        
    }

    function submit(Request $request)  {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $siswa = new Siswa();
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->no_telp = $request->no_telp;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->hobi = $request->hobi;
        $siswa->image = 'images/'.$imageName;
        $siswa->save();

        return redirect()->route('siswa.tampil');

        
    }

    function edit($id) {
        $siswa = Siswa::find($id);
        return view('siswa.edit', compact('siswa'));
        
    }

    function update(Request $request, $id) {
        $siswa = Siswa::find($id);
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->no_telp = $request->no_telp;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->hobi = $request->hobi;
        $siswa->update();

        return redirect()->route('siswa.tampil');
    }

    function delete($id) {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect()->route('siswa.tampil');

    }
}
