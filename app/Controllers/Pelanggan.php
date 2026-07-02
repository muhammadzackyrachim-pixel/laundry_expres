<?php
namespace App\Controllers;
use App\Models\PelangganModel;
use Dompdf\Dompdf;
use Dompdf\Options;

class Pelanggan extends BaseController
{
    protected $pelangganModel;

    public function __construct()
    {
        $this->pelangganModel = new PelangganModel();
    }

    public function index()
    {
        $data['pelanggan'] = $this->pelangganModel->orderBy('id', 'DESC')->findAll();
        return view('pelanggan/index', $data);
    }

    public function create()
    {
        return view('pelanggan/form');
    }

    public function store()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'no_hp' => $this->request->getPost('no_hp'),
            'alamat' => $this->request->getPost('alamat'),
        ];
        $this->pelangganModel->save($data);
        return redirect()->to('/pelanggan')->with('success', 'Data pelanggan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data['pelanggan'] = $this->pelangganModel->find($id);
        if (empty($data['pelanggan'])) {
            return redirect()->to('/pelanggan')->with('error', 'Data tidak ditemukan!');
        }
        return view('pelanggan/form', $data);
    }

    public function update($id)
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'no_hp' => $this->request->getPost('no_hp'),
            'alamat' => $this->request->getPost('alamat'),
        ];
        $this->pelangganModel->update($id, $data);
        return redirect()->to('/pelanggan')->with('success', 'Data pelanggan berhasil diupdate!');
    }

    public function delete($id)
    {
        $this->pelangganModel->delete($id);
        return redirect()->to('/pelanggan')->with('success', 'Data pelanggan berhasil dihapus!');
    }

    // METHOD BARU UNTUK DOWNLOAD PDF
    public function downloadPdf()
    {
        $pelanggan = $this->pelangganModel->orderBy('nama', 'ASC')->findAll();

        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $options->set('defaultFont', 'Arial');
        
        $dompdf = new Dompdf($options);

        $data = ['pelanggan' => $pelanggan];
        $html = view('pelanggan/pdf', $data);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        $dompdf->stream('Data_Pelanggan_Fresh_Laundry_' . date('Y-m-d') . '.pdf', [
            'Attachment' => true
        ]);
        exit;
    }
}