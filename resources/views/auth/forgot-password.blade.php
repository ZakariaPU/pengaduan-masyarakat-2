<x-guest-layout>
    <style>
        /* Base Styles */
        body {
            background: linear-gradient(135deg, #0a192f 0%, #112240 100%);
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
        }

        /* Container & Background */
        .reset-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            position: relative;
        }

        .reset-container::before {
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
        .reset-card {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(12px);
            border-radius: 24px;
            padding: 3rem;
            width: 100%;
            max-width: 500px;
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

        /* Description */
        .reset-description {
            background: rgba(79, 255, 176, 0.05);
            border: 1px solid rgba(79, 255, 176, 0.2);
            padding: 1.5rem;
            border-radius: 12px;
            margin-bottom: 2rem;
            color: #94A3B8;
            font-size: 0.95rem;
            line-height: 1.6;
            text-align: justify;
            backdrop-filter: blur(4px);
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
        }

        .form-input:focus {
            outline: none;
            border-color: #4FFFB0;
            box-shadow: 0 0 0 3px rgba(79, 255, 176, 0.1);
        }

        .form-input::placeholder {
            color: #64748B;
        }

        /* Button */
        .reset-button {
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
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .reset-button:hover {
            background: rgba(79, 255, 176, 0.2);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(79, 255, 176, 0.2);
        }

        .reset-button i {
            font-size: 1.1rem;
        }

        /* Message Styles */
        .message {
            padding: 1.25rem;
            border-radius: 12px;
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            backdrop-filter: blur(4px);
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

        /* Back to Login */
        .back-to-login {
            text-align: center;
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(79, 255, 176, 0.2);
        }

        .back-link {
            color: #4FFFB0;
            text-decoration: none;
            font-size: 0.95rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }

        .back-link:hover {
            transform: translateX(-3px);
            text-shadow: 0 0 10px rgba(79, 255, 176, 0.5);
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
        @media (max-width: 640px) {
            .reset-container {
                padding: 1rem;
            }

            .reset-card {
                padding: 2rem;
            }

            .reset-description {
                padding: 1rem;
                font-size: 0.9rem;
            }

            .message {
                padding: 1rem;
            }
        }
    </style>

    <div class="reset-container">
        <div class="reset-card">
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

            <!-- Description -->
            <div class="reset-description">
                <p>{{ __('Lupa kata sandi Anda? Tidak masalah. Beri tahu kami alamat email Anda dan kami akan mengirimkan tautan reset kata sandi yang memungkinkan Anda membuat kata sandi baru.') }}</p>
            </div>

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

            <!-- Form -->
            <form method="POST" action="{{ route('password.email') }}">
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

                <button type="submit" class="reset-button">
                    <i class="fas fa-paper-plane"></i>
                    {{ __('Kirim Tautan Reset Password') }}
                </button>
            </form>

            <!-- Back to Login -->
            <div class="back-to-login">
                <a href="{{ route('login') }}" class="back-link">
                    <i class="fas fa-arrow-left"></i>
                    <span>Kembali ke Halaman Login</span>
                </a>
            </div>
        </div>
    </div>
</x-guest-layout>