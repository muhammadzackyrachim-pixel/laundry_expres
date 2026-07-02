<?php
namespace App\Controllers;
use Dompdf\Dompdf;
use Dompdf\Options;

class Laporan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Laporan Pendapatan Kasir'
        ];
        return view('laporan/index', $data);
    }

    // Method untuk generate PDF
    public function cetakNota($id = 1)
    {
        // 1. Konfigurasi Dompdf
        $options = new Options();
        $options->set('isRemoteEnabled', true); // Mengaktifkan gambar dari URL (jika ada)
        $dompdf = new Dompdf($options);

        // 2. Siapkan Data (Nantinya diambil dari Database/Model)
        $data = [
            'id_transaksi'   => $id,
            'nama_pelanggan' => 'Budi Santoso',
            'alamat_pelanggan' => 'Jl. Gatot Subroto No. 88, Jakarta Barat',
            'jenis_layanan'  => 'Cuci Setrika Reguler',
            'berat_kg'       => 3,
            'harga_satuan'   => 6000,
            'total_harga'    => 18000,
        ];

        // 3. Render View ke HTML String
        $html = view('laporan/nota', $data);

        // 4. Load HTML ke Dompdf
        $dompdf->loadHtml($html);

        // 5. Set ukuran kertas dan orientasi
        $dompdf->setPaper('A4', 'portrait');

        // 6. Render PDF
        $dompdf->render();

        // 7. Tampilkan di Browser (Attachment = false) atau Download (Attachment = true)
        $dompdf->stream("Nota_Laundry_" . $id . ".pdf", ["Attachment" => false]);
        exit;
    }
}