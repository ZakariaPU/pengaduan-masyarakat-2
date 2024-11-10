<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim Pengembang - Sistem Pengaduan Layanan</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #ece9e6, #ffffff); /* Background gradient */
            min-height: 100vh;
        }

        .team-card {
            transition: all 0.3s ease;
            overflow: hidden;
            border-radius: 10px;
        }

        .team-card:hover {
            transform: translateY(-10px);
        }

        .social-icon {
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            transform: scale(1.1);
        }

        .gradient-bg {
            background: linear-gradient(135deg, #6dd5ed, #2193b0); /* Gradient for header */
            color: white;
        }

        .card-shadow {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 
                        0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .hover-shadow:hover {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 
                        0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        /* Add subtle background textures to the card */
        .team-card::before {
            content: '';
            background: radial-gradient(circle, rgba(255, 255, 255, 0.15), rgba(0, 0, 0, 0.05));
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            opacity: 0.6;
        }

        .team-card img {
            z-index: 2;
            position: relative;
        }

        /* Add a shadow effect to images */
        img {
            transition: transform 0.3s ease-in-out;
        }

        img:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="gradient-bg py-16">
        <!-- Header Section -->
        <div class="text-center mb-16" data-aos="fade-down">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Tim Pengembang
            </h1>
            <div class="max-w-3xl mx-auto">
                <h2 class="text-2xl md:text-3xl mb-4">
                    Sistem Informasi Pengaduan Layanan Internet & Telepon
                </h2>
                <div class="space-y-2">
                    <p class="text-lg font-medium">Universitas Atma Jaya Yogyakarta</p>
                    <p class="text-md">Program Studi Sistem Informasi</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-16">
        <!-- Team Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Web Developer -->
            <div class="team-card bg-white relative" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-white rounded-xl overflow-hidden card-shadow hover-shadow">
                    <div class="relative">
                        <img src="{{ asset('assets/img/zakaria_foto.png') }}" 
                             alt="Web Developer" 
                             class="w-full aspect-square object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6 relative z-2">
                        <h3 class="text-xl font-semibold text-gray-800">Zakaria Priyo Utomo</h3>
                        <p class="text-blue-600 font-medium mb-4">Web Developer</p>
                        <div class="flex items-center gap-4">
                            <a href="https://linkedin.com/in/zakaria-priyo" 
                               target="_blank" 
                               class="social-icon inline-flex items-center gap-2 text-gray-600 hover:text-blue-600">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                                <span>LinkedIn Profile</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Manager -->
            <div class="team-card bg-white relative" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-white rounded-xl overflow-hidden card-shadow hover-shadow">
                    <div class="relative">
                        <img src="{{ asset('images/team/pm.jpg') }}" 
                             alt="Project Manager" 
                             class="w-full aspect-square object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6 relative z-2">
                        <h3 class="text-xl font-semibold text-gray-800">Nur Ifani Haerunisya</h3>
                        <p class="text-blue-600 font-medium mb-4">Project Manager</p>
                        <div class="flex items-center gap-4">
                            <a href="https://linkedin.com/in/nur-ifani" 
                               target="_blank" 
                               class="social-icon inline-flex items-center gap-2 text-gray-600 hover:text-blue-600">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                                <span>LinkedIn Profile</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- System Analyst -->
            <div class="team-card bg-white relative" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-white rounded-xl overflow-hidden card-shadow hover-shadow">
                    <div class="relative">
                        <img src="{{ asset('images/team/analyst.jpg') }}" 
                             alt="System Analyst" 
                             class="w-full aspect-square object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6 relative z-2">
                        <h3 class="text-xl font-semibold text-gray-800">Zelika Putri Ramadhani</h3>
                        <p class="text-blue-600 font-medium mb-4">System Analyst</p>
                        <div class="flex items-center gap-4">
                            <a href="https://linkedin.com/in/zelika-ramadhani" 
                               target="_blank" 
                               class="social-icon inline-flex items-center gap-2 text-gray-600 hover:text-blue-600">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                                <span>LinkedIn Profile</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- UI Designer -->
            <div class="team-card bg-white relative" data-aos="fade-up" data-aos-delay="400">
                <div class="bg-white rounded-xl overflow-hidden card-shadow hover-shadow">
                    <div class="relative">
                        <img src="{{ asset('images/team/ui_designer.jpg') }}" 
                             alt="UI Designer" 
                             class="w-full aspect-square object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6 relative z-2">
                        <h3 class="text-xl font-semibold text-gray-800">Ayuk Noviyanti</h3>
                        <p class="text-blue-600 font-medium mb-4">UI Designer</p>
                        <div class="flex items-center gap-4">
                            <a href="https://linkedin.com/in/ayuk-noviyanti" 
                               target="_blank" 
                               class="social-icon inline-flex items-center gap-2 text-gray-600 hover:text-blue-600">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                                <span>LinkedIn Profile</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        AOS.init();
    </script>
</body>
</html>
