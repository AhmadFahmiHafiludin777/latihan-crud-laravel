<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Laravel</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('bootstrap/css//bootstrap.css') }}">
</head>
<body>
    <h1 class="text-center mt-3">Selamat Datang di Aplikasi CRUD Laravel</h1>

    <div class="text-center">
        <a href="/siswa" class="btn btn-primary">Kelola Siswa</a>

    </div>

    <div class="text-center">
        <a href="/siswa" class="btn btn-warning mt-4">Client Side</a>

    </div>

</body>
</html>