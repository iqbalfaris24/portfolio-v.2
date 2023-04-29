<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Iqbal Faris Akbar</title>
    @include('includes.style')
    <!-- Styles -->

</head>

<body style="background: #525252;">

    @include('includes.navbarpesan')
    <div class="container" style="margin-top: 120px;  min-height:100vh;">
        @if (session('success'))
            <div class="alert alert-danger" role="alert">
                Data Berhasil Dihapus!
            </div>
        @endif
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Pesan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->message }}</td>
                        <td>
                            <a href="{{ url('/pesan/delete/' . $item->id) }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('includes.footer')

</body>
