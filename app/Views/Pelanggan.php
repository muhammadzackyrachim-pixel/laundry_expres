<?php

namespace App\Controllers;

use App\Models\PelangganModel; // Sesuaikan dengan nama Model Anda
use Dompdf\Dompdf;
use Dompdf\Options;

class Pelanggan extends BaseController
{
    protected $pelangganModel;

    public function __construct()
    {
        
        $this->pelangganModel = new PelangganModel();
    }

    public function downloadPdf()
    {
        
        $data = [
            'title'     => 'Daftar Pelanggan Laundry',
            'pelanggan' => $this->pelangganModel->findAll() 
        ];

       
        $html = view('pelanggan/pdf', $data);

        $options = new Options();
        $options->set('isRemoteEnabled', true); 
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        
        $dompdf->stream("Data_Pelanggan.pdf", ["Attachment" => true]);
    }
}