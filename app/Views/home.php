<?= $this->extend('layout') ?>
<?= $this->section('title') ?>Dashboard<?= $this->endSection() ?>
<?= $this->section('content') ?>
<!-- Hero Section -->
<div class="hero-laundry">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1>Selamat Datang di Fresh Laundry</h1>
                <p>Bersih, Wangi, dan Cepat. Solusi terbaik untuk pakaian Anda.</p>
            </div>
        </div>
    </div>
</div>

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
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Halo, <?= session()->get('name') ?>!</h5>
                    <p>Selamat datang di Sistem Informasi Manajemen Laundry. Gunakan menu di samping untuk navigasi.</p>
                    <div class="alert alert-success mt-3">
                        <i class="bi bi-info-circle me-2"></i>
                        <strong>Informasi:</strong> Gunakan menu di samping untuk navigasi:
                        <ul class="mb-0 mt-2">
                            <li><strong>Tentang Kami</strong> - Melihat visi, misi, dan informasi usaha</li>
                            <li><strong>Paket Layanan</strong> - Melihat daftar paket laundry yang tersedia</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="stat-box">
                <h3>150+</h3>
                <p>Pelanggan Aktif</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-box">
                <h3>45</h3>
                <p>Transaksi Hari Ini</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-box">
                <h3>Rp 2.5jt</h3>
                <p>Pendapatan Hari Ini</p>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>