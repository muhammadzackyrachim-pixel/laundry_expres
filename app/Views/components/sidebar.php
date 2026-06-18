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
        
        <!-- MENU BARU: DATA PELANGGAN -->
        <li class="nav-heading">Manajemen Data</li>
        <li class="nav-item">
            <a class="nav-link <?= uri_string() === 'pelanggan' || strpos(uri_string(), 'pelanggan/') !== false ? '' : 'collapsed' ?>" href="/pelanggan">
                <i class="bi bi-people"></i><span>Data Pelanggan</span>
            </a>
        </li>
    </ul>
</aside>