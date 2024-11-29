@extends('layout')

@section('konten')

<table class="table" id="table">
    <thead>
        <tr>
            <td>No</td>
            <td>Nis</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>No Telepon</td>
            <td>Jenis Kelamin</td>
            <td>Hobi</td>
            <td>Aksi</td>
        </tr>
    </thead>

    <script>
        $(document).ready(function () {
            $('#table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('siswa.data')}}',
                columns: [
                    // { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    { data: 'id', name: 'id' },
                    { data: 'nis', name: 'nis' },
                    { data: 'nama', name: 'nama' },
                    { data: 'alamat', name: 'alamat' },
                    { data: 'no_telp', name: 'no_telp' },
                    { data: 'jenis_kelamin', name: 'jenis_kelamin' },
                    { data: 'hobi', name: 'hobi' }
                ]
            }); 
            })
    </script>

    

    {{-- <tbody>
        @foreach($siswa as $no=>$data)
        <tr>
            <td>{{ $no+1 }}</td>
            <td>{{ $data->nis }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->alamat }}</td>
            <td>{{ $data->no_telp }}</td>
            <td>{{ $data->jenis_kelamin }}</td>
            <td>{{ $data->hobi }}</td>
            <td>
                <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('siswa.delete', $data->id) }}" method="post">
                    @csrf
                    <button id="delete" class="btn btn-sm btn-danger">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody> --}}
</table>

@endsection