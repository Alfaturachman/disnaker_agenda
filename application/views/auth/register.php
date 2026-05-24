<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar | DISNAKER Kota Semarang</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="<?= base_url('assets/sbadmin/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <style>
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0f172a 100%);
            padding: 1.5rem 1rem;
        }

        .register-container {
            width: 100%;
            max-width: 480px;
        }

        .register-card {
            background: #fff;
            border-radius: 1.25rem;
            padding: 2.5rem 2rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        .register-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .register-header .logo {
            width: 56px;
            height: 56px;
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            border-radius: 14px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            color: #fff;
            font-size: 1.5rem;
        }

        .register-header h1 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0.25rem;
        }

        .register-header p {
            font-size: 0.875rem;
            color: #64748b;
        }

        .alert-error {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #991b1b;
            font-size: 0.8125rem;
            padding: 0.75rem 1rem;
            border-radius: 0.75rem;
            margin-bottom: 1.25rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .alert-error i {
            font-size: 0.875rem;
        }

        .form-group {
            margin-bottom: 1.125rem;
        }

        .form-group label {
            display: block;
            font-size: 0.8125rem;
            font-weight: 600;
            color: #334155;
            margin-bottom: 0.375rem;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.75rem;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper i {
            position: absolute;
            left: 0.875rem;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 0.9375rem;
            pointer-events: none;
            transition: color 0.2s;
        }

        .input-wrapper input,
        .input-wrapper textarea {
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

        .input-wrapper input::placeholder {
            color: #94a3b8;
        }

        .input-wrapper input:focus {
            background: #fff;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .input-wrapper input:focus ~ i {
            color: #2563eb;
        }

        .btn-register {
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

        .btn-register:hover {
            background: linear-gradient(135deg, #1d4ed8, #1e40af);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.35);
            transform: translateY(-1px);
        }

        .btn-register:active {
            transform: translateY(0);
        }

        .register-footer {
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 0.25rem 0.75rem;
        }

        .register-footer a {
            font-size: 0.8125rem;
            color: #64748b;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.375rem;
            transition: color 0.2s;
            white-space: nowrap;
        }

        .register-footer a:hover {
            color: #2563eb;
        }

        .register-footer .divider {
            color: #cbd5e1;
        }

        @media (max-width: 480px) {
            .register-card {
                padding: 1.75rem 1.25rem;
            }
            .form-row {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <div class="register-container">
        <div class="register-card">
            <div class="register-header">
                <div class="logo">
                    <i class="fas fa-user-plus"></i>
                </div>
                <h1>Buat Akun Baru</h1>
                <p>Daftar sebagai pelapor untuk mengajukan mediasi</p>
            </div>

            <?php if ($this->session->flashdata('error')): ?>
                <div class="alert-error">
                    <i class="fas fa-circle-exclamation"></i>
                    <span><?= htmlspecialchars($this->session->flashdata('error')) ?></span>
                </div>
            <?php endif; ?>

            <?= validation_errors('<div class="alert-error"><i class="fas fa-circle-exclamation"></i><span>', '</span></div>'); ?>

            <form method="POST" action="<?= site_url('auth/register'); ?>">
                <div class="form-row">
                    <div class="form-group">
                        <label for="first_name">Nama Depan</label>
                        <div class="input-wrapper">
                            <input type="text" id="first_name" name="first_name" placeholder="Nama depan" value="<?= set_value('first_name') ?>" required>
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Nama Belakang</label>
                        <div class="input-wrapper">
                            <input type="text" id="last_name" name="last_name" placeholder="Nama belakang" value="<?= set_value('last_name') ?>" required>
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-wrapper">
                        <input type="email" id="email" name="email" placeholder="Masukkan email" value="<?= set_value('email') ?>" required autofocus>
                        <i class="far fa-envelope"></i>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-wrapper">
                            <input type="password" id="password" name="password" placeholder="Min. 6 karakter" required>
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Konfirmasi Password</label>
                        <div class="input-wrapper">
                            <input type="password" id="confirm_password" name="confirm_password" placeholder="Ulangi password" required>
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="perusahaan">Nama Perusahaan</label>
                    <div class="input-wrapper">
                        <input type="text" id="perusahaan" name="perusahaan" placeholder="Nama perusahaan / instansi" value="<?= set_value('perusahaan') ?>" required>
                        <i class="fas fa-building"></i>
                    </div>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <div class="input-wrapper">
                        <input type="text" id="alamat" name="alamat" placeholder="Alamat lengkap" value="<?= set_value('alamat') ?>" required>
                        <i class="fas fa-location-dot"></i>
                    </div>
                </div>

                <button type="submit" class="btn-register">
                    <i class="fas fa-user-plus"></i>
                    Daftar
                </button>
            </form>

            <div class="register-footer">
                <a href="<?= site_url('auth/login'); ?>">
                    <i class="fas fa-arrow-right-to-bracket"></i>
                    Sudah punya akun? Masuk
                </a>
                <span class="divider">|</span>
                <a href="<?= base_url('home'); ?>">
                    <i class="fas fa-house"></i>
                    Kembali ke beranda
                </a>
            </div>
        </div>
    </div>
</body>

</html>