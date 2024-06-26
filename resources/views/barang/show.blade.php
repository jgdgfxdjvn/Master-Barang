<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    @extends('layouts.app')
    @section('content')
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Detail Barang</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="name" class="form-label">Name</label>
                        <h5>{{ $barang->name }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="description" class="form-label">Description</label>
                        <h5>{{ $barang->description }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <h5>{{ $barang->harga }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="satuan" class="formlabel">Satuan</label>
                        <h5>{{ $barang->satuan->name }}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('barangs.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                class="bi-arrow-left-circleme-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @vite('resources/js/app.js')
</body>

</html>
