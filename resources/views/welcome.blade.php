<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


  <title>SIGAPTELNET</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo_polda.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  @include('includes.landing.stylesheet')


  <!-- =======================================================
    * Template Name: Vesperr - v4.7.0
    * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>

  <style>
    body {
    font-family: "poppins";
    }
    /* Base Theme Colors */
:root {
  --primary: #4FFFB0;
  --primary-dark: #3DE495;
  --secondary: #1E3C72;
  --background: #0a192f;
  --text: #94A3B8;
  --text-light: #CBD5E1;
  --white: #FFFFFF;
}

/* Global Styles */
body {
  font-family: 'Poppins', sans-serif;
  background: var(--background);
  color: var(--text);
}

/* Hero Section Enhancements */
#hero {
  position: relative;
  min-height: 100vh;
  background: linear-gradient(135deg, #0a192f 0%, #112240 100%);
  padding-top: 80px;
  overflow: hidden;
}

/* Animated Background */
.animated-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0.1;
  background: 
    radial-gradient(circle at 20% 20%, var(--primary) 0%, transparent 50%),
    radial-gradient(circle at 80% 80%, var(--secondary) 0%, transparent 50%);
  filter: blur(100px);
  animation: pulse 15s ease-in-out infinite alternate;
}

@keyframes pulse {
  0% { transform: scale(1); }
  100% { transform: scale(1.1); }
}

/* Content Container */
.content-wrapper {
  position: relative;
  z-index: 2;
  background: rgba(255, 255, 255, 0.03);
  backdrop-filter: blur(10px);
  border-radius: 24px;
  border: 1px solid rgba(255, 255, 255, 0.1);
  padding: 3rem;
  max-width: 1200px;
  margin: 2rem auto;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
}

/* Logo & Stats Section */
.logo-container {
  display: flex;
  justify-content: center;
  margin-bottom: 2rem;
}

.logo {
  height: 80px;
  transition: transform 0.3s ease;
}

.logo:hover {
  transform: scale(1.05);
}

/* Stats Bar */
.stats-bar {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 2rem;
  margin: 2rem 0;
}

.stat-item {
  background: rgba(255, 255, 255, 0.05);
  padding: 1.5rem;
  border-radius: 16px;
  text-align: center;
  transition: transform 0.3s ease;
}

.stat-item:hover {
  transform: translateY(-5px);
  background: rgba(255, 255, 255, 0.08);
}

.stat-item i {
  font-size: 2rem;
  color: var(--primary);
  margin-bottom: 1rem;
}

.counter {
  font-size: 2.5rem;
  font-weight: 700;
  color: var(--white);
  margin-bottom: 0.5rem;
}

/* Typography Enhancements */
.main-title {
  font-size: 3rem;
  font-weight: 800;
  color: var(--white);
  text-align: center;
  line-height: 1.2;
  margin-bottom: 1.5rem;
}

.highlight {
  color: var(--primary);
  display: block;
  margin-top: 0.5rem;
}

.slogan {
  font-size: 1.8rem;
  color: #ffd700;
  text-align: center;
  margin: 2rem 0;
  font-style: italic;
}

/* Action Buttons */
.button-container {
  display: flex;
  justify-content: center;
  gap: 2rem;
  margin: 3rem 0;
}

.btn-primary, .btn-secondary {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 1.2rem 2.5rem;
  border-radius: 12px;
  transition: all 0.3s ease;
  text-decoration: none;
  min-width: 220px;
}

.btn-primary {
  background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
  color: var(--background);
}

.btn-secondary {
  background: transparent;
  border: 2px solid var(--primary);
  color: var(--primary);
}

.btn-primary:hover, .btn-secondary:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(79, 255, 176, 0.2);
}

/* Quick Access */
.quick-access {
  display: flex;
  justify-content: center;
  gap: 3rem;
  margin-top: 3rem;
}

.quick-access-item {
  display: flex;
  flex-direction: column;
  align-items: center;
  color: var(--text-light);
  transition: all 0.3s ease;
  cursor: pointer;
}

.quick-access-item:hover {
  color: var(--primary);
  transform: translateY(-3px);
}

.quick-access-item i {
  font-size: 1.5rem;
  margin-bottom: 0.5rem;
}

/* Responsive Design */
@media (max-width: 768px) {
  .content-wrapper {
    margin: 1rem;
    padding: 2rem;
  }

  .stats-bar {
    grid-template-columns: 1fr;
  }

  .button-container {
    flex-direction: column;
    align-items: center;
  }

  .main-title {
    font-size: 2rem;
  }

  .slogan {
    font-size: 1.4rem;
  }
}

/* Animation Classes */
.fade-up {
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.6s ease;
}

.fade-up.active {
  opacity: 1;
  transform: translateY(0);
}

/* Particle Animation */
#particles-js {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 1;
}
  </style>
 
  
  <body>

    @include('includes.landing.navbar')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    


    <style>
        /* Base Styles */
        #hero {
            position: relative;
            min-height: 100vh;
            background: linear-gradient(135deg, #0a192f 0%, #112240 100%);
            overflow: hidden;
            padding-top: calc(70px + 2rem); /* Navbar height + extra padding */
        }
        
        /* Content Wrapper Base */
        .content-wrapper {
            position: relative;
            z-index: 2;
            padding: 3rem;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            max-width: 1200px;
            margin: 0 auto;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        /* Responsive Adjustments */
        @media screen and (max-width: 1440px) {
            #hero {
                padding-top: calc(70px + 1.5rem);
            }
        
            .content-wrapper {
                padding: 2.5rem;
                margin: 0 2rem;
            }
        }
        
        @media screen and (max-width: 1024px) {
            #hero {
                padding-top: calc(65px + 1.5rem);
            }
        
            .content-wrapper {
                padding: 2rem;
                margin: 0 1.5rem;
            }
        
            .main-title {
                font-size: 2.4rem;
            }
        }
        
        @media screen and (max-width: 768px) {
            #hero {
                padding-top: calc(60px + 1rem);
                min-height: calc(100vh - 60px);
            }
        
            .content-wrapper {
                padding: 1.5rem;
                margin: 0 1rem;
            }
        
            .main-title {
                font-size: 2rem;
            }
        
            .stats-bar {
                flex-direction: column;
                gap: 1.5rem;
            }
        
            .stat-item i {
                font-size: 1.8rem;
            }
        
            .counter {
                font-size: 1.6rem;
            }
        }
        
        @media screen and (max-width: 480px) {
            #hero {
                padding-top: calc(55px + 0.8rem);
            }
        
            .content-wrapper {
                padding: 1.2rem;
                margin: 0 0.8rem;
            }
        
            .main-title {
                font-size: 1.8rem;
            }
        
            .slogan {
                font-size: 1.4rem;
            }
        
            .description {
                font-size: 1rem;
            }
        
            .logo {
                height: 60px;
            }
        
            .button-container {
                margin: 1.5rem 0;
            }
        }
        
        /* Height-based Media Queries */
        @media screen and (max-height: 800px) {
            #hero {
                padding-top: calc(60px + 0.8rem);
            }
        
            .content-wrapper {
                padding: 1.5rem;
            }
        
            .header-section {
                margin-bottom: 1.5rem;
            }
        
            .logo {
                height: 60px;
            }
        
            .stats-bar {
                margin: 1rem 0;
            }
        }
        
        @media screen and (max-height: 600px) {
            #hero {
                padding-top: calc(55px + 0.5rem);
                height: auto;
                min-height: 100vh;
            }
        
            .content-wrapper {
                padding: 1rem;
            }
        
            .logo {
                height: 50px;
            }
        
            .main-title {
                font-size: 1.6rem;
            }
        
            .slogan {
                font-size: 1.2rem;
                margin: 1rem 0;
            }
        
            .description {
                font-size: 0.9rem;
                margin: 1rem 0;
            }
        }
        
        /* Container Adjustments */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        @media screen and (max-width: 1200px) {
            .container {
                max-width: 960px;
            }
        }
        
        @media screen and (max-width: 992px) {
            .container {
                max-width: 720px;
            }
        }
        
        @media screen and (max-width: 768px) {
            .container {
                max-width: 540px;
            }
        }
        
        @media screen and (max-width: 576px) {
            .container {
                padding: 0 10px;
            }
        }
        
        /* Button Responsiveness */
        .button-container {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin: 2rem 0;
            flex-wrap: wrap;
        }
        
        .btn-primary, .btn-secondary {
            min-width: 200px;
            padding: 1rem 2rem;
        }
        
        @media screen and (max-width: 768px) {
            .button-container {
                flex-direction: column;
                align-items: center;
                gap: 1rem;
            }
        
            .btn-primary, .btn-secondary {
                width: 100%;
                max-width: 280px;
                padding: 0.8rem 1.5rem;
            }
        }
        
        /* Safe Area Insets for Modern Devices */
        @supports (padding: max(0px)) {
            #hero {
                padding-top: max(calc(70px + 2rem), env(safe-area-inset-top));
                padding-left: max(1rem, env(safe-area-inset-left));
                padding-right: max(1rem, env(safe-area-inset-right));
            }
        }
        
        /* Animation Performance Optimization */
        @media (prefers-reduced-motion: reduce) {
            .content-wrapper {
                animation: none;
                transition: none;
            }
        
            [data-aos] {
                transition: none !important;
                transform: none !important;
                opacity: 1 !important;
            }
        }
        </style>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <!-- Particles Background -->
    <div id="particles-js"></div>
    
    <!-- Main Content -->
    <div class="container d-flex justify-content-center align-items-center">
        <div class="text-center content-wrapper">
            
            <!-- Header Section -->
            <div class="header-section" data-aos="fade-down">
                <div class="logo-container">
                    <img src="assets/img/logo_polri.png" alt="Logo" class="logo">
                </div>
                <div class="stats-bar">
                    <div class="stat-item">
                        <i class="fas fa-ticket-alt"></i>
                        <span class="counter">896</span>
                        <span class="label">Pengaduan Selesai</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-clock"></i>
                        <span class="counter">4.5</span>
                        <span class="label">Jam Rata-rata Respon</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-users"></i>
                        <span class="counter">98</span>
                        <span class="label">% Kepuasan</span>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <h1 class="main-title" data-aos="fade-up">
                Sistem Informasi Pengaduan 
                <span class="highlight">Layanan Internet & Telepon</span>
            </h1>
            
            <div class="divider" data-aos="fade-up" data-aos-delay="100">
                <div class="divider-line"></div>
                <i class="fas fa-headset divider-icon"></i>
                <div class="divider-line"></div>
            </div>
            
            <h2 class="slogan" data-aos="fade-up" data-aos-delay="200">
                "Mengabdi dengan Integrasi, Melayani dengan Teknologi"
            </h2>
            
            <h2 class="description" data-aos="fade-up" data-aos-delay="400">
                Kami siap membantu! Laporkan masalah Anda di sini untuk penyelesaian yang cepat dan aman.
            </h2>

            <!-- Action Buttons -->
            <div class="button-container" data-aos="fade-up" data-aos-delay="600">
                <a href="{{ url('login')}}" class="btn-primary">
                    <i class="fas fa-file-alt"></i>
                    <span>Laporkan Pengaduan</span>
                    <small>Response time < 24 jam</small>
                </a>
                <a href="#services" class="btn-secondary">
                    <i class="fas fa-info-circle"></i>
                    <span>Lihat Mekanisme</span>
                    <small>Panduan Lengkap</small>
                </a>
            </div>

            <!-- Quick Access -->
            <div class="quick-access" data-aos="fade-up" data-aos-delay="800">
                <div class="quick-access-item">
                    <i class="fas fa-book"></i>
                    <span>Panduan</span>
                </div>
                
                    <!-- Quick Access Item -->
                    <div class="quick-access-item" onclick="openWhatsApp()">
                        <i class="fas fa-phone-alt"></i>
                        <span>Kontak</span>
                    </div>

                    <!-- Modal HTML - Tambahkan di akhir body -->
                    <div id="whatsappModal" class="modal-overlay">
                        <div class="modal-content">
                            <div class="modal-icon">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <h3 class="modal-title">Hubungi Kami</h3>
                            <p class="modal-text">Apakah Anda ingin menghubungi tim support kami melalui WhatsApp?</p>
                            <div class="modal-buttons">
                                <button class="cancel-button" onclick="closeWhatsAppModal()">
                                    <i class="fas fa-times"></i>
                                    Batal
                                </button>
                                <button class="confirm-button" onclick="confirmWhatsApp()">
                                    <i class="fab fa-whatsapp"></i>
                                    Hubungi
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- CSS - Tambahkan di bagian style -->
                    <style>
                    .modal-overlay {
                        position: fixed;
                        top: 0;
                        left: 0;
                        right: 0;
                        bottom: 0;
                        /* background: rgba(10, 25, 47, 0.95); */
                        display: none;
                        justify-content: center;
                        align-items: center;
                        z-index: 1000;
                        backdrop-filter: blur(8px);
                        padding: 1rem;
                        animation: fadeIn 0.3s ease-out;
                    }

                    .modal-content {
                        background: #0a192f;
                        border: 1px solid rgba(79, 255, 176, 0.2);
                        border-radius: 24px;
                        padding: 2.5rem;
                        max-width: 400px;
                        width: 100%;
                        text-align: center;
                        position: relative;
                        backdrop-filter: blur(12px);
                        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
                        animation: scaleIn 0.3s ease-out;
                    }

                    .modal-icon {
                        width: 80px;
                        height: 80px;
                        background: rgba(79, 255, 176, 0.1);
                        border: 2px solid rgba(79, 255, 176, 0.2);
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        margin: 0 auto 1.5rem;
                    }

                    .modal-icon i {
                        font-size: 2.5rem;
                        color: #4FFFB0;
                    }

                    .modal-title {
                        color: #4FFFB0;
                        font-size: 1.5rem;
                        font-weight: 700;
                        margin-bottom: 1rem;
                    }

                    .modal-text {
                        color: #94A3B8;
                        font-size: 1.1rem;
                        line-height: 1.6;
                        margin-bottom: 2rem;
                    }

                    .modal-buttons {
                        display: grid;
                        grid-template-columns: 1fr 1fr;
                        gap: 1rem;
                    }

                    .cancel-button, .confirm-button {
                        padding: 1rem;
                        border-radius: 12px;
                        font-weight: 600;
                        font-size: 1rem;
                        transition: all 0.3s ease;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        gap: 0.5rem;
                        cursor: pointer;
                    }

                    .cancel-button {
                        background: rgba(255, 255, 255, 0.02);
                        color: #94A3B8;
                        border: 1px solid rgba(255, 255, 255, 0.1);
                    }

                    .confirm-button {
                        background: rgba(79, 255, 176, 0.1);
                        color: #4FFFB0;
                        border: 1px solid rgba(79, 255, 176, 0.2);
                    }

                    .cancel-button:hover {
                        background: rgba(255, 255, 255, 0.05);
                        transform: translateY(-2px);
                    }

                    .confirm-button:hover {
                        background: rgba(79, 255, 176, 0.2);
                        transform: translateY(-2px);
                        box-shadow: 0 4px 12px rgba(79, 255, 176, 0.2);
                    }

                    @keyframes fadeIn {
                        from { opacity: 0; }
                        to { opacity: 1; }
                    }

                    @keyframes scaleIn {
                        from {
                            opacity: 0;
                            transform: scale(0.9);
                        }
                        to {
                            opacity: 1;
                            transform: scale(1);
                        }
                    }

                    @media (max-width: 480px) {
                        .modal-content {
                            padding: 2rem 1.5rem;
                        }

                        .modal-buttons {
                            grid-template-columns: 1fr;
                        }

                        .modal-icon {
                            width: 60px;
                            height: 60px;
                        }

                        .modal-icon i {
                            font-size: 2rem;
                        }

                        .modal-title {
                            font-size: 1.25rem;
                        }

                        .modal-text {
                            font-size: 1rem;
                        }
                    }

                    .whatsapp-button {
                            background: rgba(79, 255, 176, 0.1);
                            border: 1px solid rgba(79, 255, 176, 0.2);
                            color: #4FFFB0;
                            padding: 0.5rem 1rem;
                            border-radius: 10px;
                            transition: all 0.3s ease;
                        }

                        .whatsapp-button:hover {
                            background: rgba(79, 255, 176, 0.2);
                            transform: translateY(-2px);
                            box-shadow: 0 4px 12px rgba(79, 255, 176, 0.2);
                        }

                        /* Update Modal Position */
                        .modal-overlay {
                            z-index: 1000;  /* Memastikan modal muncul di atas semua elemen */
                        }

                        .modal-content {
                            margin-top: -50vh;  /* Menggeser modal ke atas */
                        }

                        @media (max-width: 768px) {
                            .modal-content {
                                margin-top: 0;
                            }
                            
                            .whatsapp-button {
                                width: 100%;
                                justify-content: center;
                                margin-top: 0.5rem;
                            }
                        }
                    </style>

                    <!-- JavaScript - Tambahkan di bagian script -->
                    <script>
                    function openWhatsApp() {
                        document.getElementById('whatsappModal').style.display = 'flex';
                        document.body.style.overflow = 'hidden';
                    }

                    function closeWhatsAppModal() {
                        document.getElementById('whatsappModal').style.display = 'none';
                        document.body.style.overflow = 'auto';
                    }

                    function confirmWhatsApp() {
                        const phoneNumber = '1234213';
                        window.open(`https://wa.me/${phoneNumber}`, '_blank');
                        closeWhatsAppModal();
                    }

                    // Close modal when clicking outside
                    document.getElementById('whatsappModal').addEventListener('click', function(e) {
                        if (e.target === this) {
                            closeWhatsAppModal();
                        }
                    });

                    // Close modal with Escape key
                    document.addEventListener('keydown', function(e) {
                        if (e.key === 'Escape' && document.getElementById('whatsappModal').style.display === 'flex') {
                            closeWhatsAppModal();
                        }
                    });
                    </script>

            </div>
        </div>
    </div>

    <style>
        /* Base Styles */
        #hero {
            position: relative;
            min-height: 100vh;
            background: linear-gradient(135deg, #0a192f 0%, #112240 100%);
            overflow: hidden;
        }

        /* Particles Background */
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        /* Content Wrapper */
        .content-wrapper {
            position: relative;
            z-index: 2;
            padding: 3rem;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            max-width: 1200px;
            margin: 0 auto;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Header Section */
        .header-section {
            margin-bottom: 3rem;
        }

        .logo-container {
            margin-bottom: 2rem;
        }

        .logo {
            height: 80px;
            width: auto;
        }

        /* Stats Bar */
        .stats-bar {
            display: flex;
            justify-content: center;
            gap: 3rem;
            margin: 2rem 0;
        }

        .stat-item {
            text-align: center;
            color: #ffffff;
        }

        .stat-item i {
            font-size: 2rem;
            color: #64ffda;
            margin-bottom: 0.5rem;
        }

        .counter {
            font-size: 1.8rem;
            font-weight: 700;
            color: #ffffff;
            display: block;
        }

        .label {
            font-size: 0.9rem;
            color: #8892b0;
        }

        /* Typography */
        .main-title {
            font-size: 2.8rem;
            font-weight: 700;
            color: #ffffff;
            line-height: 1.3;
        }

        .highlight {
            color: #64ffda;
            display: block;
        }

        /* Divider */
        .divider {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 2rem 0;
        }

        .divider-line {
            height: 2px;
            width: 100px;
            background: linear-gradient(90deg, transparent, #64ffda, transparent);
        }

        .divider-icon {
            font-size: 1.5rem;
            color: #64ffda;
            margin: 0 1rem;
        }

        .slogan {
            font-size: 2rem;
            color: #ffd700;
            font-weight: 600;
            margin: 1.5rem 0;
            font-style: italic;
        }

        .description {
            font-size: 1.4rem;
            color: #8892b0;
            font-weight: 400;
            margin: 1.5rem 0;
            line-height: 1.6;
        }

        /* Buttons */
        .button-container {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin: 2.5rem 0;
        }

        .btn-primary, .btn-secondary {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 1.2rem 2.5rem;
            border-radius: 12px;
            transition: all 0.3s ease;
            text-decoration: none;
            min-width: 200px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #64ffda 0%, #48cead 100%);
            color: #0a192f;
        }

        .btn-secondary {
            background: transparent;
            border: 2px solid #64ffda;
            color: #64ffda;
        }

        .btn-primary:hover, .btn-secondary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(100, 255, 218, 0.2);
        }

        .btn-primary i, .btn-secondary i {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .btn-primary span, .btn-secondary span {
            font-weight: 600;
            font-size: 1.1rem;
        }

        .btn-primary small, .btn-secondary small {
            font-size: 0.8rem;
            opacity: 0.8;
        }

        /* Quick Access */
        .quick-access {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 3rem;
        }

        .quick-access-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #8892b0;
            cursor: pointer;
            transition: all 0.3s ease;
            padding: 1rem;
        }

        .quick-access-item:hover {
            color: #64ffda;
            transform: translateY(-2px);
        }

        .quick-access-item i {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .content-wrapper {
                padding: 2rem;
                margin: 1rem;
            }

            .stats-bar {
                flex-direction: column;
                gap: 1.5rem;
            }

            .main-title {
                font-size: 2rem;
            }

            .slogan {
                font-size: 1.6rem;
            }

            .description {
                font-size: 1.2rem;
            }

            .button-container {
                flex-direction: column;
                align-items: center;
            }

            .btn-primary, .btn-secondary {
                width: 100%;
                max-width: 280px;
            }

            .quick-access {
                flex-wrap: wrap;
                gap: 1rem;
            }
        }

        /* Animations */
        [data-aos] {
            opacity: 0;
            transition-property: transform, opacity;
            transition-duration: 0.8s;
        }

        [data-aos].aos-animate {
            opacity: 1;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
    </style>

    <!-- Particles.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    <script>
        particlesJS('particles-js', {
            particles: {
                number: { value: 80, density: { enable: true, value_area: 800 } },
                color: { value: '#64ffda' },
                shape: { type: 'circle' },
                opacity: { value: 0.5, random: false },
                size: { value: 3, random: true },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: '#64ffda',
                    opacity: 0.2,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 2,
                    direction: 'none',
                    random: false,
                    straight: false,
                    out_mode: 'out',
                    bounce: false
                }
            },
            interactivity: {
                detect_on: 'canvas',
                events: {
                    onhover: { enable: true, mode: 'grab' },
                    onclick: { enable: true, mode: 'push' },
                    resize: true
                },
                modes: {
                    grab: { distance: 140, line_linked: { opacity: 1 } },
                    push: { particles_nb: 4 }
                }
            },
            retina_detect: true
        });
    </script>
</section>

<!-- Minimal Section Divider -->
<div class="minimal-divider">
    <div class="divider-line"></div>
</div>

<style>
.minimal-divider {
    width: 100%;
    padding: 2rem 0;
    background: linear-gradient(to bottom, #0a192f, #0B1120);
}

.divider-line {
    max-width: 200px;
    height: 4px;
    margin: 0 auto;
    background: linear-gradient(90deg, 
        transparent,
        #4FFFB0 50%,
        transparent 100%
    );
    opacity: 0.3;
    animation: glow 3s infinite;
}

@keyframes glow {
    0%, 100% {
        opacity: 0.3;
    }
    50% {
        opacity: 0.5;
    }
}

@media (max-width: 768px) {
    .minimal-divider {
        padding: 1.5rem 0;
    }
    
    .divider-line {
        max-width: 150px;
        height: 3px;
    }
}
</style>

<main id="main">

    <!-- Gallery Section -->
<section id="gallery" class="gallery-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle">Galeri Kami</span>
            <h2 class="section-title">Gallery SIGAPTELNET</h2>
            <div class="section-description">Dokumentasi Kegiatan dan Fasilitas</div>
            <div class="header-divider">
                <span></span>
                <i class="fas fa-images"></i>
                <span></span>
            </div>
        </div>

        <!-- Gallery Grid -->
        <div class="gallery-grid">
            <!-- Gallery Item -->
            <div class="gallery-item" data-aos="fade-up" data-aos-delay="100">
                <div class="gallery-card">
                    <img src="assets/img/tik1.png" alt="Gallery Image 1">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>POLDA</h3>
                            <p>Kepolisian Daerah DI Yogyakarta</p>
                            <button class="gallery-zoom">
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Repeat untuk gambar lainnya -->
            <!-- ... -->
            <div class="gallery-item" data-aos="fade-up" data-aos-delay="100">
                <div class="gallery-card">
                    <img src="assets/img/tik2.jpeg" alt="Gallery Image 1">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>POLDA</h3>
                            <p>Kepolisian Daerah DI Yogyakarta</p>
                            <button class="gallery-zoom">
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gallery-item" data-aos="fade-up" data-aos-delay="100">
                <div class="gallery-card">
                    <img src="assets/img/apel_polda.jpg" alt="Gallery Image 1">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>POLDA</h3>
                            <p>Kepolisian Daerah DI Yogyakarta</p>
                            <button class="gallery-zoom">
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gallery-item" data-aos="fade-up" data-aos-delay="100">
                <div class="gallery-card">
                    <img src="assets/img/tik_polda.jpeg" alt="Gallery Image 1">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>POLDA</h3>
                            <p>Kepolisian Daerah DI Yogyakarta</p>
                            <button class="gallery-zoom">
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gallery-item" data-aos="fade-up" data-aos-delay="100">
                <div class="gallery-card">
                    <img src="assets/img/upc_polda.jpg" alt="Gallery Image 1">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>POLDA</h3>
                            <p>Kepolisian Daerah DI Yogyakarta</p>
                            <button class="gallery-zoom">
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gallery-item" data-aos="fade-up" data-aos-delay="100">
                <div class="gallery-card">
                    <img src="assets/img/tik3.jpeg" alt="Gallery Image 1">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>POLDA</h3>
                            <p>Kepolisian Daerah DI Yogyakarta</p>
                            <button class="gallery-zoom">
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <style>
        .gallery-section {
            padding: 100px 0;
            background-color: #0B1120;
            color: #94A3B8;
            position: relative;
        }

        /* Gallery Grid */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            padding: 2rem 0;
        }

        /* Gallery Card */
        .gallery-card {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            aspect-ratio: 16/9;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .gallery-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-card:hover img {
            transform: scale(1.1);
        }

        /* Overlay Effect */
        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(10, 25, 47, 0.85);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .gallery-card:hover .gallery-overlay {
            opacity: 1;
        }

        /* Gallery Info */
        .gallery-info {
            text-align: center;
            color: #ffffff;
            padding: 1.5rem;
            transform: translateY(20px);
            transition: all 0.3s ease;
        }

        .gallery-card:hover .gallery-info {
            transform: translateY(0);
        }

        .gallery-info h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #4FFFB0;
        }

        .gallery-info p {
            font-size: 1rem;
            color: #94A3B8;
            margin-bottom: 1rem;
        }

        /* Zoom Button */
        .gallery-zoom {
            background: rgba(79, 255, 176, 0.1);
            border: 1px solid rgba(79, 255, 176, 0.2);
            color: #4FFFB0;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .gallery-zoom:hover {
            background: rgba(79, 255, 176, 0.2);
            transform: scale(1.1);
        }

        /* Lightbox */
        .gallery-lightbox {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(10, 25, 47, 0.95);
            z-index: 1000;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .lightbox-content {
            max-width: 90%;
            max-height: 90vh;
            position: relative;
        }

        .lightbox-content img {
            max-width: 100%;
            max-height: 90vh;
            object-fit: contain;
        }

        .lightbox-close {
            position: absolute;
            top: -40px;
            right: -40px;
            width: 40px;
            height: 40px;
            background: rgba(79, 255, 176, 0.1);
            border: none;
            border-radius: 50%;
            color: #4FFFB0;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .lightbox-close:hover {
            background: rgba(79, 255, 176, 0.2);
            transform: scale(1.1);
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .gallery-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .gallery-info h3 {
                font-size: 1.25rem;
            }

            .gallery-info p {
                font-size: 0.9rem;
            }
        }
    </style>

    <!-- Lightbox -->
    <div class="gallery-lightbox" id="galleryLightbox">
        <div class="lightbox-content">
            <img src="" alt="Lightbox Image" id="lightboxImage">
            <button class="lightbox-close">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>

    <script>
        // Lightbox functionality
        const galleryItems = document.querySelectorAll('.gallery-card');
        const lightbox = document.getElementById('galleryLightbox');
        const lightboxImg = document.getElementById('lightboxImage');
        const lightboxClose = document.querySelector('.lightbox-close');

        galleryItems.forEach(item => {
            item.querySelector('.gallery-zoom').addEventListener('click', () => {
                const imgSrc = item.querySelector('img').src;
                lightboxImg.src = imgSrc;
                lightbox.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            });
        });

        lightboxClose.addEventListener('click', () => {
            lightbox.style.display = 'none';
            document.body.style.overflow = 'auto';
        });

        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                lightbox.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });
    </script>
</section>

    <section id="about" class="about-section">
        <div class="container">
            <!-- Section Header -->
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Tentang Platform</span>
                <h2 class="section-title">SIGAPTELNET</h2>
                <div class="section-description">Platform, Tujuan, dan Komitmen</div>
                <div class="header-divider">
                    <span></span>
                    <i class="fas fa-signal"></i>
                    <span></span>
                </div>
            </div>
    
            <!-- Content Grid -->
            <div class="content-grid">
                <!-- Platform Card -->
                <div class="info-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-icon">
                        <i class="fas fa-desktop"></i>
                    </div>
                    <h3>Platform</h3>
                    <p class="justified-text">
                        Platform digital yang dirancang untuk memfasilitasi jajaran POLDA dalam menyampaikan keluhan terkait gangguan layanan internet dan telepon. Sistem ini mempermudah proses pelaporan, pemantauan, dan penyelesaian gangguan melalui alur yang terintegrasi antara pengguna, penyedia layanan, dan pihak terkait lainnya.
                    </p>
                </div>
    
                <!-- Tujuan Card -->
                <div class="info-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Tujuan</h3>
                    <ul class="feature-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span class="justified-text">Memfasilitasi pengguna untuk melaporkan gangguan layanan internet dan telepon dengan cepat dan efisien melalui platform online yang mudah diakses.</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span class="justified-text">Meningkatkan efisiensi penyedia layanan dalam menangani keluhan, dengan sistem yang secara otomatis mengarahkan laporan kepada tim terkait dan memantau perkembangan penanganan.</span>
                        </li>
                    </ul>
                </div>
    
                <!-- Komitmen Card -->
                <div class="info-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Komitmen</h3>
                    <p class="justified-text">
                        Memberikan pelayanan terbaik dan transparan dalam menangani setiap keluhan jajaran POLDA. Kami percaya bahwa kepercayaan pengguna terhadap layanan internet dan telepon sangat penting, dan SIGAPTELNET hadir untuk memastikan bahwa setiap gangguan dapat segera teratasi dengan cepat dan tepat.
                    </p>
                    <a href="#services" class="cta-button">
                        <span>Mekanisme Pengaduan</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    
        <style>
            .about-section {
                padding: 100px 0;
                background-color: #0B1120;
                color: #94A3B8;
            }
    
            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 20px;
            }
    
            /* Section Header Styles */
            .section-header {
                text-align: center;
                margin-bottom: 60px;
            }
    
            .section-subtitle {
                color: #4FFFB0;
                font-size: 1rem;
                font-weight: 500;
                text-transform: uppercase;
                letter-spacing: 2px;
                display: block;
                margin-bottom: 10px;
            }
    
            .section-title {
                color: #ffffff;
                font-size: 2.5rem;
                font-weight: 700;
                margin: 10px 0;
            }
    
            .section-description {
                color: #94A3B8;
                font-size: 1.1rem;
                margin: 15px 0;
            }
    
            .header-divider {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 15px;
                margin: 20px 0;
            }
    
            .header-divider span {
                width: 50px;
                height: 2px;
                background: linear-gradient(90deg, transparent, #4FFFB0, transparent);
            }
    
            .header-divider i {
                color: #4FFFB0;
                font-size: 1.2rem;
            }
    
            /* Content Grid Styles */
            .content-grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 30px;
            }
    
            /* Card Styles */
            .info-card {
                background: rgba(255, 255, 255, 0.02);
                border: 1px solid rgba(255, 255, 255, 0.05);
                border-radius: 15px;
                padding: 30px;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
    
            .info-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            }
    
            .card-icon {
                width: 60px;
                height: 60px;
                background: rgba(79, 255, 176, 0.1);
                border-radius: 12px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 20px;
            }
    
            .card-icon i {
                font-size: 24px;
                color: #4FFFB0;
            }
    
            .info-card h3 {
                color: #ffffff;
                font-size: 1.5rem;
                margin-bottom: 20px;
                font-weight: 600;
            }
    
            /* Justified Text Style */
            .justified-text {
                text-align: justify;
                text-justify: inter-word;
                line-height: 1.7;
                margin-bottom: 20px;
                hyphens: auto;
            }
    
            /* Feature List Styles */
            .feature-list {
                list-style: none;
                padding: 0;
                margin: 0;
            }
    
            .feature-list li {
                display: flex;
                align-items: flex-start;
                gap: 15px;
                margin-bottom: 20px;
            }
    
            .feature-list i {
                color: #4FFFB0;
                margin-top: 5px;
                flex-shrink: 0;
            }
    
            .feature-list span {
                flex: 1;
            }
    
            /* CTA Button Styles */
            .cta-button {
                display: inline-flex;
                align-items: center;
                gap: 10px;
                background: linear-gradient(45deg, #4FFFB0, #45e69e);
                color: #0B1120;
                padding: 12px 25px;
                border-radius: 8px;
                text-decoration: none;
                font-weight: 500;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                margin-top: 20px;
            }
    
            .cta-button:hover {
                transform: translateY(-2px);
                box-shadow: 0 5px 15px rgba(79, 255, 176, 0.3);
            }
    
            .cta-button i {
                transition: transform 0.3s ease;
            }
    
            .cta-button:hover i {
                transform: translateX(5px);
            }
    
            /* Responsive Design */
            @media (max-width: 1024px) {
                .content-grid {
                    grid-template-columns: repeat(2, 1fr);
                }
            }
    
            @media (max-width: 768px) {
                .content-grid {
                    grid-template-columns: 1fr;
                }
    
                .section-title {
                    font-size: 2rem;
                }
    
                .info-card {
                    padding: 25px;
                }
    
                .justified-text {
                    text-align: left; /* Pada mobile, justify text bisa mengurangi readability */
                }
            }
        </style>
    </section>

    {{--  --}}
      <style>
      .about p {
          text-align: justify; /* Mengatur teks agar rata kiri-kanan */
      }
      .about ul {
          text-align: justify; /* Mengatur teks dalam list agar rata kiri-kanan juga */
      }
      </style>
  
    {{--  --}}
    <section id="statistics" class="statistics-section">
        <div class="container">
            <!-- Section Header -->
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Statistik Platform</span>
                <h2 class="section-title">Statistik SIGAPTELNET</h2>
                <div class="section-description">Data Pengunjung, Pengaduan, dan Laporan yang Ditangani</div>
                <div class="header-divider">
                    <span></span>
                    <i class="fas fa-chart-line"></i>
                    <span></span>
                </div>
            </div>
    
            <!-- Statistics Cards -->
            <div class="statistics-grid">
                <!-- Visitors Card -->
                <div class="stat-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-content">
                        <div class="icon-wrapper">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-info">
                            <span class="counter" data-purecounter-start="0" data-purecounter-end="{{ $visitorCount }}" data-purecounter-duration="1">{{ $visitorCount }}</span>
                            <h3>Pengunjung</h3>
                            <p>Total Pengunjung Platform SIGAPTELNET</p>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <div class="progress" style="width: 85%"></div>
                    </div>
                </div>
    
                <!-- Complaints Card -->
                <div class="stat-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-content">
                        <div class="icon-wrapper warning">
                            <i class="fas fa-ticket-alt"></i>
                        </div>
                        <div class="stat-info">
                            <span class="counter" data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="1">200</span>
                            <h3>Pengaduan</h3>
                            <p>Jumlah Pengaduan yang Diterima</p>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <div class="progress warning" style="width: 65%"></div>
                    </div>
                </div>
    
                <!-- Resolved Card -->
                <div class="stat-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-content">
                        <div class="icon-wrapper success">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="stat-info">
                            <span class="counter" data-purecounter-start="0" data-purecounter-end="180" data-purecounter-duration="1">180</span>
                            <h3>Selesai</h3>
                            <p>Pengaduan yang Ditangani</p>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <div class="progress success" style="width: 90%"></div>
                    </div>
                </div>
            </div>
        </div>
    
        <style>
            .statistics-section {
                padding: 100px 0;
                background-color: #0B1120;
                color: #94A3B8;
            }
    
            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 20px;
            }
    
            /* Section Header Styles */
            .section-header {
                text-align: center;
                margin-bottom: 60px;
            }
    
            .section-subtitle {
                color: #4FFFB0;
                font-size: 1rem;
                font-weight: 500;
                text-transform: uppercase;
                letter-spacing: 2px;
                display: block;
                margin-bottom: 10px;
            }
    
            .section-title {
                color: #ffffff;
                font-size: 2.5rem;
                font-weight: 700;
                margin: 10px 0;
            }
    
            .section-description {
                color: #94A3B8;
                font-size: 1.1rem;
                margin: 15px 0;
            }
    
            .header-divider {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 15px;
                margin: 20px 0;
            }
    
            .header-divider span {
                width: 50px;
                height: 2px;
                background: linear-gradient(90deg, transparent, #4FFFB0, transparent);
            }
    
            .header-divider i {
                color: #4FFFB0;
                font-size: 1.2rem;
            }
    
            /* Statistics Grid */
            .statistics-grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 30px;
            }
    
            /* Stat Card Styles */
            .stat-card {
                background: rgba(255, 255, 255, 0.02);
                border: 1px solid rgba(255, 255, 255, 0.05);
                border-radius: 15px;
                padding: 30px;
                transition: all 0.3s ease;
                position: relative;
                overflow: hidden;
            }
    
            .stat-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            }
    
            .card-content {
                position: relative;
                z-index: 2;
            }
    
            .icon-wrapper {
                width: 60px;
                height: 60px;
                background: rgba(79, 255, 176, 0.1);
                border-radius: 12px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 20px;
            }
    
            .icon-wrapper i {
                font-size: 24px;
                color: #4FFFB0;
            }
    
            .icon-wrapper.warning {
                background: rgba(255, 170, 0, 0.1);
            }
    
            .icon-wrapper.warning i {
                color: #FFAA00;
            }
    
            .icon-wrapper.success {
                background: rgba(34, 197, 94, 0.1);
            }
    
            .icon-wrapper.success i {
                color: #22C55E;
            }
    
            .stat-info {
                margin-top: 20px;
            }
    
            .counter {
                font-size: 2.5rem;
                font-weight: 700;
                color: #ffffff;
                display: block;
                margin-bottom: 5px;
            }
    
            .stat-info h3 {
                color: #ffffff;
                font-size: 1.2rem;
                margin: 10px 0;
                font-weight: 600;
            }
    
            .stat-info p {
                color: #94A3B8;
                font-size: 0.9rem;
                margin: 0;
            }
    
            /* Progress Bar Styles */
            .progress-bar {
                width: 100%;
                height: 4px;
                background: rgba(255, 255, 255, 0.1);
                border-radius: 2px;
                margin-top: 20px;
                overflow: hidden;
            }
    
            .progress {
                height: 100%;
                background: #4FFFB0;
                border-radius: 2px;
                transition: width 1.5s ease-in-out;
            }
    
            .progress.warning {
                background: #FFAA00;
            }
    
            .progress.success {
                background: #22C55E;
            }
    
            /* Responsive Design */
            @media (max-width: 1024px) {
                .statistics-grid {
                    grid-template-columns: repeat(2, 1fr);
                }
            }
    
            @media (max-width: 768px) {
                .statistics-grid {
                    grid-template-columns: 1fr;
                }
    
                .section-title {
                    font-size: 2rem;
                }
    
                .counter {
                    font-size: 2rem;
                }
            }
    
            /* Animation for counter */
            @keyframes countUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
    
            .counter {
                animation: countUp 1s ease-out forwards;
            }
        </style>
    
        <!-- Include PureCounter Library -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/purecounter/1.5.0/purecounter_vanilla.js"></script>
        <script>
            new PureCounter();
        </script>
    </section>


    {{--  --}}
    
    <section id="services" class="services-section">
        <div class="container">
            <!-- Section Header -->
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Mekanisme Pengaduan</span>
                <h2 class="section-title">Alur Proses SIGAPTELNET</h2>
                <div class="section-description">Alur Proses Penanganan Pengaduan Layanan</div>
                <div class="header-divider">
                    <span></span>
                    <i class="fas fa-cogs"></i>
                    <span></span>
                </div>
            </div>
    
            <!-- Service Steps -->
            <div class="services-grid">
                <!-- Step 1 -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-number"></div>
                    <div class="icon-wrapper">
                        <i class="fas fa-edit"></i>
                    </div>
                    <h3>Pengajuan Laporan</h3>
                    <p class="justified-text">
                        Sampaikan pengaduan Anda dengan mengisi formulir yang tersedia secara lengkap dan terperinci. Sertakan informasi penting seperti deskripsi masalah, waktu kejadian, dan lokasi.
                    </p>
                    <div class="step-indicator">
                        <div class="line active"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
    
                <!-- Step 2 -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-number"></div>
                    <div class="icon-wrapper">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h3>Verifikasi Laporan</h3>
                    <p class="justified-text">
                        Tim admin kami akan memverifikasi kelengkapan dan keabsahan laporan Anda. Proses ini memastikan setiap pengaduan mendapat penanganan yang tepat sesuai dengan kategori yang telah dilaporkan.
                    </p>
                    <div class="step-indicator">
                        <div class="line active"></div>
                        <div class="line active"></div>
                        <div class="line"></div>
                    </div>
                </div>
    
                <!-- Step 3 -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-number"></div>
                    <div class="icon-wrapper">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Tindak Lanjut</h3>
                    <p class="justified-text">
                        Pengaduan yang telah diverifikasi akan ditindaklanjuti oleh tim teknis kami. Anda akan mendapatkan notifikasi pembaruan status secara berkala mengenai progress penanganan laporan Anda.
                    </p>
                    <div class="step-indicator">
                        <div class="line active"></div>
                        <div class="line active"></div>
                        <div class="line active"></div>
                    </div>
                </div>
    
                <!-- Step 4 -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-number"></div>
                    <div class="icon-wrapper">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3>Penyelesaian</h3>
                    <p class="justified-text">
                        Setelah pengaduan selesai ditangani, Anda akan menerima konfirmasi penyelesaian. Tim kami akan memastikan layanan kembali optimal dan meminta feedback Anda untuk evaluasi layanan kami.
                    </p>
                    <div class="step-indicator">
                        <div class="line active"></div>
                        <div class="line active"></div>
                        <div class="line active"></div>
                    </div>
                </div>
            </div>
        </div>
    
        <style>
            .services-section {
                padding: 100px 0;
                background-color: #0B1120;
                color: #94A3B8;
            }
    
            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 20px;
            }
    
            /* Section Header Styles */
            .section-header {
                text-align: center;
                margin-bottom: 60px;
            }
    
            .section-subtitle {
                color: #4FFFB0;
                font-size: 1rem;
                font-weight: 500;
                text-transform: uppercase;
                letter-spacing: 2px;
                display: block;
                margin-bottom: 10px;
            }
    
            .section-title {
                color: #ffffff;
                font-size: 2.5rem;
                font-weight: 700;
                margin: 10px 0;
            }
    
            .section-description {
                color: #94A3B8;
                font-size: 1.1rem;
                margin: 15px 0;
            }
    
            .header-divider {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 15px;
                margin: 20px 0;
            }
    
            .header-divider span {
                width: 50px;
                height: 2px;
                background: linear-gradient(90deg, transparent, #4FFFB0, transparent);
            }
    
            .header-divider i {
                color: #4FFFB0;
                font-size: 1.2rem;
            }
    
            /* Services Grid */
            .services-grid {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 30px;
            }
    
            /* Service Card Styles */
            .service-card {
                background: rgba(255, 255, 255, 0.02);
                border: 1px solid rgba(255, 255, 255, 0.05);
                border-radius: 15px;
                padding: 30px;
                position: relative;
                transition: all 0.3s ease;
            }
    
            .service-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            }
    
            .card-number {
                position: absolute;
                top: -15px;
                right: 20px;
                font-size: 4rem;
                font-weight: 700;
                color: rgba(79, 255, 176, 0.1);
                transition: all 0.3s ease;
            }
    
            .service-card:hover .card-number {
                color: rgba(79, 255, 176, 0.2);
            }
    
            .icon-wrapper {
                width: 60px;
                height: 60px;
                background: rgba(79, 255, 176, 0.1);
                border-radius: 12px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 20px;
            }
    
            .icon-wrapper i {
                font-size: 24px;
                color: #4FFFB0;
            }
    
            .service-card h3 {
                color: #ffffff;
                font-size: 1.3rem;
                margin: 15px 0;
                font-weight: 600;
            }
    
            .justified-text {
                text-align: justify;
                color: #94A3B8;
                line-height: 1.7;
                margin-bottom: 20px;
            }
    
            /* Step Indicator */
            .step-indicator {
                display: flex;
                gap: 5px;
                margin-top: 20px;
            }
    
            .line {
                height: 3px;
                flex: 1;
                background: rgba(255, 255, 255, 0.1);
                border-radius: 2px;
            }
    
            .line.active {
                background: #4FFFB0;
            }
    
            /* Responsive Design */
            @media (max-width: 1200px) {
                .services-grid {
                    grid-template-columns: repeat(2, 1fr);
                }
            }
    
            @media (max-width: 768px) {
                .services-grid {
                    grid-template-columns: 1fr;
                }
    
                .section-title {
                    font-size: 2rem;
                }
    
                .service-card {
                    padding: 25px;
                }
    
                .card-number {
                    font-size: 3rem;
                }
            }
        </style>
    </section>

    @include('includes.landing.footer')


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  

  @include('includes.landing.javascript')


</body>

</html>
