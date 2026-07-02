<?php
namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table            = 'transaksi_laundry';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'nama_pelanggan',
        'no_hp',
        'alamat',
        'jenis_layanan',
        'berat_kg',
        'harga_satuan',
        'total_harga',
        'status_cucian',
        'catatan',
        'tanggal_selesai',
        'tanggal_diambil'
    ];
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
}