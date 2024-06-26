<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-
scale=1.0">

    {{-- <title>{{ $pageTitle }}</title> --}}
    @vite('resources/sass/app.scss')
</head>

<body>
    @extends('layouts.app')
    @section('content')
        <div class="container mt-4">
            <div class="row mb-0">
                <div class="col-lg-9 col-xl-10">
                    <h4 class="mb-3">{{ $pageTitle }}</h4>
                </div>
                <div class="col-lg-3 col-xl-2">
                    <div class="d-grid gap-2">
                        <a href="{{ route('barangs.create') }}" class="btn btn-primary">Create Barang</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="table-responsive border p-3 rounded-3">
                <table class="table table-bordered table-hover table-stripedmb-0 bg-white">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Harga</th>
                            <th>Satuan</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barangs as $barang)
                            <tr>
                                <td>{{ $barang->name }}</td>
                                <td>{{ $barang->description }}</td>
                                <td>{{ $barang->harga }}</td>
                                <td>{{ $barang->satuan->name }}</td>
                                <td>@include('barang.actions')</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
    @vite('resources/js/app.js')
</body>

</html>
