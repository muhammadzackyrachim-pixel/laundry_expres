<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <style>
        body { font-family: sans-serif; font-size: 14px; color: #333; }
        h2 { text-align: center; margin-bottom: 5px; }
        p.periode { text-align: center; color: #666; margin-bottom: 30px; }
        .summary-box { 
            width: 48%; 
            float: left; 
            border: 1px solid #ddd; 
            padding: 15px; 
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        .summary-box:nth-child(odd) { margin-right: 4%; }
        .box-title { font-size: 12px; color: #777; margin-bottom: 10px; }
        .box-value { font-size: 24px; font-weight: bold; }
        .clearfix::after { content: ""; clear: both; display: table; }
    </style>
</head>
<body>

    <h2><?= $title ?></h2>
    <p class="periode">Periode: <?= $periode ?></p>

    <div class="clearfix">
        <div class="summary-box">
            <div class="box-title">Total Pendapatan</div>
            <div class="box-value">Rp <?= number_format($total_pendapatan, 0, ',', '.') ?></div>
        </div>

        <div class="summary-box">
            <div class="box-title">Total Transaksi</div>
            <div class="box-value"><?= $total_transaksi ?></div>
        </div>

        <div class="summary-box">
            <div class="box-title">Total Pelanggan (Aktif)</div>
            <div class="box-value"><?= $total_pelanggan ?></div>
        </div>

        <div class="summary-box">
            <div class="box-title">Rata-rata Transaksi</div>
            <div class="box-value">Rp <?= number_format($rata_transaksi, 0, ',', '.') ?></div>
        </div>
    </div>

</body>
</html>