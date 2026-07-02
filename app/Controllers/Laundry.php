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

    public function index()
    {
        $data = [
            'title'     => 'Daftar Transaksi Laundry',
            'transaksi' => $this->transaksiModel->orderBy('created_at', 'DESC')->findAll()
        ];
        return view('laundry/index', $data);
    }

    public function create()
    {
        $data = ['title' => 'Tambah Transaksi Baru'];
        return view('laundry/create', $data);
    }

    public function store()
    {
        // Validasi
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama_pelanggan' => 'required|min_length[3]',
            'berat_kg'       => 'required|numeric|greater_than[0]',
            'jenis_layanan'  => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Hitung total harga
        $hargaPerKg = 6000; // Harga default
        $berat = $this->request->getPost('berat_kg');
        $totalHarga = $berat * $hargaPerKg;

        $this->transaksiModel->save([
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'no_hp'          => $this->request->getPost('no_hp'),
            'alamat'         => $this->request->getPost('alamat'),
            'jenis_layanan'  => $this->request->getPost('jenis_layanan'),
            'berat_kg'       => $berat,
            'harga_satuan'   => $hargaPerKg,
            'total_harga'    => $totalHarga,
            'status_cucian'  => 'Baru',
            'catatan'        => $this->request->getPost('catatan')
        ]);

        return redirect()->to('/transaksi')->with('success', 'Transaksi berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data = [
            'title'      => 'Edit Transaksi',
            'transaksi'  => $this->transaksiModel->find($id)
        ];
        
        if (empty($data['transaksi'])) {
            return redirect()->to('/transaksi')->with('error', 'Transaksi tidak ditemukan!');
        }
        
        return view('laundry/edit', $data);
    }

    public function update($id)
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama_pelanggan' => 'required|min_length[3]',
            'berat_kg'       => 'required|numeric|greater_than[0]',
            'status_cucian'  => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $hargaPerKg = 6000;
        $berat = $this->request->getPost('berat_kg');
        $totalHarga = $berat * $hargaPerKg;

        $this->transaksiModel->update($id, [
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'no_hp'          => $this->request->getPost('no_hp'),
            'alamat'         => $this->request->getPost('alamat'),
            'jenis_layanan'  => $this->request->getPost('jenis_layanan'),
            'berat_kg'       => $berat,
            'total_harga'    => $totalHarga,
            'status_cucian'  => $this->request->getPost('status_cucian'),
            'catatan'        => $this->request->getPost('catatan')
        ]);

        return redirect()->to('/transaksi')->with('success', 'Transaksi berhasil diupdate!');
    }

    public function delete($id)
    {
        $this->transaksiModel->delete($id);
        return redirect()->to('/transaksi')->with('success', 'Transaksi berhasil dihapus!');
    }

    public function view($id)
    {
        $data = [
            'title'     => 'Detail Transaksi',
            'transaksi' => $this->transaksiModel->find($id)
        ];
        
        if (empty($data['transaksi'])) {
            return redirect()->to('/transaksi')->with('error', 'Transaksi tidak ditemukan!');
        }
        
        return view('laundry/detail', $data);
    }

    // Update status transaksi
    public function updateStatus($id)
    {
        $status = $this->request->getPost('status');
        $allowedStatus = ['Baru', 'Proses', 'Selesai', 'Diambil'];
        
        if (!in_array($status, $allowedStatus)) {
            return redirect()->back()->with('error', 'Status tidak valid!');
        }

        $this->transaksiModel->update($id, ['status_cucian' => $status]);
        return redirect()->back()->with('success', 'Status berhasil diupdate!');
    }
}