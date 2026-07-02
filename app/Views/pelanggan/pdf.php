<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Pelanggan - Fresh Laundry</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            font-size: 12px; 
            color: #333; 
            margin: 20px; 
        }
        .header { 
            text-align: center; 
            margin-bottom: 30px; 
            border-bottom: 3px solid #0056b3; 
            padding-bottom: 15px; 
        }
        .header h2 { 
            margin: 0; 
            color: #0056b3; 
            font-size: 24px; 
        }
        .header p { 
            margin: 5px 0; 
            color: #666; 
        }
        .info { 
            margin-bottom: 20px; 
            font-size: 11px; 
            color: #666; 
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 10px; 
        }
        table thead { 
            background-color: #0056b3; 
            color: white; 
        }
        table th, table td { 
            border: 1px solid #ddd; 
            padding: 8px; 
            text-align: left; 
        }
        table th { 
            font-weight: bold; 
            font-size: 12px; 
        }
        table tbody tr:nth-child(even) { 
            background-color: #f9f9f9; 
        }
        .footer { 
            margin-top: 30px; 
            text-align: center; 
            font-size: 10px; 
            color: #999; 
            border-top: 1px solid #ddd; 
            padding-top: 10px; 
        }
        .no {
            width: 5%;
            text-align: center;
        }
        .nama {
            width: 30%;
        }
        .nohp {
            width: 25%;
        }
        .alamat {
            width: 40%;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>FRESH LAUNDRY</h2>
        <p>Jl. Kebersihan No. 45, Semarang | Telp: (024) 7654321</p>
        <h3 style="margin-top: 15px; color: #333;">DATA PELANGGAN</h3>
    </div>
    
    <div class="info">
        <p><strong>Tanggal Cetak:</strong> <?= $tanggal_cetak ?></p>
        <p><strong>Total Pelanggan:</strong> <?= count($pelanggan) ?> orang</p>
    </div>

    <table>
        <thead>
            <tr>
                <th class="no">No</th>
                <th class="nama">Nama</th>
                <th class="nohp">No. HP</th>
                <th class="alamat">Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if (!empty($pelanggan)):
                $no = 1; 
                foreach ($pelanggan as $p): 
            ?>
            <tr>
                <td class="no"><?= $no++ ?></td>
                <td><?= esc($p['nama']) ?></td>
                <td><?= esc($p['no_hp']) ?></td>
                <td><?= esc($p['alamat']) ?></td>
            </tr>
            <?php 
                endforeach; 
            else:
            ?>
            <tr>
                <td colspan="4" style="text-align: center;">Tidak ada data pelanggan</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <div class="footer">
        <p>Dokumen ini dicetak secara otomatis oleh Sistem Informasi Fresh Laundry</p>
        <p>&copy; <?= date('Y') ?> Fresh Laundry. All Rights Reserved.</p>
    </div>
</body>
</html>