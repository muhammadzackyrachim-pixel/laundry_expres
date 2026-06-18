<?php

namespace App\Controllers;

class Laporan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Laporan Pendapatan Kasir'
        ];

        return view('laporan/index', $data);
    }
}