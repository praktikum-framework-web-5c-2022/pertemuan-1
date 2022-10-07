<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="display-1">Hallo, ini halaman store</h2>
        @
        <ol>
            @forelse ($products as $product)
                <li>{{$product}}</li>
            @empty
                <div class="alert alert-danger">
                    Tidak Ada data
                </div>
            @endforelse
        </ol>

    </div>

    {{-- <div class="container mt-4 text-center py-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ $kode_produk }}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ $nama_produk }}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ $harga }}
        </h1>
        <br>

        @if ($harga <= 200000)
            <div class="alert alert-danger d-inline-block">
                Harga terlalu mahal
            </div>
        @else
            <div class="alert alert-success d-inline-block">
                Harga terlalu murah
            </div>
        @endif

    </div> --}}


</body>
</html>
