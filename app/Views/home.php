<?= $this->extend('layout') ?>
<?= $this->section('title') ?>Dashboard<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
    <!-- Welcome Banner -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0" style="background: linear-gradient(135deg, #0056b3 0%, #003d82 100%); color: white;">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h2 class="mb-1">Selamat Datang, <?= session()->get('name') ?>! 👋</h2>
                            <p class="mb-0 opacity-75">Sistem Informasi Manajemen Fresh Laundry - Kelola transaksi laundry Anda dengan mudah.</p>
                        </div>
                        <div class="col-md-4 text-end d-none d-md-block">
                            <i class="bi bi-droplet-fill" style="font-size: 4rem; opacity: 0.3;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Info Cards -->
    <div class="row">
        <div class="col-xxl-3 col-md-6">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Total Pelanggan <span>| Bulan Ini</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                            <h6>150</h6>
                            <span class="text-success small pt-1 fw-bold">12%</span>
                            <span class="text-muted small pt-2 ps-1">dari bulan lalu</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-3 col-md-6">
            <div class="card info-card revenue-card">
                <div class="card-body">
                    <h5 class="card-title">Transaksi Hari Ini <span>| Today</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-cart-check"></i>
                        </div>
                        <div class="ps-3">
                            <h6>45</h6>
                            <span class="text-success small pt-1 fw-bold">8%</span>
                            <span class="text-muted small pt-2 ps-1">dari kemarin</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-3 col-md-6">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">Cucian Dalam Proses <span>| Active</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-arrow-repeat"></i>
                        </div>
                        <div class="ps-3">
                            <h6>15</h6>
                            <span class="text-warning small pt-1 fw-bold">Sedang</span>
                            <span class="text-muted small pt-2 ps-1">dikerjakan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-3 col-md-6">
            <div class="card info-card" style="border-top: 4px solid #ff771d !important;">
                <div class="card-body">
                    <h5 class="card-title">Pendapatan Hari Ini <span>| Today</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="color: #ff771d; background: #ffecdf;">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                        <div class="ps-3">
                            <h6>Rp 2.5jt</h6>
                            <span class="text-success small pt-1 fw-bold">15%</span>
                            <span class="text-muted small pt-2 ps-1">dari kemarin</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Transactions & Quick Actions -->
    <div class="row mt-4">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Transaksi Terbaru <span>| Hari Ini</span></h5>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Pelanggan</th>
                                <th>Layanan</th>
                                <th>Berat</th>
                                <th>Total</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Ahmad Rizki</td>
                                <td>Cuci Setrika Reguler</td>
                                <td>3 kg</td>
                                <td>Rp 18.000</td>
                                <td><span class="badge bg-warning text-dark">Proses</span></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Siti Nurhaliza</td>
                                <td>Laundry Express</td>
                                <td>2 kg</td>
                                <td>Rp 20.000</td>
                                <td><span class="badge bg-success">Selesai</span></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Budi Santoso</td>
                                <td>Dry Clean</td>
                                <td>1 pcs</td>
                                <td>Rp 25.000</td>
                                <td><span class="badge bg-info">Diambil</span></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Dewi Lestari</td>
                                <td>Cuci Setrika Reguler</td>
                                <td>5 kg</td>
                                <td>Rp 30.000</td>
                                <td><span class="badge bg-warning text-dark">Proses</span></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Eko Prasetyo</td>
                                <td>Laundry Express</td>
                                <td>4 kg</td>
                                <td>Rp 40.000</td>
                                <td><span class="badge bg-danger">Baru</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <!-- Quick Actions -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Aksi Cepat</h5>
                    <div class="d-grid gap-2">
                        <a href="/laundry/create" class="btn btn-primary">
                            <i class="bi bi-plus-circle me-2"></i>Transaksi Baru
                        </a>
                        <a href="/pelanggan/create" class="btn btn-outline-primary">
                            <i class="bi bi-person-plus me-2"></i>Tambah Pelanggan
                        </a>
                        <a href="/layanan" class="btn btn-outline-secondary">
                            <i class="bi bi-basket me-2"></i>Lihat Paket Layanan
                        </a>
                        <a href="/laporan" class="btn btn-outline-info">
                            <i class="bi bi-graph-up me-2"></i>Lihat Laporan
                        </a>
                    </div>
                </div>
            </div>

            <!-- Status Cucian -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Status Cucian</h5>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>Selesai</span>
                            <strong>65%</strong>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-success" style="width: 65%"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>Dalam Proses</span>
                            <strong>25%</strong>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-warning" style="width: 25%"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>Menunggu</span>
                            <strong>10%</strong>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-danger" style="width: 10%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>