<?= $this->extend('layout') ?>
<?= $this->section('title') ?>Laporan<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="pagetitle">
    <h1>Laporan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Laporan</li>
        </ol>
    </nav>
</div>

<section class="section">
    <!-- Filter Section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Filter Laporan</h5>
                    <form class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">Tanggal Mulai</label>
                            <input type="date" class="form-control" name="tanggal_mulai">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Tanggal Akhir</label>
                            <input type="date" class="form-control" name="tanggal_akhir">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Jenis Laporan</label>
                            <select class="form-select" name="jenis_laporan">
                                <option value="semua">Semua Laporan</option>
                                <option value="transaksi">Transaksi</option>
                                <option value="pendapatan">Pendapatan</option>
                                <option value="pelanggan">Pelanggan</option>
                            </select>
                        </div>
                        <div class="col-md-3 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary me-2">
                                <i class="bi bi-search me-1"></i> Filter
                            </button>
                            <button type="button" class="btn btn-success" onclick="exportPDF()">
                                <i class="bi bi-file-pdf me-1"></i> Export PDF
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Summary Cards -->
    <div class="row mb-4">
        <div class="col-xl-3 col-md-6">
            <div class="card info-card revenue-card">
                <div class="card-body">
                    <h5 class="card-title">Total Pendapatan <span>| Bulan Ini</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                        <div class="ps-3">
                            <h6>Rp 2.500.000</h6>
                            <span class="text-success small pt-1 fw-bold">12%</span>
                            <span class="text-muted small pt-2 ps-1">dari bulan lalu</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Total Transaksi <span>| Bulan Ini</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-cart-check"></i>
                        </div>
                        <div class="ps-3">
                            <h6>125</h6>
                            <span class="text-success small pt-1 fw-bold">8%</span>
                            <span class="text-muted small pt-2 ps-1">dari bulan lalu</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">Total Pelanggan <span>| Aktif</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                            <h6>85</h6>
                            <span class="text-success small pt-1 fw-bold">5%</span>
                            <span class="text-muted small pt-2 ps-1">pelanggan baru</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card info-card" style="border-top: 4px solid #ffc107 !important;">
                <div class="card-body">
                    <h5 class="card-title">Rata-rata Transaksi <span>| Per Hari</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="color: #ffc107; background: #fff3cd;">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <div class="ps-3">
                            <h6>Rp 125.000</h6>
                            <span class="text-muted small pt-2 ps-1">per transaksi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Transactions Table -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Transaksi Terbaru</h5>
                    <div class="table-responsive">
                        <table class="table table-hover datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>No. Transaksi</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Layanan</th>
                                    <th>Berat (kg)</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>02 Jul 2026</td>
                                    <td>#TRX001</td>
                                    <td>Ahmad Rizki</td>
                                    <td>Cuci Setrika Reguler</td>
                                    <td>3.5</td>
                                    <td>Rp 21.000</td>
                                    <td><span class="badge bg-success">Selesai</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-info" onclick="cetakNota('#TRX001')" title="Cetak Nota">
                                            <i class="bi bi-printer"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>02 Jul 2026</td>
                                    <td>#TRX002</td>
                                    <td>Siti Nurhaliza</td>
                                    <td>Laundry Express</td>
                                    <td>2.0</td>
                                    <td>Rp 20.000</td>
                                    <td><span class="badge bg-warning text-dark">Proses</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-info" onclick="cetakNota('#TRX002')" title="Cetak Nota">
                                            <i class="bi bi-printer"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>01 Jul 2026</td>
                                    <td>#TRX003</td>
                                    <td>Budi Santoso</td>
                                    <td>Cuci Setrika Reguler</td>
                                    <td>5.0</td>
                                    <td>Rp 30.000</td>
                                    <td><span class="badge bg-success">Selesai</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-info" onclick="cetakNota('#TRX003')" title="Cetak Nota">
                                            <i class="bi bi-printer"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>01 Jul 2026</td>
                                    <td>#TRX004</td>
                                    <td>Dewi Lestari</td>
                                    <td>Dry Clean</td>
                                    <td>1.0</td>
                                    <td>Rp 25.000</td>
                                    <td><span class="badge bg-info">Diambil</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-info" onclick="cetakNota('#TRX004')" title="Cetak Nota">
                                            <i class="bi bi-printer"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>30 Jun 2026</td>
                                    <td>#TRX005</td>
                                    <td>Eko Prasetyo</td>
                                    <td>Cuci Setrika Reguler</td>
                                    <td>4.0</td>
                                    <td>Rp 24.000</td>
                                    <td><span class="badge bg-success">Selesai</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-info" onclick="cetakNota('#TRX005')" title="Cetak Nota">
                                            <i class="bi bi-printer"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Revenue Chart -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Grafik Pendapatan Mingguan</h5>
                    <div id="revenueChart" style="min-height: 300px;"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Statistics -->
    <div class="row mt-4">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Layanan Terpopuler</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Layanan</th>
                                    <th>Jumlah Transaksi</th>
                                    <th>Pendapatan</th>
                                    <th>Persentase</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cuci Setrika Reguler</td>
                                    <td>75</td>
                                    <td>Rp 1.500.000</td>
                                    <td>
                                        <div class="progress" style="height: 20px;">
                                            <div class="progress-bar bg-primary" style="width: 60%">60%</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Laundry Express</td>
                                    <td>35</td>
                                    <td>Rp 700.000</td>
                                    <td>
                                        <div class="progress" style="height: 20px;">
                                            <div class="progress-bar bg-warning" style="width: 28%">28%</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dry Clean</td>
                                    <td>15</td>
                                    <td>Rp 300.000</td>
                                    <td>
                                        <div class="progress" style="height: 20px;">
                                            <div class="progress-bar bg-info" style="width: 12%">12%</div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Status Transaksi</h5>
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0">
                            <div class="badge bg-success" style="font-size: 1.2rem; padding: 10px 15px;">85</div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0">Selesai</h6>
                            <small class="text-muted">Transaksi selesai bulan ini</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0">
                            <div class="badge bg-warning" style="font-size: 1.2rem; padding: 10px 15px;">25</div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0">Dalam Proses</h6>
                            <small class="text-muted">Sedang dikerjakan</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0">
                            <div class="badge bg-info" style="font-size: 1.2rem; padding: 10px 15px;">15</div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0">Diambil</h6>
                            <small class="text-muted">Sudah diambil pelanggan</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
// Revenue Chart
var options = {
    series: [{
        name: 'Pendapatan',
        data: [150000, 200000, 175000, 225000, 300000, 250000, 350000]
    }],
    chart: {
        height: 300,
        type: 'area',
        toolbar: {
            show: false
        }
    },
    colors: ['#0056b3'],
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth',
        width: 2
    },
    xaxis: {
        categories: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min']
    },
    yaxis: {
        labels: {
            formatter: function(value) {
                return 'Rp ' + (value / 1000) + 'k';
            }
        }
    },
    fill: {
        type: 'gradient',
        gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.7,
            opacityTo: 0.9,
            stops: [0, 90, 100]
        }
    }
};

var chart = new ApexCharts(document.querySelector("#revenueChart"), options);
chart.render();

// Export PDF function
function exportPDF() {
    window.open('<?= base_url('laporan/export-pdf') ?>', '_blank');
}

// Print receipt function
function cetakNota(noTransaksi) {
    window.open('<?= base_url('laporan/cetak-nota/') ?>' + noTransaksi, '_blank');
}
</script>
<?= $this->endSection() ?>