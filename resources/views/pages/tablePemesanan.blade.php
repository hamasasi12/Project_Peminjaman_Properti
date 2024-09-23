<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <main>

        <section class="section">
            <div class="container">
                <h3 class="text-center mb-4">Data Pemesan Properti</h3>
                <div class="welcome-box bg-primary p-4 rounded mb-4 text-center shadow-sm">
                    {{-- <h4><i class="bi bi-person-circle"></i> Halo, Selamat Datang <strong>{{ Auth::user()->name }}</strong>!</h4> --}}
                </div>
                
                <div class="d-flex justify-content-between mb-3">
                    <form action="#" method="POST">
                      @csrf
                      <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                    <a href="#" class="btn btn-primary">Register</a>
                </div>
        
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Pemesan</th>
                                <th>No HP</th>
                                <th>Durasi Sewa (Perbulan)</th>
                                <th>jenis_properti</th>
                                <th>Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pesanan as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->nama_pemesan }}</td>
                                <td>{{ $item->no_telp }}</td>
                                <td>{{ $item->durasi_sewa }}</td>
                                <td>{{ $item->jenis_properti }}</td>
                                <td>Rp. {{ $item->jumlah_harga }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <script src="">
        const dicoding = document.queryselectorAll('Hamas');
        const Hamas = document.queryselectorAll('testing');

        let Hamas = [dicoding, Hamas];

        console.log(Hamas);

        function adsas (arrays) {
            return console.log(arrays);
        } adsas('Hamas Akif Sanie');

    </script>
</body>
</html>

!



