<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | DISNAKER Kota Semarang</title>
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
            padding: 1rem;
        }

        .login-container {
            width: 100%;
            max-width: 420px;
        }

        .login-card {
            background: #fff;
            border-radius: 1.25rem;
            padding: 2.5rem 2rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        .login-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .login-header .logo {
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

        .login-header h1 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0.25rem;
        }

        .login-header p {
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
            margin-bottom: 1.25rem;
        }

        .form-group label {
            display: block;
            font-size: 0.8125rem;
            font-weight: 600;
            color: #334155;
            margin-bottom: 0.375rem;
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

        .input-wrapper input {
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

        .input-wrapper input:focus + i {
            color: #2563eb;
        }

        .form-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.5rem;
        }

        .form-options .checkbox {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
        }

        .form-options .checkbox input[type="checkbox"] {
            width: 1rem;
            height: 1rem;
            accent-color: #2563eb;
            cursor: pointer;
        }

        .form-options .checkbox span {
            font-size: 0.8125rem;
            color: #475569;
        }

        .form-options .forgot-link {
            font-size: 0.8125rem;
            color: #2563eb;
            text-decoration: none;
            font-weight: 500;
        }

        .form-options .forgot-link:hover {
            text-decoration: underline;
        }

        .btn-login {
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

        .btn-login:hover {
            background: linear-gradient(135deg, #1d4ed8, #1e40af);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.35);
            transform: translateY(-1px);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        .login-footer {
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 0.25rem 0.75rem;
        }

        .login-footer a {
            font-size: 0.8125rem;
            color: #64748b;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.375rem;
            transition: color 0.2s;
            white-space: nowrap;
        }

        .login-footer a:hover {
            color: #2563eb;
        }

        .login-footer .divider {
            color: #cbd5e1;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="logo">
                    <i class="fas fa-handshake"></i>
                </div>
                <h1>Masuk ke Akun</h1>
                <p>Sistem Informasi Mediasi DISNAKER</p>
            </div>

            <?php if ($this->session->flashdata('error')): ?>
                <div class="alert-error">
                    <i class="fas fa-circle-exclamation"></i>
                    <span><?= htmlspecialchars($this->session->flashdata('error')) ?></span>
                </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('success')): ?>
                <div class="alert-error" style="background:#f0fdf4;border-color:#bbf7d0;color:#166534;">
                    <i class="fas fa-circle-check"></i>
                    <span><?= htmlspecialchars($this->session->flashdata('success')) ?></span>
                </div>
            <?php endif; ?>

            <?= validation_errors('<div class="alert-error"><i class="fas fa-circle-exclamation"></i><span>', '</span></div>'); ?>

            <form method="POST" action="<?= site_url('auth/login'); ?>">
                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-wrapper">
                        <input type="email" id="email" name="email" placeholder="Masukkan email" value="<?= set_value('email') ?>" required autofocus>
                        <i class="far fa-envelope"></i>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-wrapper">
                        <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                        <i class="fas fa-lock"></i>
                    </div>
                </div>

                <div class="form-options">
                    <label class="checkbox">
                        <input type="checkbox" name="remember" id="remember">
                        <span>Ingat saya</span>
                    </label>
                </div>

                <button type="submit" class="btn-login">
                    <i class="fas fa-arrow-right-to-bracket"></i>
                    Masuk
                </button>
            </form>

            <div class="login-footer">
                <a href="<?= site_url('auth/register'); ?>">
                    <i class="fas fa-user-plus"></i>
                    Buat akun baru
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