<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="SIGAPNET - Sistem Informasi Pengaduan Layanan Internet & Telepon">
    <title>@yield('title') - SIGAPNET</title>

    <!-- Preload Critical Resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    @include('includes.masyarakat.style')
    
    <style>
        /* Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: #1e293b;
        }

        .app-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex: 1;
            width: 100%;
            margin-top: 70px;
            padding-bottom: 60px;
        }

        .container {
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        /* Dark Mode */
        .theme-dark {
            background: #0f172a;
            color: #e2e8f0;
        }

        /* Basic Responsive */
        @media (max-width: 768px) {
            .main-content {
                margin-top: 60px;
            }
            
            .container {
                padding: 0 1rem;
            }
        }

        /* Print Styles */
        @media print {
            .no-print {
                display: none !important;
            }

            .main-content {
                margin: 0;
                padding: 0;
            }
        }
    </style>
</head>

<body>
    <div class="app-container" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Navbar -->
        <div class="no-print">
            @include('includes.masyarakat.navbar')
        </div>

        <!-- Main Content -->
        <main class="main-content">
            <div class="container">
                @yield('content')
            </div>
        </main>

        <!-- Footer -->
        <div class="no-print">
            @include('includes.masyarakat.footer')
        </div>
    </div>

    <!-- Scripts -->
    @include('sweetalert::alert')
    @include('includes.masyarakat.script')

    <script>
        // Dark Mode Toggle if needed
        function toggleDarkMode() {
            document.documentElement.classList.toggle('theme-dark');
        }
    </script>
</body>
</html>