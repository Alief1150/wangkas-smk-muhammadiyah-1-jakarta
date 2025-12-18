<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK MUHAMMADIYAH 2 JAKARTA</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        /* Tema Hijau (Madrasah) */
        :root {
            --primary-color: #1B5E20;  /* Hijau tua */
            --secondary-color: #FBC02D; /* Aksen kuning emas */
            --soft-bg: #F1F8E9;
        }

        body { font-family: 'Poppins', sans-serif; }

        /* Navbar */
        .navbar { transition: 0.3s; padding: 18px 0; }
        .navbar-brand { font-weight: 700; font-size: 22px; color: white !important; letter-spacing: .5px; }
        .nav-link { color: rgba(255,255,255,0.85) !important; font-weight: 500; margin-left: 18px; }
        .nav-link:hover { color: white !important; }

        /* Hero */
        .hero-section {
            background: linear-gradient(rgba(27, 94, 32, 0.82), rgba(27, 94, 32, 0.82)),
                        url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            height: 92vh;
            display: flex;
            align-items: center;
            color: white;
            position: relative;
        }

        /* Floating cards */
        .floating-container { margin-top: -95px; position: relative; z-index: 10; }
        .info-card {
            background: white;
            padding: 28px;
            border-radius: 14px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.10);
            border: none;
            transition: transform 0.25s ease;
            height: 100%;
        }
        .info-card:hover { transform: translateY(-8px); }
        .icon-box { font-size: 40px; color: var(--primary-color); margin-bottom: 10px; }

        /* Sections */
        section.section-block { padding: 70px 0; background: white; }
        section.section-soft { padding: 70px 0; background: var(--soft-bg); }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
            position: relative;
            color: var(--primary-color);
        }
        .section-title h2 { font-size: 32px; margin-bottom: 10px; font-weight: 700; }
        .section-title p { max-width: 820px; margin: 0 auto; color: rgba(0,0,0,0.6); }
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -14px;
            left: 50%;
            transform: translateX(-50%);
            width: 90px;
            height: 3px;
            background-color: var(--primary-color);
            border-radius: 99px;
        }

        /* Visi Misi */
        .vm-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            padding: 28px;
            height: 100%;
            border: 1px solid rgba(27,94,32,0.10);
        }
        .vm-card h4 { color: var(--primary-color); font-weight: 700; margin-bottom: 12px; }
        .vm-card ul { padding-left: 18px; margin-bottom: 0; }
        .vm-card li { margin-bottom: 10px; color: rgba(0,0,0,0.70); }

        /* Program cards */
        .program-card {
            background-color: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            transition: transform 0.25s ease;
            height: 100%;
            border: 1px solid rgba(27,94,32,0.10);
        }
        .program-card:hover { transform: translateY(-6px); }
        .program-image { height: 240px; overflow: hidden; }
        .program-image img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease; }
        .program-card:hover .program-image img { transform: scale(1.05); }
        .program-content { padding: 22px; }
        .program-content h3 { color: var(--primary-color); font-weight: 700; font-size: 22px; margin-bottom: 10px; }
        .program-badge { background: rgba(251, 192, 45, 0.18); color: #7a5b00; border: 1px solid rgba(251,192,45,0.35); }
        .program-content ul { list-style-type: none; padding-left: 0; margin-bottom: 0; }
        .program-content ul li { margin-bottom: 8px; padding-left: 22px; position: relative; color: rgba(0,0,0,0.68); }
        .program-content ul li::before {
            content: '\f058';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--primary-color);
            font-size: 13px;
            top: 2px;
        }

        /* Galeri */
        .galeri-card {
            background-color: white;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            height: 100%;
            text-align: left;
            border: 1px solid rgba(27,94,32,0.10);
        }
        .galeri-img-container { width: 100%; height: 230px; overflow: hidden; }
        .galeri-img-container img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.45s ease; }
        .galeri-card:hover img { transform: scale(1.05); }
        .galeri-content { padding: 18px 18px 20px; }
        .galeri-content h4 { color: var(--primary-color); font-weight: 700; margin-bottom: 6px; }
        .galeri-content p { margin-bottom: 0; color: rgba(0,0,0,0.60); font-size: 0.92rem; }

        /* Footer */
        footer { background: var(--primary-color); }
        .footer-section h3 { color: white; margin-bottom: 16px; font-size: 18px; font-weight: 700; }
        .footer-link { color: rgba(255,255,255,0.85); text-decoration: none; }
        .footer-link:hover { color: white; text-decoration: underline; }

        /* Buttons */
        .btn-cta {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
            color: #1f3b1f;
            font-weight: 700;
        }
        .btn-cta:hover { filter: brightness(0.95); }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark position-absolute w-100 z-3">
        <div class="container">
            <a class="navbar-brand" href="{{ route('welcome') }}">SMK MUHAMMADIYAH 2 JAKARTA</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#profil">Profil Sekolah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#galeri">Galeri Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#program">Program Keahlian</a>
                    </li>

                    <li class="nav-item ms-3">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="btn btn-cta px-4 py-2 rounded-pill">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-light px-4 py-2 rounded-pill fw-bold" style="color: var(--primary-color) !important;">Login</a>
                            @endauth
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container text-center text-md-start">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <span class="text-uppercase mb-2 d-block fw-bold" style="color: var(--secondary-color); letter-spacing: 1px;">SMK VOCATIONAL SCHOOL</span>
                    <h1 class="display-3 fw-bold mb-3">SMK MUHAMMADIYAH 2 JAKARTA</h1>
                    <p class="lead mb-4 text-white-50">
                        Mewujudkan generasi unggul, beriman, terampil, dan profesional untuk siap bersaing di era globalisasi.
                    </p>
                    <a href="#profil" class="btn btn-cta px-4 py-2 rounded-pill me-2">
                        Lihat Profil
                    </a>
                    <a href="#program" class="btn btn-outline-light px-4 py-2 rounded-pill">
                        Program Keahlian
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="floating-container mb-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card info-card">
                        <div class="d-flex align-items-start">
                            <div class="icon-box me-3"><i class="fas fa-mosque"></i></div>
                            <div>
                                <h4 class="fw-bold" style="color: var(--primary-color);">Berciri Islami</h4>
                                <p class="text-muted small mb-0">Pendidikan kejuruan teknologi & industri yang berciri Islami secara efektif, efisien, dan terencana.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card info-card">
                        <div class="d-flex align-items-start">
                            <div class="icon-box me-3"><i class="fas fa-tools"></i></div>
                            <div>
                                <h4 class="fw-bold" style="color: var(--primary-color);">Terampil & Profesional</h4>
                                <p class="text-muted small mb-0">Mengembangkan keunggulan, keterampilan, dan ketelitian sesuai kemajuan IPTEK.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card info-card">
                        <div class="d-flex align-items-start">
                            <div class="icon-box me-3"><i class="fas fa-handshake"></i></div>
                            <div>
                                <h4 class="fw-bold" style="color: var(--primary-color);">Kerjasama Industri</h4>
                                <p class="text-muted small mb-0">Menjalin kerjasama dengan dunia usaha/industri serta masyarakat untuk mendukung magang & penyerapan kerja.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Profil Sekolah -->
    <section id="profil" class="section-block">
        <div class="container">
            <div class="section-title">
                <h2>Profil Sekolah</h2>
                <p>Ringkasan visi dan misi sekolah yang menjadi arah pengembangan pendidikan dan karakter peserta didik.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="vm-card">
                        <h4><i class="bi bi-eye me-2"></i>Visi</h4>
                        <p class="mb-0" style="color: rgba(0,0,0,0.72);">
                            MENJADI LEMBAGA PENDIDIKAN YANG TERPERCAYA UNTUK MENGHASILKAN SUMBER DAYA MANUSIA YANG HANDAL, TERAMPIL, DAN PROFESIONAL SEHINGGA MAMPU BERSAING DI ERA GLOBALISASI.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="vm-card">
                        <h4><i class="bi bi-bullseye me-2"></i>Misi</h4>
                        <ul>
                            <li>MELAKSANAKAN PENDIDIKAN KEJURUAN TEKNOLOGI DAN INDUSTRI YANG BERCIRI ISLAMI SECARA EFEKTIF, EFISIEN DAN TERENCANA.</li>
                            <li>MENGEMBANGKAN KEUNGGULAN, KETERAMPILAN DAN KETELITIAN SESUAI DENGAN KEMAJUAN IPTEK.</li>
                            <li>MENJALIN KERJASAMA DENGAN DUNIA USAHA DAN DUNIA INDUSTRI SERTA MASYARAKAT.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-3">
                <div class="col-12">
                    <div class="vm-card">
                        <h4><i class="bi bi-geo-alt me-2"></i>Alamat</h4>
                        <p class="mb-1" style="color: rgba(0,0,0,0.72);">
                            Jl. Garuda No. 33 Kemayoran, Jakarta Pusat, Kemayoran, Jakarta Pusat 10610
                        </p>
                        <p class="mb-0" style="color: rgba(0,0,0,0.72);">
                            Telp. 021-42879461 &nbsp;•&nbsp; Email: smkmuhammadiyah1@yahoo.co.id
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Galeri Kegiatan -->
    <section id="galeri" class="section-soft">
        <div class="container">
            <div class="section-title">
                <h2>Galeri Kegiatan</h2>
                <p>Beberapa dokumentasi kegiatan (contoh foto acak). Silakan ganti/unggah foto resmi sekolah sesuai kebutuhan.</p>
            </div>

            <div class="row g-4">
                @php
                    // Foto acak (placeholder) – bisa diganti dengan foto resmi SMK Muhammadiyah 1 Jakarta kapan saja.
                    $gallery = [
                        ['title' => 'Kegiatan Sekolah', 'img' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=1200&auto=format&fit=crop'],
                        ['title' => 'Praktik Kejuruan', 'img' => 'https://images.unsplash.com/photo-1588072432836-7fb78d4a5f27?q=80&w=1200&auto=format&fit=crop'],
                        ['title' => 'Kegiatan Siswa', 'img' => 'https://images.unsplash.com/photo-1529070538774-1843cb3265df?q=80&w=1200&auto=format&fit=crop'],
                        ['title' => 'Pembelajaran', 'img' => 'https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?q=80&w=1200&auto=format&fit=crop'],
                        ['title' => 'Ekstrakurikuler', 'img' => 'https://images.unsplash.com/photo-1519452575417-564c1401ecc0?q=80&w=1200&auto=format&fit=crop'],
                        ['title' => 'Kegiatan Lapangan', 'img' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=1200&auto=format&fit=crop'],
                    ];
                @endphp

                @foreach ($gallery as $item)
                    <div class="col-md-6 col-lg-4">
                        <div class="galeri-card">
                            <div class="galeri-img-container">
                                <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}">
                            </div>
                            <div class="galeri-content">
                                <h4 class="mb-1">{{ $item['title'] }}</h4>
                                <p>Dokumentasi kegiatan sekolah (foto acak).</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- Program Keahlian -->
    <section id="program" class="section-block">
        <div class="container">
            <div class="section-title">
                <h2>Program Keahlian</h2>
                <p>Tiga kompetensi keahlian utama dengan akreditasi <b>A</b>.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="program-card">
                        <div class="program-image">
                            <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?q=80&w=1200&auto=format&fit=crop" alt="Teknik Instalasi Tenaga Listrik">
                        </div>
                        <div class="program-content">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h3 class="mb-0">TITL</h3>
                                <span class="badge rounded-pill program-badge">Akreditasi A</span>
                            </div>
                            <p class="mb-3" style="color: rgba(0,0,0,0.68);">Teknik Instalasi Tenaga Listrik</p>
                            <ul>
                                <li>Instalasi listrik bangunan</li>
                                <li>Perawatan dan pengujian instalasi</li>
                                <li>Keselamatan kerja (K3)</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="program-card">
                        <div class="program-image">
                            <img src="https://images.unsplash.com/photo-1617886903355-9354a4a74f00?q=80&w=1200&auto=format&fit=crop" alt="Teknik Kendaraan Ringan">
                        </div>
                        <div class="program-content">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h3 class="mb-0">TKR</h3>
                                <span class="badge rounded-pill program-badge">Akreditasi A</span>
                            </div>
                            <p class="mb-3" style="color: rgba(0,0,0,0.68);">Teknik Kendaraan Ringan</p>
                            <ul>
                                <li>Perawatan mesin dan sistem kendaraan</li>
                                <li>Diagnosa dan perbaikan dasar</li>
                                <li>Praktik bengkel terstruktur</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="program-card">
                        <div class="program-image">
                            <img src="https://images.unsplash.com/photo-1518779578993-ec3579fee39f?q=80&w=1200&auto=format&fit=crop" alt="Teknik Komputer dan Jaringan">
                        </div>
                        <div class="program-content">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h3 class="mb-0">TKJ</h3>
                                <span class="badge rounded-pill program-badge">Akreditasi A</span>
                            </div>
                            <p class="mb-3" style="color: rgba(0,0,0,0.68);">Teknik Komputer dan Jaringan</p>
                            <ul>
                                <li>Jaringan komputer (LAN/WAN)</li>
                                <li>Administrasi server dasar</li>
                                <li>Keamanan jaringan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <footer class="text-white py-5" id="kontak">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 text-center footer-section">
                    <h3>Kontak Sekolah</h3>
                    <p class="mb-2" style="color: rgba(255,255,255,0.85);">
                        Jl. Garuda No. 33 Kemayoran, Jakarta Pusat 10610
                    </p>
                    <p class="mb-2" style="color: rgba(255,255,255,0.85);">
                        Telp. 021-42879461 • Email: smkmuhammadiyah1@yahoo.co.id
                    </p>
                    <p class="mb-0" style="color: rgba(255,255,255,0.85);">
                        <span class="small">&copy; {{ date('Y') }} SMK MUHAMMADIYAH 2 JAKARTA</span>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
