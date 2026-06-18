<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PelangganSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'    => 'Ahmad Rizki Pratama',
                'no_hp'   => '081234567890',
                'alamat'  => 'Jl. Merdeka No. 45, Jakarta Pusat',
            ],
            [
                'nama'    => 'Siti Nurhaliza',
                'no_hp'   => '081234567891',
                'alamat'  => 'Jl. Sudirman No. 123, Jakarta Selatan',
            ],
            [
                'nama'    => 'Budi Santoso',
                'no_hp'   => '081234567892',
                'alamat'  => 'Jl. Gatot Subroto No. 88, Jakarta Barat',
            ],
            [
                'nama'    => 'Dewi Lestari',
                'no_hp'   => '081234567893',
                'alamat'  => 'Jl. Thamrin No. 56, Jakarta Pusat',
            ],
            [
                'nama'    => 'Eko Prasetyo',
                'no_hp'   => '081234567894',
                'alamat'  => 'Jl. Rasuna Said No. 34, Jakarta Selatan',
            ],
            [
                'nama'    => 'Fitri Handayani',
                'no_hp'   => '081234567895',
                'alamat'  => 'Jl. Kuningan No. 78, Jakarta Selatan',
            ],
            [
                'nama'    => 'Gunawan Wijaya',
                'no_hp'   => '081234567896',
                'alamat'  => 'Jl. Gajah Mada No. 92, Jakarta Barat',
            ],
            [
                'nama'    => 'Hana Pertiwi',
                'no_hp'   => '081234567897',
                'alamat'  => 'Jl. Hayam Wuruk No. 15, Jakarta Pusat',
            ],
            [
                'nama'    => 'Indra Kusuma',
                'no_hp'   => '081234567898',
                'alamat'  => 'Jl. Menteng Raya No. 67, Jakarta Pusat',
            ],
            [
                'nama'    => 'Joko Widodo',
                'no_hp'   => '081234567899',
                'alamat'  => 'Jl. Senayan No. 23, Jakarta Selatan',
            ],
            [
                'nama'    => 'Kartika Sari',
                'no_hp'   => '081234567800',
                'alamat'  => 'Jl. Kebayoran Lama No. 45, Jakarta Selatan',
            ],
            [
                'nama'    => 'Lukman Hakim',
                'no_hp'   => '081234567801',
                'alamat'  => 'Jl. Fatmawati No. 89, Jakarta Selatan',
            ],
            [
                'nama'    => 'Maya Anggraini',
                'no_hp'   => '081234567802',
                'alamat'  => 'Jl. Pondok Indah No. 12, Jakarta Selatan',
            ],
            [
                'nama'    => 'Nurul Hidayah',
                'no_hp'   => '081234567803',
                'alamat'  => 'Jl. Cilandak No. 34, Jakarta Selatan',
            ],
            [
                'nama'    => 'Oki Setiana',
                'no_hp'   => '081234567804',
                'alamat'  => 'Jl. Lebak Bulus No. 56, Jakarta Selatan',
            ],
            [
                'nama'    => 'Putri Wijayanti',
                'no_hp'   => '081234567805',
                'alamat'  => 'Jl. Ciputat No. 78, Jakarta Selatan',
            ],
            [
                'nama'    => 'Rudi Hartono',
                'no_hp'   => '081234567806',
                'alamat'  => 'Jl. Pamulang No. 90, Tangerang Selatan',
            ],
            [
                'nama'    => 'Sri Mulyani',
                'no_hp'   => '081234567807',
                'alamat'  => 'Jl. Serpong No. 11, Tangerang Selatan',
            ],
            [
                'nama'    => 'Teguh Santoso',
                'no_hp'   => '081234567808',
                'alamat'  => 'Jl. BSD No. 22, Tangerang',
            ],
            [
                'nama'    => 'Utami Dewi',
                'no_hp'   => '081234567809',
                'alamat'  => 'Jl. Alam Sutera No. 33, Tangerang',
            ],
        ];

        $this->db->table('pelanggan')->insertBatch($data);
    }
}