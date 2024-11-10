<x-guest-layout>
    <style>
        /* Base Styles */
        body {
            background: linear-gradient(135deg, #0a192f 0%, #112240 100%);
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
        }

        /* Animated Background */
        .register-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            position: relative;
        }

        .register-container::before {
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

        /* Card Styles */
        .register-card {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(12px);
            border-radius: 24px;
            padding: 3rem;
            width: 100%;
            max-width: 600px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(79, 255, 176, 0.2);
            position: relative;
            z-index: 1;
            animation: fadeIn 0.5s ease-out;
        }

        /* Logo */
        .logo-container {
            text-align: center;
            margin-bottom: 2rem;
        }

        .logo-container img {
            width: 100px;
            height: auto;
            transition: transform 0.3s ease;
            filter: drop-shadow(0 0 10px rgba(79, 255, 176, 0.3));
        }

        .logo-container img:hover {
            transform: scale(1.05);
        }

        /* Form Grid */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        .form-grid .full-width {
            grid-column: span 2;
        }

        /* Form Elements */
        .form-group {
            margin-bottom: 1rem;
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
        }

        .form-input:focus {
            outline: none;
            border-color: #4FFFB0;
            box-shadow: 0 0 0 3px rgba(79, 255, 176, 0.1);
        }

        .form-input::placeholder {
            color: #64748B;
        }

        /* Error Messages */
        .error-message {
            background: rgba(255, 99, 99, 0.1);
            border: 1px solid rgba(255, 99, 99, 0.2);
            color: #ff6363;
            padding: 1rem 1.5rem;
            border-radius: 12px;
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
            backdrop-filter: blur(8px);
        }

        .field-error {
            color: #ff6363;
            font-size: 0.85rem;
            margin-top: 0.3rem;
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(79, 255, 176, 0.2);
        }

        .register-button {
            background: rgba(79, 255, 176, 0.1);
            color: #4FFFB0;
            padding: 1rem 2rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1rem;
            border: 1px solid rgba(79, 255, 176, 0.2);
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .register-button:hover {
            background: rgba(79, 255, 176, 0.2);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(79, 255, 176, 0.2);
        }

        .login-link {
            color: #4FFFB0;
            text-decoration: none;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .login-link:hover {
            text-shadow: 0 0 10px rgba(79, 255, 176, 0.5);
            transform: translateX(-3px);
        }

        /* Password Requirements */
        .password-requirements {
            background: rgba(79, 255, 176, 0.05);
            border: 1px solid rgba(79, 255, 176, 0.2);
            padding: 1rem 1.5rem;
            border-radius: 12px;
            margin-top: 0.5rem;
            font-size: 0.85rem;
            color: #94A3B8;
        }

        .requirement-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.3rem;
        }

        .requirement-item i {
            font-size: 0.8rem;
            color: #4FFFB0;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .register-card {
                padding: 2rem;
                margin: 1rem;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .form-grid .full-width {
                grid-column: span 1;
            }

            .action-buttons {
                flex-direction: column-reverse;
                gap: 1rem;
            }

            .register-button {
                width: 100%;
                justify-content: center;
            }

            .login-link {
                justify-content: center;
            }
        }
    </style>



    <div class="register-container">
        <div class="register-card">
            <!-- Logo -->
            <style>
                /* Mengatur body untuk memusatkan konten */
                .logo-container {
                    text-align: center;
                    margin: 10;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
            </style>
            <div class="logo-container">
                <a href="/">
                    <img src="assets/img/logo_polri.png" alt="Logo">
                </a>
            </div>

            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="error-message">
                    <i class="fas fa-exclamation-circle"></i>
                    <ul class="list-none m-0 p-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Registration Form -->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-grid">
                    <!-- NIP/NRP -->
                    <div class="form-group">
                        <label for="nik" class="form-label">NIP/NRP</label>
                        <input id="nik" 
                               type="text" 
                               name="nik" 
                               class="form-input"
                               value="{{ old('nik') }}" 
                               required 
                               placeholder="Masukkan NIP/NRP">
                    </div>

                    <!-- Name -->
                    <div class="form-group">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input id="name" 
                               type="text" 
                               name="name" 
                               class="form-input"
                               value="{{ old('name') }}" 
                               required 
                               placeholder="Masukkan nama lengkap">
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" 
                               type="email" 
                               name="email" 
                               class="form-input"
                               value="{{ old('email') }}" 
                               required 
                               placeholder="Masukkan email">
                    </div>

                    <!-- Phone -->
                    <div class="form-group">
                        <label for="phone" class="form-label">No. HP</label>
                        <input id="phone" 
                               type="text" 
                               name="phone" 
                               class="form-input"
                               value="{{ old('phone') }}" 
                               required 
                               placeholder="Masukkan nomor HP">
                    </div>

                    <!-- Password -->
                    <div class="form-group full-width">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" 
                               type="password" 
                               name="password" 
                               class="form-input"
                               required 
                               placeholder="Masukkan password">
                        <div class="password-requirements">
                            <div class="requirement-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Minimal 8 karakter</span>
                            </div>
                            <div class="requirement-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Kombinasi huruf dan angka</span>
                            </div>
                            <div class="requirement-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Minimal satu karakter khusus</span>
                            </div>
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group full-width">
                        <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                        <input id="password_confirmation" 
                               type="password" 
                               name="password_confirmation" 
                               class="form-input"
                               required 
                               placeholder="Konfirmasi password Anda">
                    </div>
                </div>

                <div class="action-buttons">
                    <a href="{{ route('login') }}" class="login-link">
                        <i class="fas fa-arrow-left"></i>
                        <span>Sudah punya akun? Login</span>
                    </a>
                    <button type="submit" class="register-button">
                        <i class="fas fa-user-plus"></i>
                        <span>Daftar</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>