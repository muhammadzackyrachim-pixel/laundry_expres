<?= $this->extend('layout') ?>
<?= $this->section('title') ?>Layanan Kami<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="pagetitle">
    <h1>Paket Layanan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Layanan</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <!-- Cuci Setrika Reguler -->
        <div class="col-lg-4 col-md-6">
            <div class="card prodi-card h-100">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-droplet me-2"></i>Cuci Setrika Reguler</h5>
                    <h6 class="card-subtitle mb-3 text-muted">
                        <span class="badge bg-primary">Rp 6.000/kg</span>
                        <span class="badge bg-success">2-3 Hari</span>
                    </h6>
                    <p class="card-text">Layanan standar cuci, kering, dan setrika rapi. Cocok untuk pakaian sehari-hari.</p>
                    <ul class="small text-muted">
                        <li>Deterjen Premium</li>
                        <li>Pewangi Tahan Lama</li>
                        <li>Setrika Rapi</li>
                    </ul>
                    
                    <!-- Form Tambah ke Cart -->
                    <form action="/cart/add" method="post" class="mt-3">
                        <?= csrf_field() ?>
                        <input type="hidden" name="layanan_id" value="1">
                        <input type="hidden" name="nama_layanan" value="Cuci Setrika Reguler">
                        <input type="hidden" name="harga_satuan" value="6000">
                        <input type="hidden" name="jumlah" value="1">
                        
                        <div class="mb-3">
                            <label class="form-label small text-muted">Berat Cucian (kg)</label>
                            <input type="number" name="berat_kg" class="form-control" 
                                   placeholder="Masukkan berat dalam kg" min="0.5" step="0.5" value="1" required>
                            <small class="text-muted">Harga: Rp 6.000 x berat kg</small>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">
                            <i class="bi bi-cart-plus me-1"></i> Tambah ke Keranjang
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Laundry Express -->
        <div class="col-lg-4 col-md-6">
            <div class="card prodi-card h-100">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-lightning-charge me-2"></i>Laundry Express</h5>
                    <h6 class="card-subtitle mb-3 text-muted">
                        <span class="badge bg-warning text-dark">Rp 10.000/kg</span>
                        <span class="badge bg-danger">1 Hari (Same Day)</span>
                    </h6>
                    <p class="card-text">Layanan prioritas untuk Anda yang membutuhkan pakaian bersih dalam waktu singkat.</p>
                    <ul class="small text-muted">
                        <li>Proses Prioritas</li>
                        <li>Selesai dalam 24 Jam</li>
                        <li>Free Antar Jemput*</li>
                    </ul>
                    
                    <!-- Form Tambah ke Cart -->
                    <form action="/cart/add" method="post" class="mt-3">
                        <?= csrf_field() ?>
                        <input type="hidden" name="layanan_id" value="2">
                        <input type="hidden" name="nama_layanan" value="Laundry Express">
                        <input type="hidden" name="harga_satuan" value="10000">
                        <input type="hidden" name="jumlah" value="1">
                        
                        <div class="mb-3">
                            <label class="form-label small text-muted">Berat Cucian (kg)</label>
                            <input type="number" name="berat_kg" class="form-control" 
                                   placeholder="Masukkan berat dalam kg" min="0.5" step="0.5" value="1" required>
                            <small class="text-muted">Harga: Rp 10.000 x berat kg</small>
                        </div>
                        <button type="submit" class="btn btn-warning w-100">
                            <i class="bi bi-cart-plus me-1"></i> Tambah ke Keranjang
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Dry Clean & Satuan -->
        <div class="col-lg-4 col-md-6">
            <div class="card prodi-card h-100">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-basket me-2"></i>Dry Clean & Satuan</h5>
                    <h6 class="card-subtitle mb-3 text-muted">
                        <span class="badge bg-info text-dark">Harga Satuan</span>
                        <span class="badge bg-secondary">Khusus</span>
                    </h6>
                    <p class="card-text">Khusus untuk bahan delicat, jas, gaun, boneka, dan sepatu.</p>
                    <ul class="small text-muted">
                        <li>Jas / Blazer</li>
                        <li>Gaun Malam / Kebaya</li>
                        <li>Sepatu & Tas</li>
                    </ul>
                    
                    <!-- Form Tambah ke Cart -->
                    <form action="/cart/add" method="post" class="mt-3">
                        <?= csrf_field() ?>
                        <input type="hidden" name="layanan_id" value="3">
                        <input type="hidden" name="nama_layanan" value="Dry Clean & Satuan">
                        <input type="hidden" name="harga_satuan" value="25000">
                        <input type="hidden" name="jumlah" value="1">
                        
                        <div class="mb-3">
                            <label class="form-label small text-muted">Berat Cucian (kg)</label>
                            <input type="number" name="berat_kg" class="form-control" 
                                   placeholder="Masukkan berat dalam kg" min="0.5" step="0.5" value="1" required>
                            <small class="text-muted">Harga: Rp 25.000 x berat kg</small>
                        </div>
                        <button type="submit" class="btn btn-info w-100">
                            <i class="bi bi-cart-plus me-1"></i> Tambah ke Keranjang
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>