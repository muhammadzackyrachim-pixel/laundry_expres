<?= $this->extend('layout') ?>
<?= $this->section('title') ?>Tentang Kami<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="pagetitle">
    <h1>Tentang Fresh Laundry</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Tentang Kami</li>
        </ol>
    </nav>
</div>

<section class="section">
    <!-- Company Overview -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Siapa Kami?</h5>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #555;">
                        <strong>Fresh Laundry</strong> adalah solusi cuci pakaian modern yang berkomitmen memberikan 
                        layanan terbaik untuk kebersihan pakaian Anda. Dengan pengalaman bertahun-tahun, kami memahami 
                        bahwa setiap pakaian membutuhkan perlakuan khusus. Itulah mengapa kami menggunakan teknologi 
                        terbaru dan deterjen berkualitas tinggi untuk memastikan hasil cucian yang bersih, wangi, dan tahan lama.
                    </p>
                    <p style="line-height: 1.8; color: #666;">
                        Kami percaya bahwa layanan laundry yang baik bukan hanya tentang mencuci, tetapi tentang memberikan 
                        ketenangan pikiran kepada pelanggan kami. Dengan layanan antar-jemput gratis dan proses yang cepat, 
                        kami membuat hidup Anda lebih mudah.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mengapa Memilih Kami?</h5>
                    <div class="row mt-4">
                        <div class="col-md-6 col-lg-3 mb-4">
                            <div class="text-center p-4" style="background: #f8f9fa; border-radius: 10px; height: 100%;">
                                <i class="bi bi-droplet-fill" style="font-size: 3rem; color: #0056b3;"></i>
                                <h6 class="mt-3">Bersih & Wangi</h6>
                                <p class="text-muted small">Hasil cucian bersih maksimal dengan wangi yang tahan lama hingga 7 hari</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4">
                            <div class="text-center p-4" style="background: #f8f9fa; border-radius: 10px; height: 100%;">
                                <i class="bi bi-lightning-charge-fill" style="font-size: 3rem; color: #ffc107;"></i>
                                <h6 class="mt-3">Cepat & Tepat Waktu</h6>
                                <p class="text-muted small">Layanan express 1 hari jadi dan regular 2-3 hari dengan ketepatan waktu</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4">
                            <div class="text-center p-4" style="background: #f8f9fa; border-radius: 10px; height: 100%;">
                                <i class="bi bi-shield-check" style="font-size: 3rem; color: #28a745;"></i>
                                <h6 class="mt-3">Aman & Terpercaya</h6>
                                <p class="text-muted small">Deterjen ramah lingkungan dan aman untuk semua jenis kain sensitif</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4">
                            <div class="text-center p-4" style="background: #f8f9fa; border-radius: 10px; height: 100%;">
                                <i class="bi bi-truck" style="font-size: 3rem; color: #dc3545;"></i>
                                <h6 class="mt-3">Gratis Antar-Jemput</h6>
                                <p class="text-muted small">Layanan antar-jemput gratis untuk area sekitar lokasi kami</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Values -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Nilai-Nilai Kami</h5>
                    <div class="row mt-3">
                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0">
                                    <i class="bi bi-check-circle-fill text-success" style="font-size: 2rem;"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6>Kualitas Terbaik</h6>
                                    <p class="mb-0 text-muted small">Kami tidak pernah berkompromi dengan kualitas. Setiap pakaian diperlakukan dengan penuh perhatian.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0">
                                    <i class="bi bi-heart-fill text-danger" style="font-size: 2rem;"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6>Kepuasan Pelanggan</h6>
                                    <p class="mb-0 text-muted small">Kepuasan Anda adalah prioritas utama kami. Kami selalu berusaha melebihi ekspektasi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0">
                                    <i class="bi bi-leaf-fill text-success" style="font-size: 2rem;"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6>Peduli Lingkungan</h6>
                                    <p class="mb-0 text-muted small">Menggunakan produk ramah lingkungan untuk menjaga bumi tetap hijau.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0">
                                    <i class="bi bi-clock-fill text-primary" style="font-size: 2rem;"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6>Tepat Waktu</h6>
                                    <p class="mb-0 text-muted small">Kami menghargai waktu Anda. Pesanan selalu selesai sesuai janji.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0">
                                    <i class="bi bi-people-fill text-info" style="font-size: 2rem;"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6>Pelayanan Ramah</h6>
                                    <p class="mb-0 text-muted small">Tim kami siap melayani Anda dengan senyuman dan keramahan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0">
                                    <i class="bi bi-award-fill text-warning" style="font-size: 2rem;"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6>Harga Kompetitif</h6>
                                    <p class="mb-0 text-muted small">Kualitas terbaik dengan harga yang terjangkau dan bersaing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Company Info -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Informasi Kontak</h5>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-building me-3" style="font-size: 1.5rem; color: #0056b3;"></i>
                                <div>
                                    <strong>Nama Usaha</strong>
                                    <p class="mb-0">Fresh Laundry</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-geo-alt me-3" style="font-size: 1.5rem; color: #dc3545;"></i>
                                <div>
                                    <strong>Alamat</strong>
                                    <p class="mb-0">Jl. Kebersihan No. 45, Semarang</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-telephone me-3" style="font-size: 1.5rem; color: #28a745;"></i>
                                <div>
                                    <strong>Telepon/WhatsApp</strong>
                                    <p class="mb-0">(024) 7654321</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-envelope me-3" style="font-size: 1.5rem; color: #ffc107;"></i>
                                <div>
                                    <strong>Email</strong>
                                    <p class="mb-0">cs@freshlaundry.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-clock me-3" style="font-size: 1.5rem; color: #6f42c1;"></i>
                                <div>
                                    <strong>Jam Operasional</strong>
                                    <p class="mb-0">Senin - Minggu: 07.00 - 21.00 WIB</p>
                                    <small class="text-muted">Termasuk hari libur nasional</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>