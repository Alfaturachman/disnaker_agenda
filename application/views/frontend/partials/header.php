<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dinas Tenaga Kerja Kota Semarang</title>
    <meta name="description" content="Sistem Informasi Mediasi DISNAKER Kota Semarang">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/') ?>images/logoo.png" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/slick/slick.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">

    <style>
        *, *::before, *::after { box-sizing: border-box; }

        body {
            font-family: 'Inter', sans-serif;
            background: #f8fafc;
            color: #0f172a;
            padding-top: 0 !important;
            margin: 0;
        }

        /* ─── NAVBAR ─── */
        .navbar-main {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
            padding: 1rem 0;
            transition: all 0.3s ease;
        }

        .navbar-main.scrolled {
            background: rgba(15, 23, 42, 0.92);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            padding: 0.75rem 0;
            box-shadow: 0 1px 0 rgba(255, 255, 255, 0.06);
        }

        .navbar-main .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .navbar-main .nav-brand {
            display: flex;
            align-items: center;
            gap: 0.625rem;
            text-decoration: none;
            color: #fff;
        }

        .navbar-main .nav-brand:hover { text-decoration: none; }

        .navbar-main .nav-brand .brand-icon {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .navbar-main .nav-brand .brand-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .navbar-main .nav-brand .brand-text {
            font-size: 1rem;
            font-weight: 700;
            letter-spacing: -0.01em;
            line-height: 1.2;
        }

        .navbar-main .nav-brand .brand-text small {
            display: block;
            font-size: 0.625rem;
            font-weight: 500;
            color: #94a3b8;
            letter-spacing: 0.04em;
        }

        .nav-toggle {
            display: none;
            background: none;
            border: none;
            color: #fff;
            font-size: 1.375rem;
            cursor: pointer;
            padding: 0.25rem;
            line-height: 1;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 0.25rem;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .nav-menu .nav-link {
            display: inline-flex;
            align-items: center;
            gap: 0.375rem;
            padding: 0.5rem 0.875rem;
            font-size: 0.875rem;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.75);
            text-decoration: none;
            border-radius: 0.625rem;
            transition: all 0.2s;
            white-space: nowrap;
        }

        .nav-menu .nav-link:hover,
        .nav-menu .nav-link.active {
            color: #fff;
            background: rgba(255, 255, 255, 0.08);
            text-decoration: none;
        }

        .nav-menu .nav-login-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.375rem;
            padding: 0.5rem 1.125rem;
            font-size: 0.8125rem;
            font-weight: 600;
            font-family: 'Inter', sans-serif;
            color: #fff;
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            border: none;
            border-radius: 0.625rem;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.2s;
            margin-left: 0.25rem;
        }

        .nav-menu .nav-login-btn:hover {
            background: linear-gradient(135deg, #1d4ed8, #1e40af);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
            transform: translateY(-1px);
            text-decoration: none;
            color: #fff;
        }

        .nav-menu .user-dropdown {
            position: relative;
        }

        .nav-menu .user-dropdown .drop-trigger {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.4rem 1rem 0.4rem 0.75rem;
            font-size: 0.8125rem;
            font-weight: 500;
            color: #fff;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 0.625rem;
            cursor: pointer;
            transition: all 0.2s;
            font-family: 'Inter', sans-serif;
        }

        .nav-menu .user-dropdown .drop-trigger:hover {
            background: rgba(255, 255, 255, 0.12);
        }

        .nav-menu .user-dropdown .drop-trigger .avatar {
            width: 26px;
            height: 26px;
            border-radius: 50%;
            object-fit: cover;
        }

        .nav-menu .user-dropdown .drop-menu {
            position: absolute;
            top: calc(100% + 0.5rem);
            right: 0;
            background: #fff;
            border: 1px solid #f1f5f9;
            border-radius: 0.75rem;
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.12);
            min-width: 180px;
            padding: 0.375rem;
            display: none;
            z-index: 1050;
        }

        .nav-menu .user-dropdown .drop-menu.show {
            display: block;
        }

        .nav-menu .user-dropdown .drop-menu a {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 0.75rem;
            font-size: 0.8125rem;
            color: #334155;
            text-decoration: none;
            border-radius: 0.5rem;
            transition: background 0.15s;
        }

        .nav-menu .user-dropdown .drop-menu a:hover {
            background: #f8fafc;
            color: #0f172a;
        }

        .nav-menu .user-dropdown .drop-menu .divider {
            height: 1px;
            background: #f1f5f9;
            margin: 0.25rem 0.5rem;
        }

        .nav-menu .user-dropdown .drop-menu .text-danger-custom {
            color: #dc2626;
        }

        .nav-menu .user-dropdown .drop-menu .text-danger-custom:hover {
            background: #fef2f2;
        }

        /* ─── MOBILE ─── */
        @media (max-width: 991.98px) {
            .nav-toggle {
                display: block;
            }

            .nav-menu {
                display: none;
                flex-direction: column;
                align-items: stretch;
                gap: 0.25rem;
                position: fixed;
                top: 64px;
                left: 1rem;
                right: 1rem;
                background: rgba(15, 23, 42, 0.97);
                backdrop-filter: blur(20px);
                -webkit-backdrop-filter: blur(20px);
                border: 1px solid rgba(255, 255, 255, 0.08);
                border-radius: 1rem;
                padding: 0.75rem;
                box-shadow: 0 20px 48px rgba(0, 0, 0, 0.3);
                z-index: 1040;
                max-height: calc(100vh - 80px);
                overflow-y: auto;
            }

            .nav-menu.open {
                display: flex;
            }

            .nav-menu .nav-link {
                padding: 0.75rem 1rem;
                font-size: 0.9375rem;
                border-radius: 0.5rem;
                white-space: normal;
            }

            .nav-menu .nav-login-btn {
                margin: 0.25rem 0 0;
                justify-content: center;
                padding: 0.75rem;
            }

            .nav-menu .user-dropdown {
                width: 100%;
            }

            .nav-menu .user-dropdown .drop-trigger {
                width: 100%;
                justify-content: center;
            }

            .nav-menu .user-dropdown .drop-menu {
                position: static;
                box-shadow: none;
                border: none;
                background: transparent;
                padding: 0;
                margin-top: 0.25rem;
            }

            .nav-menu .user-dropdown .drop-menu a {
                color: rgba(255, 255, 255, 0.75);
                padding: 0.625rem 0.75rem;
            }

            .nav-menu .user-dropdown .drop-menu a:hover {
                background: rgba(255, 255, 255, 0.06);
                color: #fff;
            }

            .nav-menu .user-dropdown .drop-menu .divider {
                background: rgba(255, 255, 255, 0.06);
            }
        }

        @media (max-width: 375px) {
            .navbar-main .nav-brand .brand-text { font-size: 0.875rem; }
            .navbar-main .nav-brand .brand-text small { font-size: 0.5625rem; }
        }

        /* ─── MODAL LOGOUT ─── */
        .modal-custom .modal-content {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
        }
        .modal-custom .modal-header {
            border: none;
            padding: 1.5rem 1.5rem 0;
        }
        .modal-custom .modal-body {
            padding: 1rem 1.5rem;
            font-size: 0.9375rem;
            color: #334155;
        }
        .modal-custom .modal-footer {
            border: none;
            padding: 0 1.5rem 1.5rem;
            gap: 0.5rem;
        }
        .modal-custom .btn-cancel {
            padding: 0.5rem 1.25rem;
            font-size: 0.8125rem;
            font-weight: 600;
            border: 1.5px solid #e2e8f0;
            border-radius: 0.625rem;
            background: #fff;
            color: #475569;
            cursor: pointer;
            transition: all 0.2s;
        }
        .modal-custom .btn-cancel:hover { background: #f8fafc; }
        .modal-custom .btn-logout {
            padding: 0.5rem 1.25rem;
            font-size: 0.8125rem;
            font-weight: 600;
            border: none;
            border-radius: 0.625rem;
            background: #dc2626;
            color: #fff;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.2s;
        }
        .modal-custom .btn-logout:hover { background: #b91c1c; text-decoration: none; color: #fff; }

        /* override template */
        .navigation { display: none; }
        .page-wrapper { margin-top: 0 !important; }
    </style>
</head>

<body>

<!-- ─── NAVBAR ─── -->
<header class="navbar-main" id="navbarMain">
    <div class="container">
        <a href="<?= base_url(); ?>" class="nav-brand">
            <div class="brand-icon"><img src="<?= base_url('assets/images/logodisnaker.png') ?>" alt="DISNAKER"></div>
            <div class="brand-text">
                DISNAKER
                <small>Kota Semarang</small>
            </div>
        </a>

        <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <ul class="nav-menu" id="navMenu">
            <li><a href="<?= base_url(); ?>" class="nav-link <?= ($this->uri->segment(1) == '') ? 'active' : ''; ?>"><i class="fas fa-house"></i> Beranda</a></li>
            <li><a href="<?= base_url('agenda'); ?>" class="nav-link <?= ($this->uri->segment(1) == 'agenda') ? 'active' : ''; ?>"><i class="fas fa-calendar"></i> Agenda</a></li>
            <li><a href="<?= base_url('kontak'); ?>" class="nav-link <?= ($this->uri->segment(1) == 'kontak') ? 'active' : ''; ?>"><i class="fas fa-phone"></i> Kontak</a></li>

            <?php if ($this->session->userdata('logged_in')): ?>
                <li class="user-dropdown">
                    <div class="drop-trigger" onclick="toggleDropdown(event)">
                        <img src="<?= base_url('uploads/' . ($this->session->userdata('user_profile') ?: 'default-profile.png')) ?>" alt="" class="avatar" onerror="this.style.display='none'">
                        <span><?= htmlspecialchars($this->session->userdata('user_name')); ?></span>
                        <i class="fas fa-chevron-down" style="font-size:0.625rem;opacity:0.6;"></i>
                    </div>
                    <div class="drop-menu" id="userDropdown">
                        <a href="<?= base_url('profile/profile'); ?>"><i class="fas fa-user"></i> Profile</a>
                        <div class="divider"></div>
                        <a href="#" data-toggle="modal" data-target="#logoutModal" class="text-danger-custom"><i class="fas fa-right-from-bracket"></i> Logout</a>
                    </div>
                </li>
            <?php else: ?>
                <li><a href="<?= base_url('auth/login'); ?>" class="nav-login-btn"><i class="fas fa-arrow-right-to-bracket"></i> Masuk</a></li>
            <?php endif; ?>
        </ul>
    </div>
</header>

<!-- ─── MODAL LOGOUT ─── -->
<div class="modal fade modal-custom" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel" style="font-weight:700;">Konfirmasi Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size:1.25rem;">&times;</button>
            </div>
            <div class="modal-body">Apakah Anda yakin ingin keluar?</div>
            <div class="modal-footer">
                <button type="button" class="btn-cancel" data-dismiss="modal">Batal</button>
                <a class="btn-logout" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
<script>
    // ─── SCROLL NAVBAR ───
    $(window).on('scroll', function() {
        $('#navbarMain').toggleClass('scrolled', $(window).scrollTop() > 40);
    });

    // ─── TOGGLE MOBILE MENU ───
    $('#navToggle').on('click', function() {
        $('#navMenu').toggleClass('open');
        $(this).find('i').toggleClass('fa-bars fa-xmark');
    });

    // ─── CLOSE MOBILE ON LINK CLICK ───
    $('#navMenu .nav-link, #navMenu .nav-login-btn').on('click', function() {
        $('#navMenu').removeClass('open');
        $('#navToggle i').attr('class', 'fas fa-bars');
    });

    // ─── USER DROPDOWN ───
    function toggleDropdown(e) {
        e.stopPropagation();
        var menu = document.getElementById('userDropdown');
        menu.classList.toggle('show');
    }

    $(document).on('click', function(e) {
        if (!$(e.target).closest('.user-dropdown').length) {
            $('#userDropdown').removeClass('show');
        }
    });

    // ─── CLOSE DROPDOWN ON RESIZE ───
    $(window).on('resize', function() {
        if ($(window).width() > 992) {
            $('#navMenu').removeClass('open');
            $('#navToggle i').attr('class', 'fas fa-bars');
        }
    });

    // ─── TRIGGER INITIAL ───
    $(window).trigger('scroll');
</script>