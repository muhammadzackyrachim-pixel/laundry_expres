<?php

namespace App\Controllers;

use App\Models\TransaksiModel;

class Laundry extends BaseController
{
    protected $transaksiModel;

    public function __construct()
    {
        $this->transaksiModel = new TransaksiModel();
    }

    // Menampilkan daftar transaksi
    public function index()
    {
        $data = [
            'title'     => 'Daftar Transaksi Laundry',
            'transaksi' => $this->transaksiModel->findAll()
        ];

        // Memanggil file view dan mengirimkan data
        return view('laundry/index', $data);
    }

    // Menampilkan form tambah transaksi
    public function create()
    {
        $data = ['title' => 'Tambah Transaksi Baru'];
        return view('laundry/create', $data);
    }

    // Menyimpan data transaksi dari form
    public function save()
    {
        // Misal: Harga per KG adalah Rp 6.000
        $harga_per_kg = 6000;
        $berat = $this->request->getVar('berat_kg');
        $total_harga = $berat * $harga_per_kg;

        $this->transaksiModel->save([
            'nama_pelanggan' => $this->request->getVar('nama_pelanggan'),
            'berat_kg'       => $berat,
            'total_harga'    => $total_harga,
            'status_cucian'  => 'Baru'
        ]);

        return redirect()->to('/laundry');
    }
}