<x-guest-layout>
    <style>
        /* Base Styles */
        body {
            background: linear-gradient(135deg, #0a192f 0%, #112240 100%);
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Animated Background */
        .login-container {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            min-height: 100vh;
            max-width: 1440px;
            margin: 0 auto;
            gap: 2rem;
            padding: 2rem;
            position: relative;
        }

        .login-container::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 20%, rgba(79, 255, 176, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(30, 60, 114, 0.05) 0%, transparent 50%);
            pointer-events: none;
            z-index: 0;
        }

        /* Info Section */
        .login-info {
            padding: 3rem 4rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            z-index: 1;
        }

        .info-content {
            max-width: 500px;
        }

        .login-info h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #4FFFB0;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .login-info p {
            font-size: 1.1rem;
            color: #94A3B8;
            margin-bottom: 2.5rem;
            line-height: 1.8;
            text-align: justify;
        }

        /* Features List */
        .features-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            gap: 1.2rem;
        }

        .features-list li {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 1rem;
            align-items: center;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(79, 255, 176, 0.2);
            border-radius: 12px;
            transition: all 0.3s ease;
            backdrop-filter: blur(8px);
        }

        .features-list li:hover {
            transform: translateX(5px);
            background: rgba(79, 255, 176, 0.05);
            border-color: #4FFFB0;
        }

        .features-list i {
            color: #4FFFB0;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.5rem;
            height: 2.5rem;
            background: rgba(79, 255, 176, 0.1);
            border-radius: 8px;
            border: 1px solid rgba(79, 255, 176, 0.2);
        }

        .features-list span {
            color: #CBD5E1;
            font-size: 1rem;
            line-height: 1.5;
        }

        /* Auth Card */
        .auth-card-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 1;
        }

        .auth-card {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(12px);
            border-radius: 24px;
            padding: 3rem;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(79, 255, 176, 0.2);
        }

        /* Form Elements */
        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            color: #4FFFB0;
            font-size: 0.95rem;
            font-weight: 600;
            margin-bottom: 0.7rem;
            display: block;
        }

        .form-input {
            width: 100%;
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(79, 255, 176, 0.2);
            border-radius: 12px;
            padding: 1rem 1.2rem;
            color: #CBD5E1;
            font-size: 1rem;
            transition: all 0.3s ease;
            margin-bottom: 0.5rem;
        }

        .form-input:focus {
            outline: none;
            border-color: #4FFFB0;
            box-shadow: 0 0 0 3px rgba(79, 255, 176, 0.1);
        }

        .form-input::placeholder {
            color: #64748B;
        }

        /* Remember Me Section */
        .remember-forgot {
            display: grid;
            grid-template-columns: 1fr auto;
            align-items: center;
            gap: 1rem;
            margin: 1.5rem 0;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .checkbox-label {
            color: #94A3B8;
            font-size: 0.9rem;
        }

        .forgot-password {
            color: #4FFFB0;
            font-size: 0.9rem;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .forgot-password:hover {
            text-shadow: 0 0 10px rgba(79, 255, 176, 0.5);
        }

        /* Login Button */
        .login-button {
            background: rgba(79, 255, 176, 0.1);
            color: #4FFFB0;
            width: 100%;
            padding: 1rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1rem;
            border: 1px solid rgba(79, 255, 176, 0.2);
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 1rem;
        }

        .login-button:hover {
            background: rgba(79, 255, 176, 0.2);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(79, 255, 176, 0.2);
        }

        /* Messages */
        .message {
            padding: 1rem 1.5rem;
            border-radius: 12px;
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            backdrop-filter: blur(8px);
        }

        .success-message {
            background: rgba(46, 213, 115, 0.1);
            border: 1px solid rgba(46, 213, 115, 0.2);
            color: #2ed573;
        }

        .error-message {
            background: rgba(255, 99, 99, 0.1);
            border: 1px solid rgba(255, 99, 99, 0.2);
            color: #ff6363;
        }

        /* Logo Section */
        .logo-container {
            text-align: center;
            margin-bottom: 2rem;
        }

        .logo-container img {
            height: 4rem;
            width: auto;
            filter: drop-shadow(0 0 10px rgba(79, 255, 176, 0.3));
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .auth-card {
            animation: fadeIn 0.5s ease-out;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .login-container {
                grid-template-columns: 1fr;
                padding: 1rem;
            }

            .login-info {
                padding: 2rem;
                text-align: center;
            }

            .info-content {
                max-width: 600px;
                margin: 0 auto;
            }

            .features-list {
                max-width: 500px;
                margin: 0 auto;
            }

            .login-info p {
                text-align: center;
            }
        }

        @media (max-width: 640px) {
            .auth-card {
                padding: 2rem;
            }

            .remember-forgot {
                grid-template-columns: 1fr;
                gap: 0.5rem;
            }

            .forgot-password {
                text-align: center;
            }

            .features-list li {
                padding: 0.8rem;
            }
        }
    </style>

    <div class="login-container">
        <!-- Info Section -->
        <div class="login-info">
            <div class="info-content">
                <h2>Selamat Datang di SIGAPTELNET</h2>
                <p>
                    Sistem Informasi Pengaduan Layanan Internet & Telepon yang terintegrasi untuk memudahkan Anda dalam melaporkan dan memantau penanganan gangguan layanan secara efisien dan real-time.
                </p>
                
                <ul class="features-list">
                    <li>
                        <i class="fas fa-clipboard-check"></i>
                        <span>Pelaporan gangguan yang cepat dan terstruktur</span>
                    </li>
                    <li>
                        <i class="fas fa-chart-line"></i>
                        <span>Pemantauan status penanganan secara real-time</span>
                    </li>
                    <li>
                        <i class="fas fa-bell"></i>
                        <span>Notifikasi update progres penanganan</span>
                    </li>
                    <li>
                        <i class="fas fa-history"></i>
                        <span>Riwayat pengaduan yang terorganisir</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Auth Card Section -->
        <div class="auth-card-wrapper">
            <div class="auth-card">
                <!-- Logo -->
                <div class="logo-container">
                    <a href="/">
                        <img src="assets/img/logo_polri.png" alt="Logo">
                    </a>
                </div>
                <style>
                    /* Mengatur body untuk memusatkan konten */
                    body {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100vh;
                        margin: 0;
                        background-color: #f0f0f0; /* Warna latar belakang opsional */
                    }
            
                    /* Mengatur .logo-container agar terpusat */
                    .logo-container {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }
                </style>

                <!-- Messages -->
                @if (session('status'))
                    <div class="message success-message">
                        <i class="fas fa-check-circle"></i>
                        <span>{{ session('status') }}</span>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="message error-message">
                        <i class="fas fa-exclamation-circle"></i>
                        <ul class="list-none m-0 p-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" 
                               type="email" 
                               name="email" 
                               class="form-input"
                               value="{{ old('email') }}" 
                               required 
                               autofocus
                               placeholder="Masukkan email Anda">
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" 
                               type="password" 
                               name="password" 
                               class="form-input"
                               required
                               placeholder="Masukkan password Anda">
                    </div>

                    <div class="remember-forgot">
                        <label class="remember-me">
                            <input type="checkbox" 
                                   name="remember" 
                                   class="checkbox-input">
                            <span class="checkbox-label">Ingat Saya</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" 
                               class="forgot-password">
                                Lupa kata sandi?
                            </a>
                        @endif
                    </div>

                    <button type="submit" class="login-button">
                        Masuk ke SIGAPTELNET
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>