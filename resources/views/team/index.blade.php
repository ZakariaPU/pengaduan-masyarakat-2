<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim Pengembang - SIGAPNET</title>
    
    <!-- CSS Libraries -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    
    <style>
        /* Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #0B1120;
            color: #94A3B8;
            min-height: 100vh;
        }

        /* Navigation Button */
        .nav-button {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 1000;
            display: flex;
            align-items: center;
            gap: 8px;
            background: rgba(100, 255, 218, 0.1);
            border: 1px solid rgba(100, 255, 218, 0.2);
            color: #64ffda;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .nav-button:hover {
            background: rgba(100, 255, 218, 0.2);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(100, 255, 218, 0.15);
        }

        .nav-button i {
            font-size: 1.1rem;
        }

        /* Header Section */
        .header-section {
            background: linear-gradient(135deg, #0a192f 0%, #112240 100%);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .header-content {
            position: relative;
            z-index: 2;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            text-align: center;
        }

        .header-title {
            color: #ffffff;
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .header-subtitle {
            color: #94A3B8;
            font-size: 1.4rem;
            margin-bottom: 2rem;
        }

        .organization-badge {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 50px;
            padding: 0.8rem 1.5rem;
            display: inline-flex;
            align-items: center;
            margin: 0 auto;
            max-width: 600px;
        }

        .organization-badge img {
            height: 35px;
            min-width: 35px;
            margin-right: 1rem;
        }

        .organization-badge span {
            color: #ffffff;
            font-weight: 500;
            text-align: justify;
            hyphens: auto;
            width: 100%;
        }

        /* Search Section */
        .search-section {
            max-width: 800px;
            margin: -30px auto 60px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            display: flex;
            gap: 10px;
        }

        .search-input {
            flex: 1;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 12px 20px;
            color: #ffffff;
            font-size: 0.95rem;
        }

        .search-input::placeholder {
            color: #94A3B8;
        }

        .role-select {
            background: rgba(100, 255, 218, 0.05);
            border: 1px solid rgba(100, 255, 218, 0.2);
            border-radius: 8px;
            padding: 12px 20px;
            color: #64ffda;
            min-width: 180px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .role-select:hover {
            background: rgba(100, 255, 218, 0.1);
        }

        .role-select:focus {
            outline: none;
            border-color: #64ffda;
            box-shadow: 0 0 0 2px rgba(100, 255, 218, 0.1);
        }

        .role-select option {
            background: #0B1120;
            color: #64ffda;
            padding: 10px;
        }

        .search-button {
            background: linear-gradient(135deg, #64ffda 0%, #48cead 100%);
            color: #0a192f;
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .search-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(100, 255, 218, 0.2);
        }

        /* Team Grid */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .team-card {
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .member-image {
            position: relative;
            padding-top: 100%;
        }

        .member-image img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .member-info {
            padding: 1.2rem;
        }

        .member-name {
            color: #ffffff;
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .member-role {
            color: #64ffda;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .social-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #94A3B8;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            color: #64ffda;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .team-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 992px) {
            .team-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .nav-button {
                top: 10px;
                left: 10px;
                padding: 8px 16px;
                font-size: 0.9rem;
            }

            .header-title {
                font-size: 2rem;
            }

            .header-subtitle {
                font-size: 1.2rem;
            }

            .search-section {
                margin: -20px 20px 40px;
                flex-direction: column;
            }

            .role-select {
                width: 100%;
            }
        }

        @media (max-width: 576px) {
            .team-grid {
                grid-template-columns: 1fr;
            }

            .organization-badge {
                padding: 1rem;
                flex-direction: column;
                text-align: center;
            }

            .organization-badge img {
                margin: 0 0 0.8rem 0;
            }

            .organization-badge span {
                text-align: center;
            }
        }

        @media (max-width: 480px) {
            .nav-button {
                padding: 6px 12px;
                font-size: 0.85rem;
            }

            .header-title {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Button -->
    <a href="{{ url('/') }}" class="nav-button">
        <i class="fas fa-arrow-left"></i>
        <span>Kembali ke Home</span>
    </a>

    <!-- Header Section -->
    <section class="header-section">
        <div class="header-content">
            <h1 class="header-title" data-aos="fade-up">Tim Pengembang</h1>
            <p class="header-subtitle" data-aos="fade-up" data-aos-delay="100">
                Sistem Informasi Pengaduan Layanan Internet & Telepon
            </p>
            <div class="flex justify-center" data-aos="fade-up" data-aos-delay="200">
                <div class="organization-badge">
                    <img src="assets/img/logo_polri.png" alt="Logo Polri">
                    <span>Bidang TIK Kepolisian Daerah DI Yogyakarta</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Search Section -->
    <div class="search-section" data-aos="fade-up" data-aos-delay="300">
        <input type="text" id="searchInput" placeholder="Cari anggota tim..." class="search-input">
        <select id="roleFilter" class="role-select">
            <option value="">Semua Role</option>
            <option value="Project Manager">Project Manager</option>
            <option value="Web Developer">Web Developer</option>
            <option value="System Analyst">System Analyst</option>
            <option value="UI Designer">UI Designer</option>
        </select>
        <button id="searchButton" class="search-button">
            <i class="fas fa-search"></i>
        </button>
    </div>

    <!-- Team Grid -->
    <div id="teamGrid" class="team-grid">
        <!-- Team cards will be populated by JavaScript -->
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Team members data
        const teamMembers = [
            {
                name: "Zakaria Priyo Utomo",
                role: "Web Developer",
                image: "assets/img/zakaria_foto.png",
                linkedin: "https://www.linkedin.com/in/zakaria-priyo"
            },
            {
                name: "Nur Ifani Haerunisya",
                role: "Project Manager",
                image: "assets/img/ifani.png",
                linkedin: "https://www.linkedin.com/in/"
            },
            {
                name: "Zelika Awine Windarti",
                role: "System Analyst",
                image: "assets/img/zelika.png",
                linkedin: "https://www.linkedin.com/in/"
            },
            {
                name: "Ayu Sekar Sari",
                role: "UI Designer",
                image: "assets/img/ayu.png",
                linkedin: "https://www.linkedin.com/in/"
            }
        ];

        // Search functionality
        const searchInput = document.getElementById('searchInput');
        const roleFilter = document.getElementById('roleFilter');
        const searchButton = document.getElementById('searchButton');
        const teamGrid = document.getElementById('teamGrid');

        function displayTeamMembers(members) {
            teamGrid.innerHTML = '';
            members.forEach((member, index) => {
                const card = `
                    <div class="team-card" data-aos="fade-up" data-aos-delay="${index * 100}">
                        <div class="member-image">
                            <img src="${member.image}" alt="${member.name}">
                        </div>
                        <div class="member-info">
                            <h3 class="member-name">${member.name}</h3>
                            <p class="member-role">${member.role}</p>
                            <a href="${member.linkedin}" target="_blank" class="social-link">
                                <i class="fab fa-linkedin"></i>
                                <span>LinkedIn Profile</span>
                            </a>
                        </div>
                    </div>
                `;
                teamGrid.innerHTML += card;
            });
        }

        function searchTeamMembers() {
            const searchTerm = searchInput.value.toLowerCase();
            const selectedRole = roleFilter.value;
            
            const filteredMembers = teamMembers.filter(member =>
                member.name.toLowerCase().includes(searchTerm) &&
                (selectedRole === "" || member.role === selectedRole)
            );
            
            displayTeamMembers(filteredMembers);
        }

        // Event listeners
        searchButton.addEventListener('click', searchTeamMembers);
        roleFilter.addEventListener('change', searchTeamMembers);
        searchInput.addEventListener('keyup', (e) => {
            if (e.key === 'Enter') searchTeamMembers();
        });

        // Initialize
        document.addEventListener('DOMContentLoaded', () => {
            displayTeamMembers(teamMembers);
            AOS.init({
                duration: 800,
                once: true
            });
        });
    </script>
</body>
</html>