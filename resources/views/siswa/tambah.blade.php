@extends('layout')

@section('konten')
<h4>Tambah Siswa</h4>

<form action="{{ route('siswa.submit') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label>NIS</label>
    <input type="number" name="nis" class="form-control mb-2">
    <label">Nama</label>
    <input type="text" name="nama" class="form-control mb-2">
    <label">Alamat</label>
    <input type="text" name="alamat" class="form-control mb-2">
    <label">Nomor HP</label>
    <input type="text" name="no_telp" class="form-control mb-2">
    <label">Jenis Kelamin</label>
    <input type="text" name="jenis_kelamin" class="form-control mb-2">
    <label">Hobi</label>
    <input type="text" name="hobi" class="form-control mb-2">
    <label for="image">Image:</label>
    <input type="file" name="image" id="image">

    <button id="tambah" class="btn btn-primary">Tambah</button>
</form>
    
@endsection