<?= $this->extend('layout') ?>

<?= $this->section('title') ?>Data Pelanggan<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="pagetitle">
    <h1>Data Pelanggan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Data Pelanggan</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <!-- HEADER DENGAN 2 TOMBOL -->
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <h5 class="card-title">Daftar Pelanggan Laundry</h5>
                        <div>
                            <!-- TOMBOL DOWNLOAD PDF -->
                            <a href="/pelanggan/download-pdf" class="btn btn-danger me-2" target="_blank">
                                <i class="bi bi-file-pdf me-1"></i> Download PDF
                            </a>
                            <!-- TOMBOL TAMBAH -->
                            <a href="/pelanggan/create" class="btn btn-primary">
                                <i class="bi bi-plus-circle me-1"></i> Tambah Pelanggan
                            </a>
                        </div>
                    </div>

                    <?php if(session()->getFlashdata('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                            <i class="bi bi-check-circle me-1"></i> <?= session()->getFlashdata('success') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>

                    <table class="table table-striped datatable mt-3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>No. HP</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($pelanggan as $p): ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= esc($p['nama']) ?></td>
                                <td><?= esc($p['no_hp']) ?></td>
                                <td><?= esc($p['alamat']) ?></td>
                                <td>
                                    <a href="/pelanggan/edit/<?= $p['id'] ?>" class="btn btn-sm btn-warning text-white">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="/pelanggan/delete/<?= $p['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>