<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Al-Muhajirin Depok</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        /* Warna utama Al-Muhajirin */
        :root {
            --primary-color: #1a5276; /* Biru tua khas Al-Muhajirin */
            --secondary-color: #ffc107; /* Kuning/Orange untuk aksen */
        }

        body { font-family: 'Poppins', sans-serif; }
        
        /* 1. Navbar Transparan */
        .navbar { transition: 0.3s; padding: 20px 0; }
        .navbar-brand { font-weight: 700; font-size: 24px; color: white !important; }
        .nav-link { color: rgba(255,255,255,0.8) !important; font-weight: 500; margin-left: 20px; }
        .nav-link:hover { color: white !important; }

        /* 2. Hero Section */
        .hero-section {
            background: linear-gradient(rgba(26, 82, 118, 0.8), rgba(26, 82, 118, 0.8)),
                        url('https://images.unsplash.com/photo-1541339907198-e0875662f976?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); 
            background-size: cover;
            background-position: center;
            height: 90vh; 
            display: flex;
            align-items: center;
            color: white;
            position: relative;
        }

        /* 3. Floating Cards */
        .floating-container {
            margin-top: -100px; 
            position: relative;
            z-index: 10;
        }
        .info-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            border: none;
            transition: transform 0.3s;
        }
        .info-card:hover { transform: translateY(-10px); }
        .icon-box { font-size: 40px; color: var(--primary-color); margin-bottom: 15px; }


        /* 4. Section Styling (Umum) */
        .section-title {
            text-align: center;
            margin-bottom: 40px;
            position: relative;
            color: var(--primary-color);
            padding-top: 40px;
        }
        
        .section-title h2 {
            font-size: 32px;
            margin-bottom: 10px;
            font-weight: 700;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--primary-color);
        }

        /* Styling Program Keahlian (Program Card) - DIKOREKSI */
        .program-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            height: 100%; /* Penting: Memastikan tinggi card sama */
        }
        .program-card:hover {
            transform: translateY(-5px);
        }
        .program-image { 
            height: 250px; /* Tinggi yang konsisten untuk gambar */
            overflow: hidden; 
        }
        .program-image img { 
            width: 100%; 
            height: 100%; 
            object-fit: cover; /* Memastikan gambar terpotong rapi tanpa distorsi */
            transition: transform 0.3s; 
        }
        .program-content { 
            padding: 25px; 
            height: calc(100% - 250px); /* Memastikan content menempati sisa tinggi card */
        }
        .program-content h3 { color: var(--primary-color); font-weight: 600; font-size: 24px; margin-bottom: 15px; }
        .program-content ul { list-style-type: none; padding-left: 0; }
        .program-content ul li { margin-bottom: 8px; padding-left: 25px; position: relative; }
        .program-content ul li::before {
            content: '\f054'; /* icon chevron right */
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--primary-color);
            font-size: 12px;
            top: 5px;
        }

        /* Styling Galeri Kegiatan */
        .galeri-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            height: 100%;
            text-align: center;
        }
        .galeri-img-container {
            width: 100%;
            height: 250px; 
            overflow: hidden;
            border-radius: 10px 10px 0 0;
        }
        .galeri-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover; 
            transition: transform 0.5s ease;
        }
        .galeri-card:hover img {
            transform: scale(1.05);
        }
        .galeri-content {
            padding: 20px;
        }
        .galeri-content h4 {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 0;
        }
        
        /* Footer Styling */
        .footer-section h3 {
            color: white;
            margin-bottom: 20px;
            font-size: 20px;
            position: relative;
            padding-bottom: 10px;
            display: inline-block;
        }
        
        .footer-section h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 2px;
            background-color: white;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg position-absolute w-100 z-3">
        <div class="container">
            <a class="navbar-brand" href="#">
                SMK AL-MUHAJIRIN
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#galeri">Galeri Kegiatan</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#program">Program Keahlian</a>
                    </li>
                   
                    <li class="nav-item ms-3">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="btn btn-primary px-4 py-2 rounded-pill fw-bold" style="background-color: var(--secondary-color); border-color: var(--secondary-color); color: var(--primary-color);">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-light text-primary px-4 py-2 rounded-pill fw-bold" style="color: var(--primary-color) !important;">Login</a>
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
                <div class="col-lg-7">
                    <span class="text-uppercase tracking-wider mb-2 d-block text-warning fw-bold">SMK VOCATIONAL SCHOOL</span>
                    <h1 class="display-3 fw-bold mb-4">SMK AL-MUHAJIRIN DEPOK</h1>
                    <p class="lead mb-5 text-white-50">Mewujudkan Generasi Unggul, Beriman, Berilmu, dan Berakhlak Mulia.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="floating-container mb-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card info-card h-100">
                        <div class="d-flex align-items-start">
                            <div class="icon-box me-3"><i class="fas fa-eye"></i></div>
                            <div>
                                <h4 class="fw-bold" style="color: var(--primary-color);">Visi Islami</h4>
                                <p class="text-muted small">Menjadi sekolah unggul yang menghasilkan lulusan beriman, berilmu, berakhlak mulia, dan berbudaya Islami.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card info-card h-100">
                        <div class="d-flex align-items-start">
                            <div class="icon-box me-3"><i class="fas fa-cogs"></i></div>
                            <div>
                                <h4 class="fw-bold" style="color: var(--primary-color);">Skill Vokasi</h4>
                                <p class="text-muted small">Fokus pada pengembangan keterampilan praktis yang sesuai dengan tuntutan industri modern di bidang TIK dan Kreatif.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card info-card h-100">
                        <div class="d-flex align-items-start">
                            <div class="icon-box me-3"><i class="fas fa-handshake"></i></div>
                            <div>
                                <h4 class="fw-bold" style="color: var(--primary-color);">Siap Kerja</h4>
                                <p class="text-muted small">Jalinan kerjasama dengan industri untuk magang dan memastikan lulusan siap bersaing di dunia kerja.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    

    <footer class="text-white py-5 mt-5 text-center" id="kontak" style="background-color: var(--primary-color) !important;">
        <div class="container">
            <div class="row justify-content-center g-4">
               
                
                <div class="col-md-6 col-lg-4 text-center footer-section">
                  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>