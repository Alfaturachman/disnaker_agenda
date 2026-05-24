<style>
    .hero-section {
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
    }

    .hero-section::before {
        content: '';
        position: absolute;
        inset: 0;
        background:
            radial-gradient(ellipse at 20% 50%, rgba(37, 99, 235, 0.15) 0%, transparent 50%),
            radial-gradient(ellipse at 80% 50%, rgba(37, 99, 235, 0.1) 0%, transparent 50%);
        z-index: 1;
    }

    .hero-bg {
        position: absolute;
        inset: 0;
        object-fit: cover;
        width: 100%;
        height: 100%;
        opacity: 0.15;
        z-index: 0;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
        padding: 2rem 1rem;
        max-width: 800px;
    }

    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: rgba(37, 99, 235, 0.15);
        border: 1px solid rgba(37, 99, 235, 0.25);
        color: #93c5fd;
        font-size: 0.8125rem;
        font-weight: 500;
        padding: 0.5rem 1rem;
        border-radius: 100px;
        margin-bottom: 1.5rem;
        letter-spacing: 0.02em;
    }

    .hero-content h1 {
        font-size: 3rem;
        font-weight: 800;
        color: #fff;
        line-height: 1.15;
        margin-bottom: 1rem;
        letter-spacing: -0.02em;
    }

    .hero-content h1 span {
        background: linear-gradient(135deg, #60a5fa, #a78bfa);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .hero-content p {
        font-size: 1.125rem;
        color: #94a3b8;
        line-height: 1.7;
        margin-bottom: 2rem;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    .hero-actions {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .hero-actions .btn-primary-custom {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.8125rem 1.75rem;
        font-size: 0.9375rem;
        font-weight: 600;
        color: #fff;
        background: linear-gradient(135deg, #2563eb, #1d4ed8);
        border: none;
        border-radius: 0.75rem;
        text-decoration: none;
        transition: all 0.2s;
        cursor: pointer;
    }

    .hero-actions .btn-primary-custom:hover {
        background: linear-gradient(135deg, #1d4ed8, #1e40af);
        box-shadow: 0 4px 16px rgba(37, 99, 235, 0.4);
        transform: translateY(-2px);
        text-decoration: none;
        color: #fff;
    }

    .hero-actions .btn-outline-custom {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.8125rem 1.75rem;
        font-size: 0.9375rem;
        font-weight: 600;
        color: #e2e8f0;
        background: transparent;
        border: 1.5px solid rgba(255, 255, 255, 0.15);
        border-radius: 0.75rem;
        text-decoration: none;
        transition: all 0.2s;
        cursor: pointer;
    }

    .hero-actions .btn-outline-custom:hover {
        border-color: rgba(255, 255, 255, 0.3);
        background: rgba(255, 255, 255, 0.05);
        transform: translateY(-2px);
        text-decoration: none;
        color: #fff;
    }

    .hero-stats {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 2.5rem;
        margin-top: 3rem;
        padding-top: 2rem;
        border-top: 1px solid rgba(255, 255, 255, 0.08);
    }

    .hero-stats .stat-item {
        text-align: center;
    }

    .hero-stats .stat-item .stat-number {
        font-size: 1.5rem;
        font-weight: 700;
        color: #fff;
    }

    .hero-stats .stat-item .stat-label {
        font-size: 0.8125rem;
        color: #64748b;
        margin-top: 0.125rem;
    }

    .section-custom {
        padding: 5rem 0;
    }

    .section-custom .section-label {
        display: inline-flex;
        align-items: center;
        gap: 0.375rem;
        font-size: 0.75rem;
        font-weight: 600;
        color: #2563eb;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        margin-bottom: 0.75rem;
    }

    .section-custom .section-title {
        font-size: 2rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 0.75rem;
        letter-spacing: -0.01em;
    }

    .section-custom .section-desc {
        font-size: 1rem;
        color: #64748b;
        line-height: 1.7;
        max-width: 560px;
    }

    .layanan-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 1.5rem;
        margin-top: 2rem;
    }

    .layanan-card {
        background: #fff;
        border: 1px solid #f1f5f9;
        border-radius: 1rem;
        padding: 1.75rem;
        transition: all 0.25s;
    }

    .layanan-card:hover {
        border-color: #e2e8f0;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
        transform: translateY(-3px);
    }

    .layanan-card .card-icon {
        width: 48px;
        height: 48px;
        background: linear-gradient(135deg, #eff6ff, #dbeafe);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
        color: #2563eb;
        font-size: 1.25rem;
    }

    .layanan-card h4 {
        font-size: 1.0625rem;
        font-weight: 600;
        color: #0f172a;
        margin-bottom: 0.5rem;
    }

    .layanan-card p {
        font-size: 0.875rem;
        color: #64748b;
        line-height: 1.6;
        margin: 0;
    }

    .syarat-section {
        background: #f8fafc;
    }

    .syarat-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .syarat-list li {
        position: relative;
        padding: 0.875rem 0 0.875rem 2rem;
        font-size: 0.9375rem;
        color: #334155;
        line-height: 1.5;
        border-bottom: 1px solid #f1f5f9;
    }

    .syarat-list li:last-child {
        border-bottom: none;
    }

    .syarat-list li::before {
        content: '\f00c';
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        position: absolute;
        left: 0;
        top: 0.875rem;
        width: 1.25rem;
        height: 1.25rem;
        background: #2563eb;
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.625rem;
    }

    .cta-section {
        background: linear-gradient(135deg, #0f172a, #1e293b);
        padding: 4rem 0;
        text-align: center;
    }

    .cta-section h2 {
        font-size: 1.75rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 0.75rem;
    }

    .cta-section p {
        font-size: 1rem;
        color: #94a3b8;
        max-width: 500px;
        margin: 0 auto 1.75rem;
    }

    .cta-section .btn-cta {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.8125rem 2rem;
        font-size: 0.9375rem;
        font-weight: 600;
        color: #fff;
        background: linear-gradient(135deg, #2563eb, #1d4ed8);
        border: none;
        border-radius: 0.75rem;
        text-decoration: none;
        transition: all 0.2s;
        cursor: pointer;
    }

    .cta-section .btn-cta:hover {
        box-shadow: 0 4px 16px rgba(37, 99, 235, 0.4);
        transform: translateY(-2px);
        text-decoration: none;
        color: #fff;
    }

    @media (max-width: 768px) {
        .hero-content h1 {
            font-size: 2rem;
        }
        .hero-stats {
            flex-wrap: wrap;
            gap: 1.5rem;
        }
        .section-custom .section-title {
            font-size: 1.5rem;
        }
    }
</style>

<section class="hero-section">
    <img src="<?= base_url('assets/images/slider/disnaker.jpeg') ?>" alt="" class="hero-bg">
    <div class="hero-content">
        <div class="hero-badge">
            <i class="fas fa-handshake"></i>
            Layanan Mediasi Hubungan Industrial
        </div>
        <h1>Dinas Tenaga Kerja<br><span>Kota Semarang</span></h1>
        <p>
            Disnaker melalui layanan mediasi hadir untuk membantu menyelesaikan
            perselisihan hubungan industrial secara adil, transparan, dan profesional.
        </p>
        <div class="hero-actions">
            <a href="<?= site_url('agenda') ?>" class="btn-primary-custom">
                <i class="fas fa-calendar-plus"></i>
                Ajukan Mediasi
            </a>
            <a href="<?= site_url('kontak') ?>" class="btn-outline-custom">
                <i class="fas fa-info-circle"></i>
                Hubungi Kami
            </a>
        </div>
    </div>
</section>

<section class="section-custom">
    <div class="container">
        <div class="text-center mb-4">
            <div class="section-label">
                <i class="fas fa-cube"></i>
                Layanan
            </div>
            <h2 class="section-title">Layanan Kami</h2>
            <p class="section-desc mx-auto">
                DISNAKER Kota Semarang menyediakan berbagai layanan ketenagakerjaan
                untuk masyarakat dan dunia usaha.
            </p>
        </div>

        <div class="layanan-grid">
            <div class="layanan-card">
                <div class="card-icon"><i class="fas fa-file-signature"></i></div>
                <h4>Kartu Kuning AK1</h4>
                <p>Daftar dan dapatkan Kartu Tanda Pencari Kerja untuk melamar pekerjaan serta mengakses informasi lowongan kerja melalui SIKER.</p>
            </div>
            <div class="layanan-card">
                <div class="card-icon"><i class="fas fa-passport"></i></div>
                <h4>Rekom Passpor CPMI</h4>
                <p>Dokumen persetujuan yang diperlukan Calon Pekerja Migran Indonesia dalam pengurusan Paspor di Kantor Imigrasi.</p>
            </div>
            <div class="layanan-card">
                <div class="card-icon"><i class="fas fa-gavel"></i></div>
                <h4>Mediasi Perselisihan</h4>
                <p>Penyelesaian perselisihan hubungan industrial antara pekerja dan pengusaha secara musyawarah melalui mediator.</p>
            </div>
            <div class="layanan-card">
                <div class="card-icon"><i class="fas fa-chalkboard-user"></i></div>
                <h4>Pelatihan BLK</h4>
                <p>Pelatihan berbasis kompetensi untuk meningkatkan keterampilan dan daya saing tenaga kerja di Kota Semarang.</p>
            </div>
            <div class="layanan-card">
                <div class="card-icon"><i class="fas fa-scale-balanced"></i></div>
                <h4>Hubungan Industrial</h4>
                <p>Fasilitasi penyelesaian perselisihan antara pekerja dengan perusahaan maupun antar pekerja melalui proses mediasi.</p>
            </div>
            <div class="layanan-card">
                <div class="card-icon"><i class="fas fa-phone-volume"></i></div>
                <h4>Konsultasi Ketenagakerjaan</h4>
                <p>Layanan konsultasi dan informasi seputar hak dan kewajiban pekerja, pengupahan, serta peraturan ketenagakerjaan.</p>
            </div>
        </div>
    </div>
</section>

<section class="section-custom syarat-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="<?= base_url('assets/images/about/2.jpg') ?>" alt="Mediasi DISNAKER" class="img-fluid rounded-4 shadow-sm" style="border-radius:1rem;width:100%;">
            </div>
            <div class="col-lg-6">
                <div class="section-label">
                    <i class="fas fa-clipboard-list"></i>
                    Persyaratan
                </div>
                <h2 class="section-title">Syarat Mediasi</h2>
                <p class="section-desc mb-3">di Dinas Tenaga Kerja Kota Semarang</p>
                <ul class="syarat-list">
                    <li>Mengajukan surat permohonan mediasi secara resmi yang ditandatangani oleh pihak pelapor.</li>
                    <li>Melampirkan dokumen pendukung seperti kontrak kerja, surat PHK, atau dokumen lain yang relevan.</li>
                    <li>Identitas lengkap dari pihak pelapor dan pihak yang dilaporkan.</li>
                    <li>Perselisihan merupakan wewenang Disnaker dan belum masuk ke ranah hukum.</li>
                    <li>Bersedia mengikuti proses mediasi sesuai prosedur yang ditetapkan.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Siap Mengajukan Mediasi?</h2>
        <p>Ajukan permohonan mediasi secara online melalui sistem kami. Proses cepat, mudah, dan transparan.</p>
        <a href="<?= site_url('agenda') ?>" class="btn-cta">
            <i class="fas fa-arrow-right"></i>
            Ajukan Sekarang
        </a>
    </div>
</section>

<script>
    $('.hero-section').css('margin-top', '-' + $('.navigation').outerHeight() + 'px');
</script>