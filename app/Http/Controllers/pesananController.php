<?php

namespace App\Http\Controllers;

use App\Models\pesanan;
use Illuminate\Http\Request;

class pesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = pesanan::latest()->get();
        return view('pages.tablePemesanan', compact('pesanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemesan' =>'required',
            'no_telp' =>'required',
            'durasi_sewa' =>'required',
            'jenis_properti' =>'nullable',
            'jumlah_harga' =>'nullable',
        ]);
            $data = $request->all();

    //        if ($data['jenis_properti'] = 'Kamar') {
    //             $jumlah_harga = $data['durasi_sewa'] * 500000; 
    //             $data['jumlah_harga'] = $jumlah_harga;

    //        }else if ($data['jenis_properti'] = 'Pavilion') {
    //             $jumlah_harga = $data['durasi_sewa'] * 1000000;
    //             $data['jumlah_harga'] = $jumlah_harga;

    //        }else if ($data['jenis_properti'] = 'Rumah') {
    //             $jumlah_harga = $data['durasi_sewa'] * 2000000; 
    //             $data['jumlah_harga'] = $jumlah_harga;

    //        }else if ($data['jenis_properti'] = 'Kios') {
    //             $jumlah_harga = $data['durasi_sewa'] * 2500000; 
    //             $data['jumlah_harga'] = $jumlah_harga;

    //        }else if ($data['jenis_properti'] = 'Ruko') {
    //         $jumlah_harga = $data['durasi_sewa'] * 2500000; 
    //         $data['jumlah_harga'] = $jumlah_harga;
    //    }; 

       switch($data['jenis_properti']) {
        case "Kamar":
            $jumlah_harga = $data['durasi_sewa'] * 500000;
            break;

        case "Pavilion":
            $jumlah_harga = $data['durasi_sewa'] * 1000000;
            break;
        
        case "Rumah":
            $jumlah_harga = $data['durasi_sewa'] * 2000000; 
            break;

        case "Kios":
            $jumlah_harga = $data['durasi_sewa'] * 1500000;
            break;

        case "Ruko":
            $jumlah_harga = $data['durasi_sewa'] * 2500000;
            break;
       }
            $data['jumlah_harga'] = $jumlah_harga;

           

            // pesanan::create($request->all());
            Pesanan::create($data);

            return redirect()->route('pesanan.index')->with('success', 'Data Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
