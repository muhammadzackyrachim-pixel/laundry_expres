<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard Laundry',
            // Nanti data ini bisa diambil dari Model Database
            'total_pelanggan'     => 120,
            'cucian_proses'       => 15,
            'pendapatan_hari_ini' => 350000 
        ];

        return view('dashboard/index', $data);
    }
}