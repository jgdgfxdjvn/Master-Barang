<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- ACTIONS SECTION --}}
    <div class="d-flex">
        <a href="{{ route('barangs.show', ['barang' => $barang->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi bi-person-lines-fill"></i>Show</a>
        <a href="{{ route('barangs.edit', ['barang' => $barang->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi bi-pencil-square"></i>Edit</a>
        <div>
            <form action="{{ route('barangs.destroy', ['barang' => $barang->id]) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i>Delete</button>
            </form>
        </div>
    </div>

</body>

</html>
