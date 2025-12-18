<div>
    {{-- Custom CSS untuk halaman ini --}}
    <style>
        /* Variabel Warna Tema Al-Muhajirin */
        :root {
            --primary-color: #1B5E20; /* Hijau tua */
            --secondary-color: #FBC02D; /* Aksen kuning emas */
        }
        
        .auth-bg {
            /* --- BAGIAN INI YANG DIUBAH (Latar Belakang & Overlay) --- */
            
            /* Menggunakan warna Biru Tua Al-Muhajirin sebagai overlay */
            background-image: linear-gradient(rgba(27, 94, 32, 0.75), rgba(27, 94, 32, 0.75)), 
                              /* Menggunakan gambar SMK Sandikta (diasumsikan diganti nanti) */
                              url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=2070&auto=format&fit=crop'); 
            
            /* Jika Anda punya URL gambar SMK Al-Muhajirin, ganti URL di atas atau gunakan ini: */
            /* background-image: linear-gradient(rgba(27, 94, 32, 0.75), rgba(27, 94, 32, 0.75)), url('URL_FOTO_SMK_ALMUHAJIRIN'); */

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.95); /* Putih sedikit transparan */
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 420px;
            padding: 2.5rem;
            position: relative;
            overflow: hidden;
        }

        .login-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            /* Garis Aksen menggunakan warna utama Al-Muhajirin */
            background: var(--primary-color); 
        }

        .logo-container img {
            height: 100px;
            width: auto;
            margin-bottom: 1rem;
            filter: drop-shadow(0 5px 5px rgba(0,0,0,0.1));
        }

        .form-control {
            border-radius: 10px;
            padding: 12px 15px;
            font-size: 0.95rem;
        }

        .form-control:focus {
            /* Warna fokus disesuaikan dengan tema Al-Muhajirin (Biru Tua) */
            box-shadow: 0 0 0 3px rgba(27, 94, 32, 0.20); 
            border-color: var(--primary-color);
        }
        
        .btn-primary {
            /* Tombol menggunakan warna Biru Tua Al-Muhajirin */
            background: var(--primary-color);
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            /* Efek hover gelap sedikit */
            background: #124116; 
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(27, 94, 32, 0.30);
        }
    </style>

    <div class="auth-bg">
        <div class="login-card animate__animated animate__fadeInUp">
            
            {{-- Logo Section --}}
            <div class="text-center logo-container">
                {{-- Tombol Kembali --}}
                <div class="mb-3 text-start">
                    <a href="{{ route('welcome') }}" class="text-decoration-none text-muted small">
                        <i class="bi bi-arrow-left"></i> Kembali ke Homepage
                    </a>
                </div>


                {{-- Logo Sekolah (Diubah ke placeholder Al-Muhajirin) --}}
                {{-- GANTI DENGAN URL LOGO SMK AL-MUHAJIRIN YANG SESUNGGUHNYA --}}
               
                
                <h4 class="font-weight-bold" style="color: var(--primary-color); margin-bottom: 1px;">SMK MUHAMMADIYAH 1 JAKARTA</h4>
                <p class="text-muted small mb-4"></p>
            </div>

            {{-- Alerts Section (Tetap menggunakan sintaks Laravel Blade) --}}
            @if (session('error'))
            <div class="alert alert-warning alert-dismissible fade show text-sm" role="alert">
                <i class="bi bi-exclamation-triangle me-2"></i> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @error('email')
            <div class="alert alert-danger alert-dismissible fade show text-sm" role="alert">
                <i class="bi bi-x-circle me-2"></i> {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @enderror

            @error('password')
            <div class="alert alert-danger alert-dismissible fade show text-sm" role="alert">
                <i class="bi bi-x-circle me-2"></i> {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @enderror

            {{-- Form Section --}}
            <form wire:submit.prevent="authenticate">
                
                {{-- Email Input --}}
                <div class="form-group position-relative has-icon-left mb-3">
                    <input type="email" wire:model.blur="email"
                        class="form-control @error('email') is-invalid @enderror" 
                        placeholder="Alamat Email"
                        autofocus>
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>

                {{-- Password Input --}}
                <div class="form-group mb-3 position-relative has-icon-left">
                    <input type="{{ $input_type }}" wire:model.blur="password"
                        class="form-control pe-5 @error('password') is-invalid @enderror"
                        placeholder="Kata Sandi" />
                    
                    {{-- Toggle Password Visibility --}}
                    <span wire:click="togglePasswordVisibility" title="{{ $input_title }}"
                        class="position-absolute top-50 end-0 translate-middle-y me-3 text-muted" 
                        style="cursor: pointer; z-index: 10;">
                        <i class="{{ $icon }}"></i>
                    </span>

                    <div class="form-control-icon">
                        <i class="bi bi-lock"></i>
                    </div>
                </div>

                {{-- Remember Me --}}
                <div class="form-check d-flex align-items-center mb-4">
                    <input class="form-check-input me-2" wire:model="remember_me" type="checkbox" id="rememberMe">
                    <label class="form-check-label text-gray-600 small" for="rememberMe">
                        Ingat Saya
                    </label>
                </div>

                {{-- Submit Button --}}
                <button class="btn btn-primary w-100 shadow-sm" type="submit">
                    Masuk Dashboard
                </button>
            </form>
            
            {{-- Footer Copyright (Diubah ke Al-Muhajirin) --}}
            <div class="text-center mt-4">
                <p class="text-muted small" style="font-size: 0.7rem;">
                    &copy; {{ date('Y') }} SMK MUHAMMADIYAH 1 JAKARTA
                </p>
            </div>
        </div>
    </div>
</div>