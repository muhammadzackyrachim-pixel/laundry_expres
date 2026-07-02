<!DOCTYPE html>
<html>
<head>
    <title>Nota Laundry</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; color: #333; }
        .header { text-align: center; margin-bottom: 20px; border-bottom: 2px solid #0056b3; padding-bottom: 10px; }
        .header h2 { margin: 0; color: #0056b3; }
        .info-pelanggan { margin-bottom: 15px; }
        .info-pelanggan p { margin: 3px 0; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        table th, table td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        table th { background-color: #f2f2f2; }
        .total { text-align: right; font-weight: bold; font-size: 14px; }
        .footer { text-align: center; margin-top: 30px; font-size: 10px; color: #777; }
    </style>
</head>
<body>

    <div class="header">
        <h2>FRESH LAUNDRY</h2>
        <p>Jl. Kebersihan No. 45, Semarang | Telp: (024) 7654321</p>
        <h3>NOTA LAYANAN LAUNDRY</h3>
    </div>

    <div class="info-pelanggan">
        <p><strong>No. Transaksi:</strong> #TRX-<?= str_pad($id_transaksi, 5, '0', STR_PAD_LEFT) ?></p>
        <p><strong>Tanggal:</strong> <?= date('d-m-Y H:i') ?></p>
        <p><strong>Nama Pelanggan:</strong> <?= $nama_pelanggan ?></p>
        <p><strong>Alamat:</strong> <?= $alamat_pelanggan ?></p>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Layanan</th>
                <th>Berat (Kg)</th>
                <th>Harga Satuan</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><?= $jenis_layanan ?></td>
                <td><?= $berat_kg ?> Kg</td>
                <td>Rp <?= number_format($harga_satuan, 0, ',', '.') ?></td>
                <td>Rp <?= number_format($total_harga, 0, ',', '.') ?></td>
            </tr>
        </tbody>
    </table>

    <div class="total">
        <p>TOTAL BAYAR: Rp <?= number_format($total_harga, 0, ',', '.') ?></p>
    </div>

    <div class="footer">
        <p>Terima kasih telah menggunakan jasa Fresh Laundry.<br>Barang yang sudah diserahkan tidak dapat ditukar/dikembalikan.</p>
    </div>

</body>
</html>