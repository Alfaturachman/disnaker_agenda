<style>
    .agenda-header {
        background: linear-gradient(135deg, #0f172a, #1e293b);
        padding: 4rem 0 3rem;
        text-align: center;
        margin-top: -1px;
    }

    .agenda-header h1 {
        font-size: 2rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 0.5rem;
    }

    .agenda-header p {
        font-size: 1rem;
        color: #94a3b8;
        max-width: 500px;
        margin: 0 auto;
    }

    .agenda-section {
        padding: 3rem 0 4rem;
    }

    /* ─── Modal ─── */
    .modal-overlay {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(15, 23, 42, 0.6);
        backdrop-filter: blur(4px);
        z-index: 9999;
        align-items: flex-start;
        justify-content: center;
        padding: 2rem 1rem;
        overflow-y: auto;
    }

    .modal-overlay.open {
        display: flex;
    }

    .modal-content {
        background: #fff;
        border-radius: 1.25rem;
        max-width: 680px;
        width: 100%;
        margin-top: 2rem;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
        animation: modalIn 0.25s ease-out;
    }

    @keyframes modalIn {
        from {
            opacity: 0;
            transform: translateY(20px) scale(0.97);
        }
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    .modal-content .modal-head {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1.5rem 2rem 0;
    }

    .modal-content .modal-head h2 {
        font-size: 1.125rem;
        font-weight: 700;
        color: #0f172a;
        margin: 0;
    }

    .modal-content .modal-head .btn-close-modal {
        background: none;
        border: none;
        font-size: 1.375rem;
        color: #94a3b8;
        cursor: pointer;
        padding: 0.25rem;
        line-height: 1;
        transition: color 0.2s;
    }

    .modal-content .modal-head .btn-close-modal:hover {
        color: #475569;
    }

    .modal-content .modal-subtitle {
        font-size: 0.875rem;
        color: #64748b;
        padding: 0 2rem 1.25rem;
        margin: 0;
        border-bottom: 1px solid #f8fafc;
    }

    .modal-content .modal-body {
        padding: 1.5rem 2rem 2rem;
    }

    .modal-content .form-group {
        margin-bottom: 1.25rem;
    }

    .modal-content .form-group label {
        display: block;
        font-size: 0.8125rem;
        font-weight: 600;
        color: #334155;
        margin-bottom: 0.375rem;
    }

    .modal-content .input-wrapper {
        position: relative;
    }

    .modal-content .input-wrapper input,
    .modal-content .input-wrapper textarea {
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
        box-sizing: border-box;
    }

    .modal-content .input-wrapper textarea {
        padding-left: 1rem;
        min-height: 100px;
        resize: vertical;
    }

    .modal-content .input-wrapper input::placeholder,
    .modal-content .input-wrapper textarea::placeholder {
        color: #94a3b8;
    }

    .modal-content .input-wrapper input:focus {
        background: #fff;
        border-color: #2563eb;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }

    .modal-content .input-wrapper i {
        position: absolute;
        left: 0.875rem;
        top: 50%;
        transform: translateY(-50%);
        color: #94a3b8;
        font-size: 0.9375rem;
        pointer-events: none;
        transition: color 0.2s;
    }

    .modal-content .input-wrapper input:focus~i {
        color: #2563eb;
    }

    .form-row-2 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
    }

    .btn-submit {
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
        margin-top: 0.5rem;
    }

    .btn-submit:hover {
        background: linear-gradient(135deg, #1d4ed8, #1e40af);
        box-shadow: 0 4px 12px rgba(37, 99, 235, 0.35);
        transform: translateY(-1px);
    }

    .btn-submit:active {
        transform: translateY(0);
    }

    /* ─── Riwayat ─── */
    .riwayat-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
        margin-bottom: 1.5rem;
        flex-wrap: wrap;
    }

    .riwayat-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #0f172a;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin: 0;
    }

    .riwayat-title i {
        color: #2563eb;
    }

    .btn-open-modal {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.625rem 1.25rem;
        font-size: 0.8125rem;
        font-weight: 600;
        font-family: 'Inter', sans-serif;
        color: #fff;
        background: linear-gradient(135deg, #2563eb, #1d4ed8);
        border: none;
        border-radius: 0.75rem;
        cursor: pointer;
        text-decoration: none;
        transition: all 0.2s;
        white-space: nowrap;
    }

    .btn-open-modal:hover {
        background: linear-gradient(135deg, #1d4ed8, #1e40af);
        box-shadow: 0 4px 12px rgba(37, 99, 235, 0.35);
        transform: translateY(-1px);
        text-decoration: none;
        color: #fff;
    }

    .riwayat-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.25rem;
    }

    .riwayat-card {
        position: relative;
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(226, 232, 240, 0.6);
        border-radius: 1.125rem;
        box-shadow:
            0 1px 3px rgba(0, 0, 0, 0.04),
            0 8px 32px rgba(0, 0, 0, 0.02);
        transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    .riwayat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        z-index: 1;
    }

    .riwayat-card.status-disetujui::before {
        background: linear-gradient(90deg, #22c55e, #16a34a);
    }

    .riwayat-card.status-ditolak::before {
        background: linear-gradient(90deg, #ef4444, #dc2626);
    }

    .riwayat-card.status-diproses::before {
        background: linear-gradient(90deg, #f59e0b, #d97706);
    }

    .riwayat-card::after {
        content: '';
        position: absolute;
        inset: -1px;
        border-radius: 1.125rem;
        opacity: 0;
        transition: opacity 0.35s ease;
        pointer-events: none;
    }

    .riwayat-card.status-disetujui::after {
        box-shadow: 0 0 0 1px rgba(34, 197, 94, 0.2), 0 8px 32px rgba(34, 197, 94, 0.08);
    }

    .riwayat-card.status-ditolak::after {
        box-shadow: 0 0 0 1px rgba(239, 68, 68, 0.2), 0 8px 32px rgba(239, 68, 68, 0.08);
    }

    .riwayat-card.status-diproses::after {
        box-shadow: 0 0 0 1px rgba(245, 158, 11, 0.2), 0 8px 32px rgba(245, 158, 11, 0.08);
    }

    .riwayat-card:hover {
        border-color: rgba(226, 232, 240, 0.2);
        transform: translateY(-4px);
        box-shadow:
            0 4px 16px rgba(0, 0, 0, 0.06),
            0 12px 48px rgba(0, 0, 0, 0.04);
    }

    .riwayat-card:hover::after {
        opacity: 1;
    }

    .riwayat-card .card-status-strip {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 1.125rem 1.5rem 0.875rem;
        background: rgba(248, 250, 252, 0.5);
        border-bottom: 1px solid rgba(241, 245, 249, 0.6);
    }

    .riwayat-card .card-status-strip .status-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        flex-shrink: 0;
    }

    .riwayat-card.status-disetujui .card-status-strip .status-dot {
        background: #22c55e;
        box-shadow: 0 0 0 3px rgba(34, 197, 94, 0.15);
    }

    .riwayat-card.status-ditolak .card-status-strip .status-dot {
        background: #ef4444;
        box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.15);
    }

    .riwayat-card.status-diproses .card-status-strip .status-dot {
        background: #f59e0b;
        box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.15);
    }

    .riwayat-card .card-status-strip .status-label {
        font-size: 0.625rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.04em;
        padding: 0.1875rem 0.625rem;
        border-radius: 0.375rem;
        line-height: 1.4;
    }

    .riwayat-card.status-disetujui .card-status-strip .status-label {
        color: #16a34a;
        background: rgba(34, 197, 94, 0.1);
        border: 1px solid rgba(34, 197, 94, 0.2);
    }

    .riwayat-card.status-ditolak .card-status-strip .status-label {
        color: #dc2626;
        background: rgba(239, 68, 68, 0.1);
        border: 1px solid rgba(239, 68, 68, 0.2);
    }

    .riwayat-card.status-diproses .card-status-strip .status-label {
        color: #d97706;
        background: rgba(245, 158, 11, 0.1);
        border: 1px solid rgba(245, 158, 11, 0.2);
    }

    .riwayat-card .card-status-strip .status-nomor {
        margin-left: auto;
        font-size: 0.6875rem;
        font-weight: 600;
        color: #94a3b8;
        letter-spacing: 0.02em;
    }

    .riwayat-card .card-body {
        padding: 1.25rem 1.5rem 0.75rem;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .riwayat-card .card-head {
        margin-bottom: 1.125rem;
    }

    .riwayat-card .card-head h5 {
        font-size: 1.0625rem;
        font-weight: 700;
        color: #0f172a;
        margin: 0 0 0.25rem;
        line-height: 1.35;
    }

    .riwayat-card .card-head .case-type {
        display: inline-flex;
        align-items: center;
        gap: 0.375rem;
        font-size: 0.75rem;
        font-weight: 500;
        color: #64748b;
    }

    .riwayat-card .card-head .case-type i {
        color: #94a3b8;
        font-size: 0.6875rem;
    }

    .riwayat-card .detail-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0.625rem;
    }

    .riwayat-card .detail-grid .detail-item {
        display: flex;
        align-items: center;
        gap: 0.625rem;
        padding: 0.5rem 0.75rem;
        background: rgba(248, 250, 252, 0.6);
        border: 1px solid rgba(241, 245, 249, 0.4);
        border-radius: 0.625rem;
        min-width: 0;
        transition: background 0.2s;
    }

    .riwayat-card:hover .detail-grid .detail-item {
        background: rgba(248, 250, 252, 0.9);
    }

    .riwayat-card .detail-grid .detail-item .di-icon {
        width: 30px;
        height: 30px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        font-size: 0.75rem;
    }

    .riwayat-card .detail-grid .detail-item .di-icon.di-blue {
        background: linear-gradient(135deg, #eff6ff, #dbeafe);
        color: #3b82f6;
    }

    .riwayat-card .detail-grid .detail-item .di-icon.di-green {
        background: linear-gradient(135deg, #f0fdf4, #dcfce7);
        color: #22c55e;
    }

    .riwayat-card .detail-grid .detail-item .di-icon.di-amber {
        background: linear-gradient(135deg, #fffbeb, #fef3c7);
        color: #f59e0b;
    }

    .riwayat-card .detail-grid .detail-item .di-icon.di-pink {
        background: linear-gradient(135deg, #fdf2f8, #fce7f3);
        color: #ec4899;
    }

    .riwayat-card .detail-grid .detail-item .di-text {
        display: flex;
        flex-direction: column;
        min-width: 0;
    }

    .riwayat-card .detail-grid .detail-item .di-text .di-label {
        font-size: 0.625rem;
        font-weight: 600;
        color: #94a3b8;
        text-transform: uppercase;
        letter-spacing: 0.04em;
        margin-bottom: 0.0625rem;
    }

    .riwayat-card .detail-grid .detail-item .di-text .di-value {
        font-size: 0.8125rem;
        font-weight: 600;
        color: #1e293b;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .riwayat-card .detail-grid .detail-item.full {
        grid-column: 1 / -1;
    }

    .riwayat-card .card-footer {
        padding: 0.75rem 1.5rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 0.75rem;
        border-top: 1px solid rgba(241, 245, 249, 0.6);
        margin-top: auto;
    }

    .riwayat-card .card-footer .footer-status {
        font-size: 0.6875rem;
        font-weight: 600;
        color: #94a3b8;
    }

    .riwayat-card .btn-detail {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        font-size: 0.75rem;
        font-weight: 700;
        color: #fff;
        background: linear-gradient(135deg, #1e293b, #0f172a);
        border: none;
        border-radius: 0.625rem;
        text-decoration: none;
        transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
        letter-spacing: 0.01em;
        text-transform: uppercase;
    }

    .riwayat-card .btn-detail i {
        font-size: 0.6875rem;
        transition: transform 0.25s;
    }

    .riwayat-card .btn-detail:hover {
        background: linear-gradient(135deg, #1d4ed8, #2563eb);
        box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
        transform: translateY(-1px);
        text-decoration: none;
        color: #fff;
    }

    .riwayat-card .btn-detail:hover i {
        transform: translateX(4px);
    }

    @media (max-width: 420px) {
        .riwayat-card .detail-grid {
            grid-template-columns: 1fr;
        }
        .riwayat-card .card-status-strip {
            flex-wrap: wrap;
        }
    }

    .empty-state {
        text-align: center;
        padding: 3rem 1rem;
        color: #94a3b8;
    }

    .empty-state i {
        font-size: 2.5rem;
        color: #cbd5e1;
        margin-bottom: 1rem;
    }

    .empty-state p {
        font-size: 0.9375rem;
        margin: 0;
    }

    .login-card {
        background: #fff;
        border: 1px solid #e2e8f0;
        border-radius: 1.25rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04);
    }

    .login-prompt {
        text-align: center;
        padding: 4rem 1rem;
    }

    .login-prompt .prompt-icon {
        width: 64px;
        height: 64px;
        background: #eff6ff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
        color: #2563eb;
        font-size: 1.5rem;
    }

    .login-prompt h3 {
        font-size: 1.25rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 0.5rem;
    }

    .login-prompt p {
        font-size: 0.9375rem;
        color: #64748b;
        margin-bottom: 1.5rem;
    }

    .login-prompt .btn-login-prompt {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.75rem 1.75rem;
        font-size: 0.875rem;
        font-weight: 600;
        color: #fff;
        background: linear-gradient(135deg, #2563eb, #1d4ed8);
        border: none;
        border-radius: 0.75rem;
        text-decoration: none;
        transition: all 0.2s;
    }

    .login-prompt .btn-login-prompt:hover {
        box-shadow: 0 4px 12px rgba(37, 99, 235, 0.35);
        transform: translateY(-2px);
        text-decoration: none;
        color: #fff;
    }

    @media (max-width: 640px) {
        .form-row-2 {
            grid-template-columns: 1fr;
        }
        .riwayat-grid {
            grid-template-columns: 1fr;
        }
        .agenda-header h1 {
            font-size: 1.5rem;
        }
        .modal-content .modal-head,
        .modal-content .modal-body {
            padding-left: 1.25rem;
            padding-right: 1.25rem;
        }
        .modal-content .modal-subtitle {
            padding-left: 1.25rem;
            padding-right: 1.25rem;
        }
    }
</style>

<section class="agenda-header">
    <div class="container">
        <h1>Agenda Mediasi</h1>
        <p>Ajukan permohonan mediasi hubungan industrial secara online</p>
    </div>
</section>

<section class="agenda-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <?php if ($this->session->userdata('user_id')) : ?>

                    <div class="riwayat-top">
                        <h3 class="riwayat-title">
                            <i class="fas fa-clock-rotate"></i>
                            Riwayat Mediasi
                        </h3>
                        <button class="btn-open-modal" onclick="openModal()">
                            <i class="fas fa-plus"></i>
                            Ajukan Mediasi
                        </button>
                    </div>

                    <?php if (!empty($agendas)) : ?>
                        <div class="riwayat-grid">
                            <?php foreach ($agendas as $agenda) : ?>
                                <div class="riwayat-card status-<?= $agenda['status']; ?>">
                                    <div class="card-status-strip">
                                        <span class="status-dot"></span>
                                        <span class="status-label"><?= ucfirst(htmlspecialchars($agenda['status'])); ?></span>
                                        <span class="status-nomor"><?= htmlspecialchars($agenda['nomor_mediasi']); ?></span>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-head">
                                            <h5><?= htmlspecialchars($agenda['nama_kasus']); ?></h5>
                                            <div class="case-type">
                                                <i class="fas fa-gavel"></i>
                                                <?= htmlspecialchars($agenda['jenis_kasus']); ?>
                                            </div>
                                        </div>
                                        <div class="detail-grid">
                                            <div class="detail-item">
                                                <div class="di-icon di-blue"><i class="fas fa-user"></i></div>
                                                <div class="di-text">
                                                    <span class="di-label">Pihak 1</span>
                                                    <span class="di-value"><?= htmlspecialchars($agenda['nama_pihak_satu']); ?></span>
                                                </div>
                                            </div>
                                            <div class="detail-item">
                                                <div class="di-icon di-blue"><i class="fas fa-user"></i></div>
                                                <div class="di-text">
                                                    <span class="di-label">Pihak 2</span>
                                                    <span class="di-value"><?= htmlspecialchars($agenda['nama_pihak_dua']); ?></span>
                                                </div>
                                            </div>
                                            <div class="detail-item">
                                                <div class="di-icon di-green"><i class="fas fa-calendar"></i></div>
                                                <div class="di-text">
                                                    <span class="di-label">Tanggal</span>
                                                    <span class="di-value"><?= htmlspecialchars(date("d-m-Y", strtotime($agenda['tgl_mediasi']))); ?></span>
                                                </div>
                                            </div>
                                            <div class="detail-item">
                                                <div class="di-icon di-pink"><i class="fas fa-location-dot"></i></div>
                                                <div class="di-text">
                                                    <span class="di-label">Tempat</span>
                                                    <span class="di-value"><?= htmlspecialchars($agenda['tempat']); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <span class="footer-status"><?= htmlspecialchars($agenda['nomor_mediasi']); ?> &middot; <?= ucfirst(htmlspecialchars($agenda['status'])); ?></span>
                                        <a href="<?= site_url('agenda/detail/' . $agenda['id']); ?>" class="btn-detail">
                                            Detail <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php else : ?>
                        <div class="empty-state">
                            <i class="fas fa-inbox"></i>
                            <p>Belum ada agenda mediasi yang diajukan.</p>
                        </div>
                    <?php endif; ?>

                    <!-- ─── MODAL FORM ─── -->
                    <div class="modal-overlay" id="formModal">
                        <div class="modal-content">
                            <div class="modal-head">
                                <h2>Form Pengajuan Mediasi</h2>
                                <button class="btn-close-modal" onclick="closeModal()">&times;</button>
                            </div>
                            <p class="modal-subtitle">Isi data berikut untuk mengajukan permohonan mediasi baru</p>
                            <div class="modal-body">
                                <form action="<?= base_url('agenda/add'); ?>" method="post">
                                    <div class="form-row-2">
                                        <div class="form-group">
                                            <label for="nama_pihak_satu">Nama Pihak 1 <span class="text-danger">*</span></label>
                                            <div class="input-wrapper">
                                                <input type="text" id="nama_pihak_satu" name="nama_pihak_satu" placeholder="Nama lengkap" value="<?= set_value('nama_pihak_satu', $this->session->userdata('user_name')); ?>" required>
                                                <i class="fas fa-user"></i>
                                            </div>
                                            <?= form_error('nama_pihak_satu', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_pihak_dua">Nama Pihak 2 <span class="text-danger">*</span></label>
                                            <div class="input-wrapper">
                                                <input type="text" id="nama_pihak_dua" name="nama_pihak_dua" placeholder="Nama lengkap" value="<?= set_value('nama_pihak_dua'); ?>" required>
                                                <i class="fas fa-user"></i>
                                            </div>
                                            <?= form_error('nama_pihak_dua', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-row-2">
                                        <div class="form-group">
                                            <label for="tgl_mediasi">Tanggal Mediasi <span class="text-danger">*</span></label>
                                            <div class="input-wrapper">
                                                <input type="date" id="tgl_mediasi" name="tgl_mediasi" value="<?= set_value('tgl_mediasi'); ?>" required>
                                                <i class="fas fa-calendar"></i>
                                            </div>
                                            <?= form_error('tgl_mediasi', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="waktu_mediasi">Waktu Mediasi <span class="text-danger">*</span></label>
                                            <div class="input-wrapper">
                                                <input type="time" id="waktu_mediasi" name="waktu_mediasi" value="<?= set_value('waktu_mediasi'); ?>" required>
                                                <i class="fas fa-clock"></i>
                                            </div>
                                            <?= form_error('waktu_mediasi', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat">Alamat / Tempat Mediasi <span class="text-danger">*</span></label>
                                        <div class="input-wrapper">
                                            <input type="text" id="alamat" name="alamat" placeholder="Alamat lengkap lokasi mediasi" value="<?= set_value('alamat'); ?>" required>
                                            <i class="fas fa-location-dot"></i>
                                        </div>
                                        <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="jenis_kasus">Jenis Kasus <span class="text-danger">*</span></label>
                                        <div class="input-wrapper">
                                            <input type="text" id="jenis_kasus" name="jenis_kasus" placeholder="Contoh: PHK, Upah, Mogok Kerja, dll" value="<?= set_value('jenis_kasus'); ?>" required>
                                            <i class="fas fa-gavel"></i>
                                        </div>
                                        <?= form_error('jenis_kasus', '<small class="text-danger">', '</small>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="deskripsi_kasus">Deskripsi Kasus <span class="text-danger">*</span></label>
                                        <div class="input-wrapper">
                                            <textarea id="deskripsi_kasus" name="deskripsi_kasus" placeholder="Jelaskan secara singkat kronologi perselisihan yang terjadi" required><?= set_value('deskripsi_kasus'); ?></textarea>
                                        </div>
                                        <?= form_error('deskripsi_kasus', '<small class="text-danger">', '</small>'); ?>
                                    </div>

                                    <button type="submit" class="btn-submit">
                                        <i class="fas fa-paper-plane"></i>
                                        Ajukan Mediasi
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <script>
                        function openModal() {
                            document.getElementById('formModal').classList.add('open');
                            document.body.style.overflow = 'hidden';
                        }

                        function closeModal() {
                            document.getElementById('formModal').classList.remove('open');
                            document.body.style.overflow = '';
                        }

                        document.getElementById('formModal').addEventListener('click', function(e) {
                            if (e.target === this) closeModal();
                        });

                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'Escape') closeModal();
                        });
                    </script>

                <?php else : ?>
                    <div class="login-card">
                        <div class="login-prompt">
                            <div class="prompt-icon">
                                <i class="fas fa-right-to-bracket"></i>
                            </div>
                            <h3>Silakan Masuk Terlebih Dahulu</h3>
                            <p>Anda perlu login untuk mengajukan permohonan mediasi dan melihat riwayat agenda.</p>
                            <a href="<?= site_url('auth/login'); ?>" class="btn-login-prompt">
                                <i class="fas fa-arrow-right-to-bracket"></i>
                                Masuk ke Akun
                            </a>
                            <div style="margin-top: 1rem;">
                                <a href="<?= site_url('auth/register'); ?>" style="font-size:0.875rem;color:#2563eb;text-decoration:none;">
                                    Belum punya akun? Daftar di sini
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>