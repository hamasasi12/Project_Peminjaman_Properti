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

        <section class="section py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <h5 class="card-title text-center mb-4">Paket 1</h5>
                                <form action="{{ route('pesanan.store') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nama_pemesan" class="form-label">Nama Pemesan</label>
                                        <input type="text" pattern="[A-Za-z\s]*" class="form-control" id="nama_pemesan" name="nama_pemesan" placeholder="Masukkan Nama Anda" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="no_telp" class="form-label">No Telepon</label>
                                        <input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="No HandPhone Anda" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal_pemesanan" class="form-label">Durasi Sewa(bulan)</label>
                                        <input type="number" class="form-control" id="durasi_sewa" name="durasi_sewa" placeholder="Masukkan Durasi Perbulan" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jumlah_produk" class="col-sm-2 col-form-label">Jenis Properti</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" id="divisi" name="jenis_properti" >
                                                <option value="" disabled selected>--Pilih Salah Satu--</option>
                                                <option value="Kamar">Kamar (Rp.500.000)</option>
                                                <option value="Pavilion">Pavilion (Rp.1.000.000)</option>
                                                <option value="Rumah">Rumah (Rp.2.000.000)</option>
                                                <option value="Kios">Kios (Rp.1.500.000)</option>
                                                <option value="Ruko">Ruko (Rp.2.500.000)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                                        <a href="{{ route('bootstrap') }}" class="btn btn-danger"> hitung</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>