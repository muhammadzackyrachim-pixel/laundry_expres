<?= $this->extend('layout') ?>
<?= $this->section('title') ?>Transaksi Laundry<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="pagetitle">
    <h1>Transaksi</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Transaksi</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <!-- Header dengan tombol tambah -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="card-title mb-0">Daftar Transaksi Laundry</h5>
                        <a href="/laundry/create" class="btn btn-primary">
                            <i class="bi bi-plus-circle me-1"></i> Transaksi Baru
                        </a>
                    </div>

                    <?php if(session()->getFlashdata('success')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="bi bi-check-circle me-1"></i>
                        <?= session()->getFlashdata('success') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    <?php endif; ?>

                    <!-- Filter dan Search -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-search"></i></span>
                                <input type="text" class="form-control" placeholder="Cari transaksi..." id="searchInput">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select" id="filterStatus">
                                <option value="">Semua Status</option>
                                <option value="Baru">Baru</option>
                                <option value="Proses">Dalam Proses</option>
                                <option value="Selesai">Selesai</option>
                                <option value="Diambil">Sudah Diambil</option>
                            </select>
                        </div>
                    </div>

                    <!-- Table Transaksi -->
                    <div class="table-responsive">
                        <table class="table table-hover datatable" id="transaksiTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Transaksi</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Layanan</th>
                                    <th>Berat (kg)</th>
                                    <th>Total Harga</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if(isset($transaksi) && !empty($transaksi)): 
                                    $no = 1;
                                    foreach($transaksi as $t): 
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><strong>#TRX<?= str_pad($t['id'], 5, '0', STR_PAD_LEFT) ?></strong></td>
                                    <td><?= esc($t['nama_pelanggan']) ?></td>
                                    <td><?= esc($t['jenis_layanan'] ?? 'Cuci Setrika') ?></td>
                                    <td><?= number_format($t['berat_kg'], 1) ?> kg</td>
                                    <td><strong>Rp <?= number_format($t['total_harga'], 0, ',', '.') ?></strong></td>
                                    <td>
                                        <?php 
                                        $statusClass = '';
                                        $statusIcon = '';
                                        switch($t['status_cucian']) {
                                            case 'Baru':
                                                $statusClass = 'bg-info';
                                                $statusIcon = 'bi-clock';
                                                break;
                                            case 'Proses':
                                                $statusClass = 'bg-warning text-dark';
                                                $statusIcon = 'bi-arrow-repeat';
                                                break;
                                            case 'Selesai':
                                                $statusClass = 'bg-success';
                                                $statusIcon = 'bi-check-circle';
                                                break;
                                            case 'Diambil':
                                                $statusClass = 'bg-secondary';
                                                $statusIcon = 'bi-box-seam';
                                                break;
                                        }
                                        ?>
                                        <span class="badge <?= $statusClass ?>">
                                            <i class="bi <?= $statusIcon ?> me-1"></i>
                                            <?= esc($t['status_cucian']) ?>
                                        </span>
                                    </td>
                                    <td><?= date('d/m/Y H:i', strtotime($t['created_at'])) ?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="/laundry/view/<?= $t['id'] ?>" class="btn btn-sm btn-info" title="Lihat Detail">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="/laundry/edit/<?= $t['id'] ?>" class="btn btn-sm btn-warning" title="Edit">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete(<?= $t['id'] ?>)" title="Hapus">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <?php 
                                    endforeach;
                                else: 
                                ?>
                                <tr>
                                    <td colspan="9" class="text-center py-4">
                                        <i class="bi bi-inbox" style="font-size: 3rem; color: #ccc;"></i>
                                        <p class="mt-2 text-muted">Belum ada transaksi</p>
                                        <a href="/laundry/create" class="btn btn-primary btn-sm mt-2">
                                            <i class="bi bi-plus-circle me-1"></i> Buat Transaksi Pertama
                                        </a>
                                    </td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus transaksi ini?</p>
                <p class="text-danger"><strong>Peringatan:</strong> Data yang dihapus tidak dapat dikembalikan.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form id="deleteForm" method="post" style="display:inline;">
                    <?= csrf_field() ?>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function confirmDelete(id) {
    const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
    document.getElementById('deleteForm').action = '/laundry/delete/' + id;
    modal.show();
}

// Simple search functionality
document.getElementById('searchInput').addEventListener('keyup', function() {
    const searchTerm = this.value.toLowerCase();
    const rows = document.querySelectorAll('#transaksiTable tbody tr');
    
    rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(searchTerm) ? '' : 'none';
    });
});

// Filter by status
document.getElementById('filterStatus').addEventListener('change', function() {
    const status = this.value;
    const rows = document.querySelectorAll('#transaksiTable tbody tr');
    
    rows.forEach(row => {
        if (status === '') {
            row.style.display = '';
        } else {
            const cellText = row.textContent;
            row.style.display = cellText.includes(status) ? '' : 'none';
        }
    });
});
</script>
<?= $this->endSection() ?>