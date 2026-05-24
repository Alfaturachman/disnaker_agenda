<style>
    .arsip-header {
        background: linear-gradient(135deg, #0f172a, #1e293b);
        padding: 4rem 0 3rem;
        text-align: center;
        margin-top: -1px;
    }

    .arsip-header h1 {
        font-size: 2rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 0.5rem;
    }

    .arsip-header p {
        font-size: 1rem;
        color: #94a3b8;
    }

    .arsip-section {
        padding: 3rem 0 4rem;
    }

    .arsip-table-wrapper {
        background: #fff;
        border: 1px solid #f1f5f9;
        border-radius: 1.25rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        overflow-x: auto;
    }

    .arsip-table {
        width: 100%;
        border-collapse: collapse;
        min-width: 680px;
    }

    .arsip-table thead th {
        font-size: 0.75rem;
        font-weight: 600;
        color: #94a3b8;
        text-transform: uppercase;
        letter-spacing: 0.04em;
        padding: 1rem 1.25rem;
        background: #f8fafc;
        border-bottom: 1px solid #f1f5f9;
        text-align: left;
        white-space: nowrap;
    }

    .arsip-table tbody td {
        font-size: 0.875rem;
        color: #334155;
        padding: 0.875rem 1.25rem;
        border-bottom: 1px solid #f8fafc;
        vertical-align: middle;
    }

    .arsip-table tbody tr:last-child td {
        border-bottom: none;
    }

    .arsip-table tbody tr:hover {
        background: #f8fafc;
    }

    .arsip-table .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.375rem;
        padding: 0.25rem 0.75rem;
        border-radius: 100px;
        font-size: 0.75rem;
        font-weight: 600;
    }

    .arsip-table .status-badge.disetujui {
        background: #f0fdf4;
        color: #16a34a;
    }

    .arsip-table .status-badge.ditolak {
        background: #fef2f2;
        color: #dc2626;
    }

    .arsip-table .btn-detail {
        display: inline-flex;
        align-items: center;
        gap: 0.375rem;
        padding: 0.375rem 0.875rem;
        font-size: 0.75rem;
        font-weight: 600;
        color: #2563eb;
        background: #eff6ff;
        border: 1px solid #bfdbfe;
        border-radius: 0.5rem;
        text-decoration: none;
        transition: all 0.2s;
    }

    .arsip-table .btn-detail:hover {
        background: #dbeafe;
        text-decoration: none;
        color: #1d4ed8;
    }

    .arsip-empty {
        text-align: center;
        padding: 4rem 1rem;
    }

    .arsip-empty i {
        font-size: 3rem;
        color: #cbd5e1;
        margin-bottom: 1rem;
    }

    .arsip-empty h3 {
        font-size: 1.125rem;
        font-weight: 600;
        color: #0f172a;
        margin-bottom: 0.5rem;
    }

    .arsip-empty p {
        font-size: 0.875rem;
        color: #64748b;
        max-width: 360px;
        margin: 0 auto;
    }

    @media (max-width: 640px) {
        .arsip-header h1 {
            font-size: 1.5rem;
        }
        .arsip-table-wrapper {
            border-radius: 0.75rem;
        }
    }
</style>

<section class="arsip-header">
    <div class="container">
        <h1>Arsip Mediasi</h1>
        <p>Riwayat permohonan mediasi yang telah selesai</p>
    </div>
</section>

<section class="arsip-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="arsip-table-wrapper">
                    <?php if (!empty($arsip)) : ?>
                        <table class="arsip-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Mediasi</th>
                                    <th>Nama Kasus</th>
                                    <th>Pihak 1</th>
                                    <th>Pihak 2</th>
                                    <th>Mediator</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($arsip as $a) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= htmlspecialchars($a['nomor_mediasi']); ?></td>
                                        <td><?= htmlspecialchars($a['nama_kasus']); ?></td>
                                        <td><?= htmlspecialchars($a['nama_pihak_satu']); ?></td>
                                        <td><?= htmlspecialchars($a['nama_pihak_dua']); ?></td>
                                        <td><?= htmlspecialchars($a['nama_mediator']); ?></td>
                                        <td><?= htmlspecialchars($a['tgl_mediasi']); ?></td>
                                        <td>
                                            <span class="status-badge <?= $a['status']; ?>">
                                                <i class="fas fa-circle"></i>
                                                <?= ucfirst(htmlspecialchars($a['status'])); ?>
                                            </span>
                                        </td>
                                        <td>
                                            <a href="<?= site_url('agenda/detail/' . $a['id']); ?>" class="btn-detail">
                                                <i class="fas fa-eye"></i>
                                                Detail
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php else : ?>
                        <div class="arsip-empty">
                            <i class="fas fa-box-archive"></i>
                            <h3>Belum Ada Arsip</h3>
                            <p>Belum ada permohonan mediasi yang selesai atau ditolak. Arsip akan muncul setelah mediator memproses permohonan.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>