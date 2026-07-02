<?= $this->extend('layout') ?>

<?= $this->section('title') ?>F.A.Q - Fresh Laundry<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="pagetitle">
    <h1>Frequently Asked Questions</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">F.A.Q</li>
        </ol>
    </nav>
</div>

<section class="section faq">
    <div class="row">
        <div class="col-lg-6">
            <div class="card basic">
                <div class="card-body">
                    <h5 class="card-title">Pertanyaan Umum</h5>
                    
                    <div class="mb-4">
                        <h6>1. Bagaimana cara menggunakan layanan laundry?</h6>
                        <p>Anda cukup membawa pakaian kotor ke tempat kami, atau bisa juga menggunakan layanan antar-jemput. Kami akan menimbang dan mencatat pesanan Anda.</p>
                    </div>

                    <div class="mb-4">
                        <h6>2. Berapa lama proses pengerjaan laundry?</h6>
                        <p>Untuk layanan reguler membutuhkan waktu 2-3 hari. Sedangkan untuk layanan express bisa selesai dalam 1 hari (24 jam).</p>
                    </div>

                    <div class="mb-4">
                        <h6>3. Berapa harga laundry per kilogram?</h6>
                        <p>Harga laundry reguler Rp 6.000/kg, sedangkan untuk layanan express Rp 10.000/kg.</p>
                    </div>

                    <div class="mb-4">
                        <h6>4. Apakah ada layanan antar-jemput?</h6>
                        <p>Ya, kami menyediakan layanan antar-jemput gratis untuk minimal pesanan 5kg dalam jarak 3km dari lokasi kami.</p>
                    </div>

                    <div class="mb-4">
                        <h6>5. Apa saja metode pembayaran yang tersedia?</h6>
                        <p>Kami menerima pembayaran tunai, transfer bank, dan e-wallet (GoPay, OVO, Dana).</p>
                    </div>
                </div>
            </div>

            <!-- F.A.Q Group 1 -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Layanan & Paket</h5>
                    <div class="accordion accordion-flush" id="faq-group-1">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqsOne-1">
                                    Apa perbedaan laundry reguler dan express?
                                </button>
                            </h2>
                            <div id="faqsOne-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                                <div class="accordion-body">
                                    Laundry reguler memiliki waktu pengerjaan 2-3 hari dengan harga lebih ekonomis (Rp 6.000/kg). 
                                    Sedangkan laundry express selesai dalam 1 hari (24 jam) dengan harga Rp 10.000/kg.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqsOne-2">
                                    Apakah bisa laundry satuan (bukan per kg)?
                                </button>
                            </h2>
                            <div id="faqsOne-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                                <div class="accordion-body">
                                    Ya, kami menerima laundry satuan seperti jas, gaun, sepatu, tas, dan boneka dengan harga yang disesuaikan per item.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqsOne-3">
                                    Apakah tersedia layanan dry clean?
                                </button>
                            </h2>
                            <div id="faqsOne-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                                <div class="accordion-body">
                                    Ya, kami menyediakan layanan dry clean untuk pakaian berbahan delicat seperti jas, gaun malam, dan kebaya.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqsOne-4">
                                    Bagaimana jika ada pakaian yang hilang atau rusak?
                                </button>
                            </h2>
                            <div id="faqsOne-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                                <div class="accordion-body">
                                    Kami memiliki garansi untuk pakaian yang hilang atau rusak. Silakan laporkan dalam waktu 3 hari setelah pengambilan dengan menunjukkan nota.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <!-- F.A.Q Group 2 -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Perawatan & Pencucian</h5>
                    <div class="accordion accordion-flush" id="faq-group-2">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqsTwo-1">
                                    Deterjen apa yang digunakan?
                                </button>
                            </h2>
                            <div id="faqsTwo-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                                <div class="accordion-body">
                                    Kami menggunakan deterjen premium yang aman untuk semua jenis kain dan ramah lingkungan. Untuk pelanggan dengan kulit sensitif, kami juga menyediakan opsi deterjen hipoalergenik.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqsTwo-2">
                                    Apakah pakaian akan dipisahkan berdasarkan warna?
                                </button>
                            </h2>
                            <div id="faqsTwo-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                                <div class="accordion-body">
                                    Ya, kami selalu memisahkan pakaian berdasarkan warna (putih, terang, gelap) untuk mencegah luntur dan menjaga kualitas pakaian Anda.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqsTwo-3">
                                    Bagaimana dengan noda membandel?
                                </button>
                            </h2>
                            <div id="faqsTwo-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                                <div class="accordion-body">
                                    Untuk noda membandel, harap informasikan kepada kami saat menyerahkan pakaian. Kami akan melakukan treatment khusus sebelum proses pencucian.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqsTwo-4">
                                    Apakah bisa request pewangi khusus?
                                </button>
                            </h2>
                            <div id="faqsTwo-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                                <div class="accordion-body">
                                    Ya, kami menyediakan beberapa pilihan varian pewangi. Anda bisa memilih sesuai preferensi Anda.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqsTwo-5">
                                    Bagaimana cara packing pakaian?
                                </button>
                            </h2>
                            <div id="faqsTwo-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                                <div class="accordion-body">
                                    Pakaian akan dikemas dalam plastik wrapping yang rapi dan higienis. Untuk jas dan gaun, kami menggunakan hanger dan cover khusus.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- F.A.Q Group 3 -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Informasi Lainnya</h5>
                    <div class="accordion accordion-flush" id="faq-group-3">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqsThree-1">
                                    Apa jam operasional Fresh Laundry?
                                </button>
                            </h2>
                            <div id="faqsThree-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                                <div class="accordion-body">
                                    Kami buka setiap hari Senin - Minggu pukul 07.00 - 21.00 WIB.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqsThree-2">
                                    Apakah ada program member atau diskon?
                                </button>
                            </h2>
                            <div id="faqsThree-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                                <div class="accordion-body">
                                    Ya, kami memiliki program member dengan berbagai keuntungan seperti diskon khusus, poin reward, dan promo-promo menarik.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqsThree-3">
                                    Bagaimana cara menghubungi customer service?
                                </button>
                            </h2>
                            <div id="faqsThree-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                                <div class="accordion-body">
                                    Anda bisa menghubungi kami melalui telepon/WhatsApp di (024) 7654321, email cs@freshlaundry.com, atau datang langsung ke outlet kami.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqsThree-4">
                                    Apakah menerima laundry dalam jumlah besar?
                                </button>
                            </h2>
                            <div id="faqsThree-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                                <div class="accordion-body">
                                    Ya, kami menerima laundry dalam jumlah besar untuk hotel, restoran, atau usaha lainnya dengan harga khusus. Silakan hubungi kami untuk informasi lebih lanjut.
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