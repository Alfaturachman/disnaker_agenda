<footer class="footer-custom">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col">
                <div class="footer-brand">
                    <div class="footer-logo">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h4>DISNAKER Kota Semarang</h4>
                    <p>Dinas Tenaga Kerja Kota Semarang — melayani mediasi hubungan industrial secara adil dan profesional.</p>
                </div>
            </div>
            <div class="footer-col">
                <h5>Alamat</h5>
                <p><i class="fas fa-location-dot"></i> <?= htmlspecialchars($this->config->item('disnaker_alamat')) ?></p>
                <h5 class="mt-3">Kontak</h5>
                <p><i class="fas fa-envelope"></i> <a href="mailto:<?= htmlspecialchars($this->config->item('disnaker_email')) ?>"><?= htmlspecialchars($this->config->item('disnaker_email')) ?></a></p>
                <p><i class="fas fa-phone"></i> <a href="tel:<?= htmlspecialchars($this->config->item('disnaker_telp')) ?>"><?= htmlspecialchars($this->config->item('disnaker_telp')) ?></a></p>
            </div>
            <div class="footer-col">
                <h5>Jam Operasional</h5>
                <ul class="jam-list">
                    <?php $jamOp = $this->config->item('disnaker_jam_operasional'); ?>
                    <?php foreach ($jamOp as $hari => $jam): ?>
                        <li><span class="hari"><?= htmlspecialchars($hari) ?></span><span class="jam"><?= htmlspecialchars($jam) ?></span></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="footer-col">
                <h5>Ikuti Kami</h5>
                <div class="social-links">
                    <a href="https://www.facebook.com/disnakersmg" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/disnakersmg" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://x.com/disnakersmg" target="_blank" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
                    <a href="https://www.youtube.com/disnakersmg" target="_blank" aria-label="Youtube"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.tiktok.com/@disnakersmg" target="_blank" aria-label="Tiktok"><i class="fab fa-tiktok"></i></a>
                </div>
                <h5 class="mt-4">Navigasi</h5>
                <ul class="nav-links">
                    <li><a href="<?= base_url() ?>">Beranda</a></li>
                    <li><a href="<?= site_url('agenda') ?>">Agenda</a></li>
                    <li><a href="<?= site_url('kontak') ?>">Kontak</a></li>
                    <li><a href="<?= site_url('auth/login') ?>">Masuk</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p>&copy; <?= date('Y') ?> DISNAKER Kota Semarang. All rights reserved.</p>
        </div>
    </div>
</footer>

<style>
    .footer-custom {
        background: #0f172a;
        color: #cbd5e1;
        font-family: 'Inter', sans-serif;
    }

    .footer-grid {
        display: grid;
        grid-template-columns: 1.5fr 1.25fr 1fr 1.25fr;
        gap: 2.5rem;
        padding: 3.5rem 0 2.5rem;
    }

    .footer-col h5 {
        font-size: 0.875rem;
        font-weight: 600;
        color: #f1f5f9;
        margin-bottom: 1rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    .footer-brand {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .footer-logo {
        width: 44px;
        height: 44px;
        background: linear-gradient(135deg, #2563eb, #1d4ed8);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 1.25rem;
        margin-bottom: 0.75rem;
    }

    .footer-brand h4 {
        font-size: 1.0625rem;
        font-weight: 700;
        color: #f1f5f9;
        margin-bottom: 0.5rem;
    }

    .footer-brand p {
        font-size: 0.875rem;
        color: #94a3b8;
        line-height: 1.7;
        margin: 0;
    }

    .footer-col p {
        font-size: 0.875rem;
        color: #94a3b8;
        line-height: 1.7;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: flex-start;
        gap: 0.5rem;
    }

    .footer-col p i {
        color: #60a5fa;
        margin-top: 0.25rem;
        width: 1rem;
        flex-shrink: 0;
    }

    .footer-col p a {
        color: #94a3b8;
        text-decoration: none;
        transition: color 0.2s;
    }

    .footer-col p a:hover {
        color: #60a5fa;
    }

    .jam-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .jam-list li {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.375rem 0;
        font-size: 0.8125rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .jam-list li:last-child {
        border-bottom: none;
    }

    .jam-list .hari {
        color: #94a3b8;
    }

    .jam-list .jam {
        color: #e2e8f0;
        font-weight: 500;
    }

    .social-links {
        display: flex;
        gap: 0.625rem;
    }

    .social-links a {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.08);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #94a3b8;
        font-size: 0.9375rem;
        text-decoration: none;
        transition: all 0.2s;
    }

    .social-links a:hover {
        background: #2563eb;
        border-color: #2563eb;
        color: #fff;
        transform: translateY(-2px);
    }

    .nav-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .nav-links li {
        margin-bottom: 0.375rem;
    }

    .nav-links a {
        font-size: 0.875rem;
        color: #94a3b8;
        text-decoration: none;
        transition: color 0.2s;
    }

    .nav-links a:hover {
        color: #60a5fa;
    }

    .footer-bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.06);
        padding: 1.25rem 0;
        text-align: center;
    }

    .footer-bottom p {
        font-size: 0.8125rem;
        color: #64748b;
        margin: 0;
    }

    .mt-3 {
        margin-top: 1rem;
    }
    .mt-4 {
        margin-top: 1.5rem;
    }

    @media (max-width: 992px) {
        .footer-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 576px) {
        .footer-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }
    }
</style>

<script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/bootstrap/bootstrap.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/parallax/jquery.parallax-1.1.3.js"></script>
<script src="<?= base_url('assets/') ?>plugins/slick/slick.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/smooth-scroll/smooth-scroll.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?= htmlspecialchars($this->config->item('google_maps_key')); ?>"></script>
<script src="<?= base_url('assets/plugins/google-map/gmap.js'); ?>"></script>
<script src="<?= base_url('assets/') ?>js/script.js"></script>

</body>
</html>