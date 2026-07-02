<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-heading">Menu Utama</li>
        
        <li class="nav-item">
            <a class="nav-link <?= uri_string() === '/' || uri_string() === 'home' ? '' : 'collapsed' ?>" href="/">
                <i class="bi bi-grid"></i><span>Dashboard</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link <?= uri_string() === 'tentang' ? '' : 'collapsed' ?>" href="/tentang">
                <i class="bi bi-building"></i><span>Tentang Kami</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link <?= uri_string() === 'layanan' ? '' : 'collapsed' ?>" href="/layanan">
                <i class="bi bi-basket"></i><span>Paket Layanan</span>
            </a>
        </li>

        <?php if (session()->get('role') === 'admin'): ?>
            <!-- Menu Khusus Admin -->
            <li class="nav-heading">Manajemen Sistem</li>
            
            <li class="nav-item">
                <a class="nav-link <?= uri_string() === 'admin/dashboard' ? '' : 'collapsed' ?>" href="/admin/dashboard">
                    <i class="bi bi-speedometer2"></i><span>Dashboard Admin</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link <?= uri_string() === 'laporan' ? '' : 'collapsed' ?>" href="/laporan">
                    <i class="bi bi-file-earmark-text"></i><span>Laporan</span>
                </a>
            </li>
        <?php endif; ?>

        <!-- Menu untuk Semua User (Admin & Kasir) -->
        <li class="nav-heading">Transaksi</li>
        
        <li class="nav-item">
            <a class="nav-link <?= uri_string() === 'pelanggan' || strpos(uri_string(), 'pelanggan/') !== false ? '' : 'collapsed' ?>" href="/pelanggan">
                <i class="bi bi-people"></i><span>Data Pelanggan</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link <?= uri_string() === 'transaksi' ? '' : 'collapsed' ?>" href="/transaksi">
                <i class="bi bi-cart"></i><span>Transaksi</span>
            </a>
        </li>
    </ul>
</aside>