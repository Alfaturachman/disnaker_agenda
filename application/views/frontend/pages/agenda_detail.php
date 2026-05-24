<style>
    .detail-header {
        background: linear-gradient(135deg, #0f172a, #1e293b);
        padding: 4rem 0 3rem;
        text-align: center;
        margin-top: -1px;
    }

    .detail-header h1 {
        font-size: 2rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 0.5rem;
    }

    .detail-header p {
        font-size: 1rem;
        color: #94a3b8;
    }

    .detail-section {
        padding: 3rem 0 4rem;
    }

    .detail-card {
        background: #fff;
        border: 1px solid #f1f5f9;
        border-radius: 1.25rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        overflow: hidden;
    }

    .detail-card .card-top {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 1rem;
        padding: 1.75rem 2rem 1.25rem;
        border-bottom: 1px solid #f8fafc;
    }

    .detail-card .card-top .case-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #0f172a;
        margin: 0;
    }

    .detail-card .card-top .case-number {
        font-size: 0.8125rem;
        color: #64748b;
        margin-top: 0.125rem;
    }

    .status-badge-detail {
        display: inline-flex;
        align-items: center;
        gap: 0.375rem;
        padding: 0.375rem 1rem;
        border-radius: 100px;
        font-size: 0.8125rem;
        font-weight: 600;
        white-space: nowrap;
        flex-shrink: 0;
    }

    .status-badge-detail.disetujui {
        background: #f0fdf4;
        color: #16a34a;
    }

    .status-badge-detail.ditolak {
        background: #fef2f2;
        color: #dc2626;
    }

    .status-badge-detail.diproses {
        background: #fffbeb;
        color: #d97706;
    }

    .detail-card .card-body {
        padding: 1.5rem 2rem 2rem;
    }

    .detail-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.25rem 2rem;
    }

    .detail-item {
        display: flex;
        flex-direction: column;
        gap: 0.25rem;
    }

    .detail-item.full {
        grid-column: 1 / -1;
    }

    .detail-item .item-label {
        font-size: 0.75rem;
        font-weight: 600;
        color: #94a3b8;
        text-transform: uppercase;
        letter-spacing: 0.04em;
    }

    .detail-item .item-value {
        font-size: 0.9375rem;
        color: #0f172a;
        font-weight: 500;
    }

    .detail-card .card-footer {
        padding: 1rem 2rem;
        border-top: 1px solid #f8fafc;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .detail-card .card-footer .btn-back {
        display: inline-flex;
        align-items: center;
        gap: 0.375rem;
        padding: 0.625rem 1.25rem;
        font-size: 0.8125rem;
        font-weight: 600;
        color: #475569;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 0.625rem;
        text-decoration: none;
        transition: all 0.2s;
    }

    .detail-card .card-footer .btn-back:hover {
        background: #f1f5f9;
        text-decoration: none;
        color: #0f172a;
    }

    .not-found {
        text-align: center;
        padding: 4rem 1rem;
    }

    .not-found i {
        font-size: 3rem;
        color: #cbd5e1;
        margin-bottom: 1rem;
    }

    .not-found p {
        font-size: 1rem;
        color: #64748b;
        margin-bottom: 1.5rem;
    }

    .not-found .btn-back {
        display: inline-flex;
        align-items: center;
        gap: 0.375rem;
        padding: 0.625rem 1.25rem;
        font-size: 0.8125rem;
        font-weight: 600;
        color: #fff;
        background: linear-gradient(135deg, #2563eb, #1d4ed8);
        border: none;
        border-radius: 0.625rem;
        text-decoration: none;
        transition: all 0.2s;
    }

    .not-found .btn-back:hover {
        box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
        transform: translateY(-1px);
        text-decoration: none;
        color: #fff;
    }

    @media (max-width: 640px) {
        .detail-grid {
            grid-template-columns: 1fr;
        }
        .detail-card .card-top {
            flex-direction: column;
            padding: 1.25rem 1.25rem 1rem;
        }
        .detail-card .card-body {
            padding: 1.25rem;
        }
        .detail-card .card-footer {
            padding: 1rem 1.25rem;
        }
        .detail-header h1 {
            font-size: 1.5rem;
        }
    }
</style>

<section class="detail-header">
    <div class="container">
        <h1>Detail Agenda Mediasi</h1>
        <p>Informasi lengkap permohonan mediasi</p>
    </div>
</section>

<section class="detail-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <?php if (!empty($agenda)) : ?>
                    <div class="detail-card">
                        <div class="card-top">
                            <div>
                                <h2 class="case-title"><?= htmlspecialchars($agenda['nama_kasus']); ?></h2>
                                <div class="case-number">Nomor: <?= htmlspecialchars($agenda['nomor_mediasi']); ?></div>
                            </div>
                            <span class="status-badge-detail <?= $agenda['status']; ?>">
                                <i class="fas fa-circle"></i>
                                <?= ucfirst(htmlspecialchars($agenda['status'])); ?>
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="detail-grid">
                                <div class="detail-item">
                                    <span class="item-label">Pihak 1</span>
                                    <span class="item-value"><?= htmlspecialchars($agenda['nama_pihak_satu']); ?></span>
                                </div>
                                <div class="detail-item">
                                    <span class="item-label">Pihak 2</span>
                                    <span class="item-value"><?= htmlspecialchars($agenda['nama_pihak_dua']); ?></span>
                                </div>
                                <div class="detail-item">
                                    <span class="item-label">Mediator</span>
                                    <span class="item-value"><?= htmlspecialchars($agenda['nama_mediator']); ?></span>
                                </div>
                                <div class="detail-item">
                                    <span class="item-label">Jenis Kasus</span>
                                    <span class="item-value"><?= htmlspecialchars($agenda['jenis_kasus']); ?></span>
                                </div>
                                <div class="detail-item">
                                    <span class="item-label">Tanggal Mediasi</span>
                                    <span class="item-value"><?= htmlspecialchars($agenda['tgl_mediasi']); ?></span>
                                </div>
                                <div class="detail-item">
                                    <span class="item-label">Waktu Mediasi</span>
                                    <span class="item-value"><?= htmlspecialchars($agenda['waktu_mediasi']); ?></span>
                                </div>
                                <div class="detail-item">
                                    <span class="item-label">Tempat</span>
                                    <span class="item-value"><?= htmlspecialchars($agenda['tempat']); ?></span>
                                </div>
                                <div class="detail-item full">
                                    <span class="item-label">Deskripsi Kasus</span>
                                    <span class="item-value"><?= htmlspecialchars($agenda['deskripsi_kasus']); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="<?= site_url('agenda'); ?>" class="btn-back">
                                <i class="fas fa-arrow-left"></i>
                                Kembali
                            </a>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="not-found">
                        <i class="fas fa-circle-exclamation"></i>
                        <p>Detail agenda tidak ditemukan.</p>
                        <a href="<?= site_url('agenda'); ?>" class="btn-back">
                            <i class="fas fa-arrow-left"></i>
                            Kembali ke Agenda
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>