<?= $this->extend('layout') ?>
<?= $this->section('title') ?>Form Pelanggan<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="pagetitle">
    <h1><?= isset($pelanggan) ? 'Edit' : 'Tambah' ?> Pelanggan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/pelanggan">Data Pelanggan</a></li>
            <li class="breadcrumb-item active"><?= isset($pelanggan) ? 'Edit' : 'Tambah' ?></li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mt-3">Form Data Pelanggan</h5>
                    
                    <form action="<?= isset($pelanggan) ? '/pelanggan/update/' . $pelanggan['id'] : '/pelanggan/store' ?>" method="post" class="row g-3">
                        <?= csrf_field() ?>
                        <div class="col-12">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= isset($pelanggan) ? esc($pelanggan['nama']) : '' ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label for="no_hp" class="form-label">No. HP / WhatsApp</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= isset($pelanggan) ? esc($pelanggan['no_hp']) : '' ?>" required>
                        </div>
                        <div class="col-12">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3" required><?= isset($pelanggan) ? esc($pelanggan['alamat']) : '' ?></textarea>
                        </div>
                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-primary"><i class="bi bi-save me-1"></i> Simpan</button>
                            <a href="/pelanggan" class="btn btn-secondary"><i class="bi bi-arrow-left me-1"></i> Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>