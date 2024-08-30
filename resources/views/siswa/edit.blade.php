@extends('layout')

@section('konten')
<h4>Edit Siswa</h4>

<form action="{{ route('siswa.update', $siswa->id) }}" method="post">
    @csrf
    <label>NIS</label>
    <input type="number" name="nis" class="form-control mb-2" value="{{ $siswa->nis }}">
    <label">Nama</label>
    <input type="text" name="nama" class="form-control mb-2" value="{{ $siswa->nama }}">
    <label">Alamat</label>
    <input type="text" name="alamat" class="form-control mb-2" value="{{ $siswa->alamat }}">
    <label">Nomor HP</label>
    <input type="text" name="no_telp" class="form-control mb-2" value="{{ $siswa->no_telp }}">
    <label">Jenis Kelamin</label>
    <input type="text" name="jenis_kelamin" class="form-control mb-2" value="{{ $siswa->jenis_kelamin }}">
    <label">Hobi</label>
    <input type="text" name="hobi" class="form-control mb-2" value="{{ $siswa->hobi }}">

    <button class="btn btn-primary">Edit</button>
</form>
    
@endsection