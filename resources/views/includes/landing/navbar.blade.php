<header id="header" class="fixed-top">
  <div class="container">
      <nav class="navbar-wrapper">
          <!-- Left side - Logo & Brand -->
          <div class="logo-section">
              <a href="#" class="logo-link">
                  <img src="assets/img/logo_polda.png" alt="Logo" class="logo-img">
                  <div class="logo-text">
                      <span class="brand-name">SIGAPTELNET</span>
                      <span class="sub-brand">BID TIK POLDA DIY</span>
                  </div>
              </a>
          </div>

          <!-- Right side - Navigation -->
          <nav id="navbar" class="navbar">
              <ul class="nav-menu">
                  <li><a href="#hero" class="nav-link">Home</a></li>
                  <li><a href="#about" class="nav-link">About Me</a></li>
                  <li><a href="{{ url('login')}}" class="nav-link btn-login">Login</a></li>
                  <li><a href="{{ url('register')}}" class="nav-link btn-register">Register</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
      </nav>
  </div>

  <style>
      #header {
          background-color: #0B1120;
          padding: 1rem 0;
          position: fixed;
          width: 100%;
          top: 0;
          z-index: 1000;
      }

      .container {
          max-width: 1200px;
          margin: 0 auto;
          padding: 0 1rem;
      }

      .navbar-wrapper {
          display: flex;
          justify-content: space-between;
          align-items: center;
      }

      /* Logo Section */
      .logo-section {
          display: flex;
          align-items: center;
      }

      .logo-link {
          display: flex;
          align-items: center;
          text-decoration: none;
          gap: 10px;
      }

      .logo-img {
          height: 40px;
          width: auto;
      }

      .logo-text {
          display: flex;
          flex-direction: column;
      }

      .brand-name {
          color: #fff;
          font-size: 1.1rem;
          font-weight: 600;
      }

      .sub-brand {
          color: #94A3B8;
          font-size: 0.8rem;
      }

      /* Navigation Menu */
      .nav-menu {
          display: flex;
          align-items: center;
          gap: 2rem;
          margin: 0;
          padding: 0;
          list-style: none;
      }

      .nav-link {
          color: #94A3B8;
          text-decoration: none;
          font-size: 0.95rem;
          font-weight: 500;
          transition: color 0.3s ease;
          padding: 0.5rem 0;
      }

      .nav-link:hover,
      .nav-link.active {
          color: #4FFFB0;
      }

      .nav-link.active {
          border-bottom: 2px solid #4FFFB0;
      }

      /* Auth Buttons */
      .btn-login {
          color: #4FFFB0 !important;
          padding: 0.5rem 1.5rem !important;
          border: 1px solid #4FFFB0;
          border-radius: 4px;
      }

      .btn-login:hover {
          background-color: rgba(79, 255, 176, 0.1);
      }

      .btn-register {
          color: #0B1120 !important;
          background-color: #4FFFB0;
          padding: 0.5rem 1.5rem !important;
          border-radius: 4px;
          border: 1px solid #4FFFB0;
      }

      .btn-register:hover {
          background-color: #45e69e;
      }

      /* Responsive Design */
      @media (max-width: 768px) {
          .nav-menu {
              gap: 1rem;
          }

          .logo-img {
              height: 35px;
          }

          .brand-name {
              font-size: 1rem;
          }

          .sub-brand {
              font-size: 0.7rem;
          }
      }

      @media (max-width: 640px) {
          .nav-menu {
              display: none;
          }

          /* Add mobile menu button here if needed */
      }
  </style>

  
</header>