<?= $this->extend('layout') ?>
<?= $this->section('title') ?>Checkout<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="pagetitle">
    <h1>Checkout</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/cart">Keranjang</a></li>
            <li class="breadcrumb-item active">Checkout</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Informasi Pelanggan</h5>
                    
                    <form action="/cart/process-checkout" method="post">
                        <?= csrf_field() ?>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="nama_pelanggan" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_pelanggan" 
                                       name="nama_pelanggan" required>
                            </div>
                            <div class="col-md-6">
                                <label for="no_hp" class="form-label">No. HP / WhatsApp</label>
                                <input type="text" class="form-control" id="no_hp" 
                                       name="no_hp" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Lengkap</label>
                            <textarea class="form-control" id="alamat" name="alamat" 
                                      rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                            <select class="form-select" id="metode_pembayaran" 
                                    name="metode_pembayaran" required>
                                <option value="">Pilih Metode Pembayaran</option>
                                <option value="cash">Cash (Tunai)</option>
                                <option value="transfer">Transfer Bank</option>
                                <option value="ewallet">E-Wallet (OVO, DANA, GoPay)</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="catatan" class="form-label">Catatan (Opsional)</label>
                            <textarea class="form-control" id="catatan" name="catatan" 
                                      rows="2" placeholder="Contoh: Pakaian sensitif, gunakan deterjen khusus"></textarea>
                        </div>

                        <div class="d-flex gap-2">
                            <a href="/cart" class="btn btn-secondary">
                                <i class="bi bi-arrow-left me-1"></i> Kembali
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check-circle me-1"></i> Konfirmasi Pesanan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Detail Pesanan</h5>
                    
                    <?php foreach($cartItems as $item): ?>
                        <div class="mb-3 pb-3 border-bottom">
                            <div class="d-flex justify-content-between">
                                <strong><?= esc($item['nama_layanan']) ?></strong>
                                <span>Rp <?= number_format($item['subtotal'], 0, ',', '.') ?></span>
                            </div>
                            <small class="text-muted">
                                <?= $item['berat_kg'] ?> kg x <?= $item['jumlah'] ?> item
                            </small>
                        </div>
                    <?php endforeach; ?>

                    <div class="d-flex justify-content-between mt-3 pt-3 border-top">
                        <strong style="font-size: 1.1rem;">Total:</strong>
                        <strong style="font-size: 1.3rem; color: var(--laundry-blue);">
                            Rp <?= number_format($cartTotal, 0, ',', '.') ?>
                        </strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>