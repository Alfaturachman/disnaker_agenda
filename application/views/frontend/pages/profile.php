<style>
    .profile-header {
        background: linear-gradient(135deg, #0f172a, #1e293b);
        padding: 4rem 0 3rem;
        text-align: center;
        margin-top: -1px;
    }

    .profile-header h1 {
        font-size: 2rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 0.5rem;
    }

    .profile-header p {
        font-size: 1rem;
        color: #94a3b8;
    }

    .profile-section {
        padding: 3rem 0 4rem;
    }

    .profile-card {
        background: #fff;
        border: 1px solid #f1f5f9;
        border-radius: 1.25rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        overflow: hidden;
    }

    .profile-card .card-head {
        padding: 2rem 2rem 1.5rem;
        text-align: center;
        border-bottom: 1px solid #f8fafc;
    }

    .avatar-wrapper {
        position: relative;
        width: 96px;
        height: 96px;
        margin: 0 auto 1rem;
        border-radius: 50%;
        overflow: hidden;
        border: 3px solid #e2e8f0;
    }

    .avatar-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .avatar-wrapper .avatar-placeholder {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #2563eb, #1d4ed8);
        color: #fff;
        font-size: 2rem;
        font-weight: 700;
    }

    .profile-card .card-body {
        padding: 1.5rem 2rem 2rem;
    }

    .input-group-material {
        position: relative;
        margin-bottom: 1.25rem;
    }

    .input-group-material .input-icon {
        position: absolute;
        left: 0.875rem;
        top: 50%;
        transform: translateY(-50%);
        color: #94a3b8;
        font-size: 0.875rem;
        pointer-events: none;
        z-index: 2;
        transition: color 0.2s;
    }

    .input-group-material.focused .input-icon {
        color: #2563eb;
    }

    .input-group-material input,
    .input-group-material select,
    .input-group-material textarea {
        width: 100%;
        padding: 0.75rem 0.875rem 0.75rem 2.5rem;
        font-size: 0.875rem;
        font-family: inherit;
        color: #0f172a;
        background: #f8fafc;
        border: 2px solid #e2e8f0;
        border-radius: 0.625rem;
        outline: none;
        transition: all 0.2s;
        box-sizing: border-box;
    }

    .input-group-material input:focus,
    .input-group-material select:focus,
    .input-group-material textarea:focus {
        border-color: #2563eb;
        background: #fff;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }

    .input-group-material label {
        display: block;
        font-size: 0.75rem;
        font-weight: 600;
        color: #64748b;
        margin-bottom: 0.375rem;
        text-transform: uppercase;
        letter-spacing: 0.03em;
    }

    .password-note {
        display: flex;
        align-items: flex-start;
        gap: 0.5rem;
        padding: 0.75rem 1rem;
        background: #fffbeb;
        border: 1px solid #fde68a;
        border-radius: 0.625rem;
        font-size: 0.8125rem;
        color: #92400e;
        margin-bottom: 1.25rem;
    }

    .password-note i {
        font-size: 0.875rem;
        margin-top: 0.125rem;
        flex-shrink: 0;
    }

    .btn-submit {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        width: 100%;
        padding: 0.75rem 1.5rem;
        font-size: 0.875rem;
        font-weight: 600;
        font-family: inherit;
        color: #fff;
        background: linear-gradient(135deg, #2563eb, #1d4ed8);
        border: none;
        border-radius: 0.625rem;
        cursor: pointer;
        transition: all 0.2s;
    }

    .btn-submit:hover {
        box-shadow: 0 4px 12px rgba(37, 99, 235, 0.35);
        transform: translateY(-1px);
    }

    .btn-submit:active {
        transform: translateY(0);
    }

    .file-upload-area {
        position: relative;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.625rem 1rem;
        background: #f8fafc;
        border: 2px dashed #e2e8f0;
        border-radius: 0.625rem;
        cursor: pointer;
        transition: all 0.2s;
    }

    .file-upload-area:hover {
        border-color: #2563eb;
        background: #f1f5f9;
    }

    .file-upload-area i {
        font-size: 1.25rem;
        color: #94a3b8;
    }

    .file-upload-area .file-text {
        font-size: 0.8125rem;
        color: #64748b;
        flex: 1;
    }

    .file-upload-area input[type="file"] {
        position: absolute;
        inset: 0;
        opacity: 0;
        cursor: pointer;
    }

    @media (max-width: 640px) {
        .profile-header h1 {
            font-size: 1.5rem;
        }
        .profile-card .card-head,
        .profile-card .card-body {
            padding-left: 1.25rem;
            padding-right: 1.25rem;
        }
    }
</style>
<section class="profile-header">
    <div class="container">
        <h1>Profil Saya</h1>
        <p>Kelola informasi akun Anda</p>
    </div>
</section>

<section class="profile-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="profile-card">
                    <div class="card-head">
                        <div class="avatar-wrapper">
                            <?php if (!empty($profile_image)): ?>
                                <img src="<?= base_url('uploads/' . htmlspecialchars($profile_image)); ?>" alt="Foto Profil">
                            <?php else: ?>
                                <div class="avatar-placeholder">
                                    <?= strtoupper(substr($user_details['nama'] ?? 'U', 0, 1)); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <h5 style="font-weight: 600; color: #0f172a; margin-bottom: 0.25rem;"><?= htmlspecialchars($user_details['nama'] ?? ''); ?></h5>
                        <p style="font-size: 0.8125rem; color: #64748b; margin: 0;"><?= htmlspecialchars($user['email']); ?></p>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('profile/update'); ?>" method="POST" enctype="multipart/form-data">
                            <div class="input-group-material">
                                <label for="profile_image">Foto Profil</label>
                                <div class="file-upload-area">
                                    <i class="fas fa-cloud-arrow-up"></i>
                                    <span class="file-text">Pilih file gambar (JPG, PNG, GIF &mdash; maks. 2MB)</span>
                                    <input type="file" id="profile_image" name="profile_image" accept="image/*">
                                </div>
                            </div>

                            <div class="input-group-material">
                                <label for="nama">Nama Lengkap</label>
                                <div class="input-icon"><i class="fas fa-user"></i></div>
                                <input type="text" id="nama" name="nama"
                                    value="<?= isset($user_details['nama']) ? htmlspecialchars($user_details['nama'], ENT_QUOTES) : ''; ?>"
                                    required>
                            </div>

                            <div class="input-group-material">
                                <label for="email">Email</label>
                                <div class="input-icon"><i class="fas fa-envelope"></i></div>
                                <input type="email" id="email" name="email"
                                    value="<?= htmlspecialchars($user['email'], ENT_QUOTES); ?>" required>
                            </div>

                            <div class="input-group-material">
                                <label for="phone">Nomor Telepon</label>
                                <div class="input-icon"><i class="fas fa-phone"></i></div>
                                <input type="text" id="phone" name="phone"
                                    value="<?= isset($user_details['telp']) ? htmlspecialchars($user_details['telp'], ENT_QUOTES) : ''; ?>"
                                    required>
                            </div>

                            <div class="password-note">
                                <i class="fas fa-info-circle"></i>
                                <span>Kosongkan semua kolom password jika tidak ingin mengubah password.</span>
                            </div>

                            <div class="input-group-material">
                                <label for="current_password">Password Lama</label>
                                <div class="input-icon"><i class="fas fa-lock"></i></div>
                                <input type="password" id="current_password" name="current_password" placeholder="Masukkan password lama">
                            </div>

                            <div class="input-group-material">
                                <label for="new_password">Password Baru</label>
                                <div class="input-icon"><i class="fas fa-key"></i></div>
                                <input type="password" id="new_password" name="new_password" minlength="6" placeholder="Minimal 6 karakter">
                            </div>

                            <div class="input-group-material">
                                <label for="confirm_password">Konfirmasi Password Baru</label>
                                <div class="input-icon"><i class="fas fa-check-circle"></i></div>
                                <input type="password" id="confirm_password" name="confirm_password" placeholder="Ulangi password baru">
                            </div>

                            <button type="submit" class="btn-submit">
                                <i class="fas fa-floppy-disk"></i>
                                Simpan Perubahan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
