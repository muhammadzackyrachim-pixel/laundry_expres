<?= $this->extend('layout') ?>
<?= $this->section('title') ?>Keranjang Belanja<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="pagetitle">
    <h1>Keranjang Belanja</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Keranjang</li>
        </ol>
    </nav>
</div>

<section class="section">
    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show">
            <i class="bi bi-check-circle me-1"></i>
            <?= session()->getFlashdata('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show">
            <i class="bi bi-exclamation-circle me-1"></i>
            <?= session()->getFlashdata('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Item di Keranjang (<?= $cartCount ?>)</h5>
                    
                    <?php if(empty($cartItems)): ?>
                        <div class="text-center py-5">
                            <i class="bi bi-cart-x" style="font-size: 4rem; color: #ccc;"></i>
                            <p class="mt-3">Keranjang Anda kosong</p>
                            <a href="/layanan" class="btn btn-primary">
                                <i class="bi bi-plus-circle me-1"></i> Tambah Layanan
                            </a>
                        </div>
                    <?php else: ?>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Layanan</th>
                                        <th>Harga</th>
                                        <th>Berat (kg)</th>
                                        <th>Jumlah</th>
                                        <th>Subtotal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($cartItems as $item): ?>
                                        <tr>
                                            <td>
                                                <strong><?= esc($item['nama_layanan']) ?></strong>
                                            </td>
                                            <td>Rp <?= number_format($item['harga_satuan'], 0, ',', '.') ?></td>
                                            <td>
                                                <form action="/cart/update/<?= $item['id'] ?>" method="post" class="d-inline">
                                                    <?= csrf_field() ?>
                                                    <input type="number" name="berat_kg" value="<?= $item['berat_kg'] ?>" 
                                                           min="0.5" step="0.5" class="form-control form-control-sm" 
                                                           style="width: 80px;" onchange="this.form.submit()">
                                                </form>
                                            </td>
                                            <td>
                                                <form action="/cart/update/<?= $item['id'] ?>" method="post" class="d-inline">
                                                    <?= csrf_field() ?>
                                                    <input type="number" name="jumlah" value="<?= $item['jumlah'] ?>" 
                                                           min="1" class="form-control form-control-sm" 
                                                           style="width: 70px;" onchange="this.form.submit()">
                                                </form>
                                            </td>
                                            <td>
                                                <strong>Rp <?= number_format($item['subtotal'], 0, ',', '.') ?></strong>
                                            </td>
                                            <td>
                                                <a href="/cart/remove/<?= $item['id'] ?>" 
                                                   class="btn btn-sm btn-danger"
                                                   onclick="return confirm('Hapus item ini?')">
                                                    <i class="bi bi-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-between mt-3">
                            <a href="/layanan" class="btn btn-secondary">
                                <i class="bi bi-arrow-left me-1"></i> Lanjut Belanja
                            </a>
                            <a href="/cart/clear" class="btn btn-outline-danger"
                               onclick="return confirm('Kosongkan seluruh keranjang?')">
                                <i class="bi bi-trash me-1"></i> Kosongkan Keranjang
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ringkasan Pesanan</h5>
                    
                    <div class="d-flex justify-content-between mb-2">
                        <span>Total Item:</span>
                        <strong><?= $cartCount ?> item</strong>
                    </div>
                    
                    <hr>
                    
                    <div class="d-flex justify-content-between mb-3">
                        <span style="font-size: 1.1rem;">Total Harga:</span>
                        <strong style="font-size: 1.3rem; color: var(--laundry-blue);">
                            Rp <?= number_format($cartTotal, 0, ',', '.') ?>
                        </strong>
                    </div>

                    <?php if(!empty($cartItems)): ?>
                        <a href="/cart/checkout" class="btn btn-primary w-100 btn-lg">
                            <i class="bi bi-credit-card me-1"></i> Checkout
                        </a>
                    <?php else: ?>
                        <button class="btn btn-primary w-100 btn-lg" disabled>
                            <i class="bi bi-credit-card me-1"></i> Checkout
                        </button>
                    <?php endif; ?>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-body">
                    <h6 class="card-title">Informasi</h6>
                    <ul class="small text-muted mb-0">
                        <li>Harga sudah termasuk deterjen premium</li>
                        <li>Berat minimum 1 kg per item</li>
                        <li>Estimasi selesai: 2-3 hari kerja</li>
                        <li>Free antar-jemput untuk area tertentu</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>