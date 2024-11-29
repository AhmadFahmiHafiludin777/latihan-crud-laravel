<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Laravel</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    {{-- boostrap 5 --}}
    {{-- <link href="https://cdn.datatables.net/v/bs5/dt-2.1.6/datatables.min.css" rel="stylesheet"> --}}
    {{-- datatable --}}
    <link href="https://cdn.datatables.net/v/dt/dt-2.1.6/datatables.min.css" rel="stylesheet">
    {{-- fomantic  --}}
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.8.8/semantic.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/v/se/dt-2.1.6/datatables.min.css" rel="stylesheet"> --}}


</head>
<body>
    <h1 class="text-center mt-3">CRUD Siswa dengan Laravel</h1>

    <div class="mt-3 container">
        @yield('konten')
    </div>

    <!-- Load jQuery if not already loaded -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(function() {
            $(document).on('click', '#delete', function(e){
                e.preventDefault();
                var form = $(this).closest("form"); // Cari form yang terkait

                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); // Submit form jika dikonfirmasi
                    }
                });
            });
        });


        // $(function() {
        //     $(document).on('click', '#tambah', function(e){
        //         e.preventDefault();
        //         var form = $(this).closest("form");

        //         const Toast = Swal.mixin({
        //             toast: true,
        //             position: "top-end",
        //             showConfirmButton: false,
        //             timer: 3000,
        //             timerProgressBar: true,
        //             didOpen: (toast) => {
        //                 toast.onmouseenter = Swal.stopTimer;
        //                 toast.onmouseleave = Swal.resumeTimer;
        //             }
        //             });
        //             Toast.fire({
        //             icon: "success",
        //             title: "Signed in successfully"
        //             });
            
            })})
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- boostrap 5 --}}
    {{-- <script src="https://cdn.datatables.net/v/bs5/dt-2.1.6/datatables.min.js"></script> --}}
    {{-- datatable --}}
    <script src="https://cdn.datatables.net/v/dt/dt-2.1.6/datatables.min.js"></script>
    {{-- fomantic --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.8.8/semantic.min.js"></script>
    <script src="https://cdn.datatables.net/v/se/dt-2.1.6/datatables.min.js"></script> --}}

    {{-- <script>
        $(document).ready(function () {
            $('#table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('siswa.coba')}}',
                columns: [
                    // { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    { data: 'id', name: 'id' },
                    { data: 'nis', name: 'nis' },
                    { data: 'nama', name: 'nama' },
                    { data: 'alamat', name: 'alamat' },
                    { data: 'no_telp', name: 'no_telp' },
                    { data: 'jenis_kelamin', name: 'jenis_kelamin' }
                    { data: 'hobi', name: 'hobi' }
                ]
            }); 
            })
    </script> --}}


</body>
</html>
