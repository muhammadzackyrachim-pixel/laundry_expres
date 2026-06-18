<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table            = 'transaksi_laundry';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama_pelanggan', 'berat_kg', 'total_harga', 'status_cucian'];
    protected $useTimestamps    = true; // Akan otomatis mengisi created_at dan updated_at
}