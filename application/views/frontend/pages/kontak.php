<style>
    .kontak-header {
        background: linear-gradient(135deg, #0f172a, #1e293b);
        padding: 4rem 0 3rem;
        text-align: center;
        margin-top: -1px;
    }

    .kontak-header h1 {
        font-size: 2rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 0.5rem;
    }

    .kontak-header p {
        font-size: 1rem;
        color: #94a3b8;
        max-width: 500px;
        margin: 0 auto;
    }

    .kontak-section {
        padding: 3rem 0 4rem;
    }

    .kontak-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
        align-items: start;
    }

    .kontak-card {
        background: #fff;
        border: 1px solid #f1f5f9;
        border-radius: 1.25rem;
        padding: 2rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
    }

    .kontak-card h2 {
        font-size: 1.125rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 0.25rem;
    }

    .kontak-card .card-sub {
        font-size: 0.875rem;
        color: #64748b;
        margin-bottom: 1.5rem;
    }

    .info-list {
        display: flex;
        flex-direction: column;
        gap: 1.25rem;
    }

    .info-item {
        display: flex;
        align-items: flex-start;
        gap: 0.875rem;
    }

    .info-item .info-icon {
        width: 42px;
        height: 42px;
        background: #eff6ff;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #2563eb;
        font-size: 1rem;
        flex-shrink: 0;
    }

    .info-item .info-text h4 {
        font-size: 0.8125rem;
        font-weight: 600;
        color: #0f172a;
        margin-bottom: 0.125rem;
    }

    .info-item .info-text p {
        font-size: 0.875rem;
        color: #64748b;
        margin: 0;
        line-height: 1.5;
    }

    .info-item .info-text a {
        color: #64748b;
        text-decoration: none;
        transition: color 0.2s;
    }

    .info-item .info-text a:hover {
        color: #2563eb;
    }

    .social-wrap {
        margin-top: 1.5rem;
        padding-top: 1.5rem;
        border-top: 1px solid #f1f5f9;
    }

    .social-wrap h4 {
        font-size: 0.8125rem;
        font-weight: 600;
        color: #0f172a;
        margin-bottom: 0.75rem;
    }

    .social-wrap .social-row {
        display: flex;
        gap: 0.5rem;
    }

    .social-wrap .social-row a {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #64748b;
        font-size: 0.9375rem;
        text-decoration: none;
        transition: all 0.2s;
    }

    .social-wrap .social-row a:hover {
        background: #2563eb;
        border-color: #2563eb;
        color: #fff;
        transform: translateY(-2px);
    }

    .form-group-custom {
        margin-bottom: 1.25rem;
    }

    .form-group-custom label {
        display: block;
        font-size: 0.8125rem;
        font-weight: 600;
        color: #334155;
        margin-bottom: 0.375rem;
    }

    .form-group-custom .input-wrap {
        position: relative;
    }

    .form-group-custom .input-wrap input,
    .form-group-custom .input-wrap textarea {
        width: 100%;
        padding: 0.75rem 1rem 0.75rem 2.625rem;
        font-size: 0.875rem;
        font-family: 'Inter', sans-serif;
        color: #0f172a;
        background: #f8fafc;
        border: 1.5px solid #e2e8f0;
        border-radius: 0.75rem;
        outline: none;
        transition: all 0.2s;
    }

    .form-group-custom .input-wrap textarea {
        padding-left: 1rem;
        min-height: 120px;
        resize: vertical;
    }

    .form-group-custom .input-wrap input::placeholder,
    .form-group-custom .input-wrap textarea::placeholder {
        color: #94a3b8;
    }

    .form-group-custom .input-wrap input:focus {
        background: #fff;
        border-color: #2563eb;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }

    .form-group-custom .input-wrap i {
        position: absolute;
        left: 0.875rem;
        top: 50%;
        transform: translateY(-50%);
        color: #94a3b8;
        font-size: 0.9375rem;
        pointer-events: none;
        transition: color 0.2s;
    }

    .form-group-custom .input-wrap input:focus ~ i {
        color: #2563eb;
    }

    .btn-send {
        width: 100%;
        padding: 0.8125rem;
        font-size: 0.875rem;
        font-weight: 600;
        font-family: 'Inter', sans-serif;
        color: #fff;
        background: linear-gradient(135deg, #2563eb, #1d4ed8);
        border: none;
        border-radius: 0.75rem;
        cursor: pointer;
        transition: all 0.2s;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
    }

    .btn-send:hover {
        background: linear-gradient(135deg, #1d4ed8, #1e40af);
        box-shadow: 0 4px 12px rgba(37, 99, 235, 0.35);
        transform: translateY(-1px);
    }

    @media (max-width: 768px) {
        .kontak-grid {
            grid-template-columns: 1fr;
        }
        .kontak-header h1 {
            font-size: 1.5rem;
        }
    }
</style>

<section class="kontak-header">
    <div class="container">
        <h1>Hubungi Kami</h1>
        <p>Silakan hubungi DISNAKER Kota Semarang untuk informasi lebih lanjut</p>
    </div>
</section>

<section class="kontak-section">
    <div class="container">
        <div class="kontak-grid">
            <div class="kontak-card">
                <h2>Informasi Kontak</h2>
                <p class="card-sub">Hubungi kami melalui saluran berikut</p>

                <div class="info-list">
                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-location-dot"></i></div>
                        <div class="info-text">
                            <h4>Alamat</h4>
                            <p><?= htmlspecialchars($this->config->item('disnaker_alamat')) ?></p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-phone"></i></div>
                        <div class="info-text">
                            <h4>Telepon</h4>
                            <p><a href="tel:<?= htmlspecialchars($this->config->item('disnaker_telp')) ?>"><?= htmlspecialchars($this->config->item('disnaker_telp')) ?></a></p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-fax"></i></div>
                        <div class="info-text">
                            <h4>Fax</h4>
                            <p><?= htmlspecialchars($this->config->item('disnaker_fax')) ?></p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-envelope"></i></div>
                        <div class="info-text">
                            <h4>Email</h4>
                            <p><a href="mailto:<?= htmlspecialchars($this->config->item('disnaker_email')) ?>"><?= htmlspecialchars($this->config->item('disnaker_email')) ?></a></p>
                        </div>
                    </div>
                </div>

                <div class="social-wrap">
                    <h4>Ikuti Kami</h4>
                    <div class="social-row">
                        <a href="https://www.facebook.com/disnakersmg/" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://x.com/disnakersmg" target="_blank" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
                        <a href="https://www.instagram.com/disnakersmg" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/disnakersmg" target="_blank" aria-label="Youtube"><i class="fab fa-youtube"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=62248440335" target="_blank" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="kontak-card">
                <h2>Kirim Pesan</h2>
                <p class="card-sub">Isi form di bawah untuk mengirimkan pesan kepada kami</p>

                <form id="contact-form" method="post" role="form">
                    <div class="form-group-custom">
                        <label for="name">Nama Lengkap</label>
                        <div class="input-wrap">
                            <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <div class="form-group-custom">
                        <label for="email">Email</label>
                        <div class="input-wrap">
                            <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>
                    <div class="form-group-custom">
                        <label for="subject">Subjek</label>
                        <div class="input-wrap">
                            <input type="text" id="subject" name="subject" placeholder="Judul pesan" required>
                            <i class="fas fa-tag"></i>
                        </div>
                    </div>
                    <div class="form-group-custom">
                        <label for="message">Pesan</label>
                        <div class="input-wrap">
                            <textarea id="message" name="message" placeholder="Tulis pesan Anda di sini..." required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn-send">
                        <i class="fas fa-paper-plane"></i>
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>