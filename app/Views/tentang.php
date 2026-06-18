<?= $this->extend('layout') ?>
<?= $this->section('title') ?>Tentang Kami<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="pagetitle">
    <h1>Tentang Usaha</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Tentang</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Visi</h5>
                    <p class="fst-italic" style="font-size: 1.1rem; line-height: 1.8;">
                        "Menjadi jasa laundry terpercaya yang mengutamakan kebersihan, kualitas, dan kepuasan pelanggan dengan layanan yang cepat dan higienis."
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Misi</h5>
                    <ol style="line-height: 2;">
                        <li>Memberikan layanan pencucian pakaian yang bersih, wangi, dan rapi.</li>
                        <li>Menggunakan deterjen ramah lingkungan dan aman untuk semua jenis kain.</li>
                        <li>Menyediakan layanan cepat (express) untuk kebutuhan mendesak pelanggan.</li>
                        <li>Membangun hubungan baik dan kepercayaan dengan pelanggan.</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Informasi Usaha</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <p><i class="bi bi-building me-2"></i><strong>Nama:</strong> Fresh Laundry</p>
                            <p><i class="bi bi-geo-alt me-2"></i><strong>Alamat:</strong> Jl. Kebersihan No. 45, Semarang</p>
                            <p><i class="bi bi-telephone me-2"></i><strong>Telepon:</strong> (024) 7654321</p>
                        </div>
                        <div class="col-md-6">
                            <p><i class="bi bi-envelope me-2"></i><strong>Email:</strong> cs@freshlaundry.com</p>
                            <p><i class="bi bi-globe me-2"></i><strong>Website:</strong> www.freshlaundry.com</p>
                            <p><i class="bi bi-clock me-2"></i><strong>Jam Operasional:</strong> Senin - Minggu (07.00 - 21.00)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>