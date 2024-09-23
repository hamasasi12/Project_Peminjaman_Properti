@extends('layouts.master-layout')

@section('title', 'Form Pemesanan')

@section('content')
    
<section class="section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">Paket 1</h5>
                        <form action="{{ route('PaketSatu.store') }}" method="post">
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
                                <label for="tanggal_pemesanan" class="form-label">Tanggal Pemesanan</label>
                                <input type="date" class="form-control" id="tanggal_pemesanan" name="tanggal_pemesanan" required>
                            </div>
                            <div class="mb-3">
                                <label for="waktu" class="form-label">Waktu Pemesanan</label>
                                <input type="time" class="form-control" id="waktu" name="waktu" required>
                            </div>
                            <div class="mb-3">
                                <label for="pelayanan_paket" class="form-label">Pelayanan Paket</label>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="paket1" name="pelayanan_paket[]" value="1000000">
                                    <label class="form-check-label" for="paket1">Penginapan - Rp 1.000.000</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="paket2" name="pelayanan_paket[]" value="1200000">
                                    <label class="form-check-label" for="paket2">Transportasi - Rp 1.200.000</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="paket3" name="pelayanan_paket[]" value="500000">
                                    <label class="form-check-label" for="paket3">Makan - Rp 500.000</label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
                                <input type="number" class="form-control" id="jumlah_peserta" name="jumlah_peserta" placeholder="Masukkan Jumlah Peserta Paket Wisata" required>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Tambah Data</button>
                                <a href="{{ route('WelcomePage') }}" class="btn btn-secondary"> Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection