<footer class="footer-section">
  <div class="container">
      <!-- Footer Top -->
      <div class="footer-content">
          <!-- Contact Section -->
          <div class="footer-col">
              <h3>Kontak Kami</h3>
              <div class="contact-info">
                  <div class="info-item">
                      <i class="fas fa-map-marker-alt"></i>
                      <p>Jalan Padjadjaran (Ringroad Utara) Condongcatur Depok Sleman Yogyakarta City, Indonesia Special Region of Yogyakarta</p>
                  </div>
                  <div class="info-item">
                      <i class="fas fa-phone-alt"></i>
                      <p>(0274) 884444</p>
                  </div>
                  <div class="info-item">
                      <i class="fas fa-envelope"></i>
                      <p>example@gmail.com</p>
                  </div>
              </div>
          </div>

          <!-- Menu Section -->
          <div class="footer-col">
              <h3>Menu</h3>
              <ul class="footer-links">
                  <li>
                      <a href="#">
                          <i class="fas fa-chevron-right"></i>
                          <span>Home</span>
                      </a>
                  </li>
                  <li>
                      <a href="#about">
                          <i class="fas fa-chevron-right"></i>
                          <span>About Me</span>
                      </a>
                  </li>
                  <li>
                      <a href="#services">
                          <i class="fas fa-chevron-right"></i>
                          <span>Mekanisme Pengaduan</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ url('login')}}">
                          <i class="fas fa-chevron-right"></i>
                          <span>Login</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ url('register')}}">
                          <i class="fas fa-chevron-right"></i>
                          <span>Register</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ url('team')}}">
                          <i class="fas fa-chevron-right"></i>
                          <span>Tim Pengembang</span>
                      </a>
                  </li>
              </ul>
          </div>

          <!-- Social Media Section -->
          <div class="footer-col">
              <h3>Sosial Media</h3>
              <p class="social-text">Temukan kami di Sosial Media:</p>
              <div class="social-links">
                  <a href="https://m.facebook.com/poldajogja/" target="_blank" class="social-link">
                      <i class="fab fa-facebook-f"></i>
                  </a>
                  <a href="https://www.instagram.com/poldajogja" target="_blank" class="social-link">
                      <i class="fab fa-instagram"></i>
                  </a>
                  <a href="https://x.com/PoldaJogja" target="_blank" class="social-link">
                      <i class="fab fa-twitter"></i>
                  </a>
                  <a href="https://youtube.com/@poldajogja" target="_blank" class="social-link">
                      <i class="fab fa-youtube"></i>
                  </a>
                  <a href="https://www.tiktok.com/@poldajogja" target="_blank" class="social-link">
                      <i class="fab fa-tiktok"></i>
                  </a>
              </div>
          </div>
      </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom">
          <div class="copyright">
              &copy; Copyright 2024 <strong>Kepolisian Daerah DI Yogyakarta</strong>
          </div>
      </div>
  </div>

  <style>
      .footer-section {
          background-color: #0a1323;
          color: #94A3B8;
          padding: 80px 0 0;
          position: relative;
      }

      .container {
          max-width: 1200px;
          margin: 0 auto;
          padding: 0 20px;
      }

      /* Footer Content */
      .footer-content {
          display: grid;
          grid-template-columns: 1.5fr 1fr 1fr;
          gap: 40px;
          padding-bottom: 60px;
      }

      /* Footer Column Styles */
      .footer-col h3 {
          color: #ffffff;
          font-size: 1.2rem;
          font-weight: 600;
          margin-bottom: 25px;
          position: relative;
          padding-bottom: 10px;
      }

      .footer-col h3::after {
          content: '';
          position: absolute;
          left: 0;
          bottom: 0;
          width: 30px;
          height: 2px;
          
      }

      /* Contact Info Styles */
      .contact-info .info-item {
          display: flex;
          align-items: flex-start;
          margin-bottom: 20px;
      }

      .contact-info .info-item i {
          color: #4FFFB0;
          font-size: 1.1rem;
          margin-right: 15px;
          margin-top: 5px;
      }

      .contact-info .info-item p {
          line-height: 1.6;
      }

      /* Footer Links Styles */
      .footer-links {
          list-style: none;
          padding: 0;
      }

      .footer-links li {
          margin-bottom: 12px;
      }

      .footer-links a {
          color: #94A3B8;
          text-decoration: none;
          display: flex;
          align-items: center;
          transition: all 0.3s ease;
      }

      .footer-links a i {
          font-size: 0.8rem;
          margin-right: 10px;
          color: #4FFFB0;
          transition: transform 0.3s ease;
      }

      .footer-links a:hover {
          color: #4FFFB0;
          transform: translateX(5px);
      }

      .footer-links a:hover i {
          transform: translateX(3px);
      }

      /* Social Media Styles */
      .social-text {
          margin-bottom: 20px;
      }

      .social-links {
          display: flex;
          gap: 15px;
      }

      .social-link {
          width: 40px;
          height: 40px;
          border-radius: 50%;
          background: rgba(79, 255, 176, 0.1);
          display: flex;
          align-items: center;
          justify-content: center;
          color: #4FFFB0;
          text-decoration: none;
          transition: all 0.3s ease;
      }

      .social-link:hover {
          background: #4FFFB0;
          color: #0a1323;
          transform: translateY(-3px);
      }

      .social-link i {
          font-size: 1.2rem;
      }

      /* Footer Bottom */
      .footer-bottom {
          padding: 20px 0;
          text-align: center;
          margin-top: 40px;
      }

      .copyright {
          font-size: 0.9rem;
      }

      .copyright strong {
          color: #ffffff;
          font-weight: 600;
      }

      /* Responsive Design */
      @media (max-width: 1024px) {
          .footer-content {
              grid-template-columns: 1fr 1fr;
              gap: 30px;
          }
      }

      @media (max-width: 768px) {
          .footer-content {
              grid-template-columns: 1fr;
              gap: 40px;
          }

          .footer-col {
              text-align: center;
          }

          .footer-col h3::after {
              left: 50%;
              transform: translateX(-50%);
          }

          .contact-info .info-item {
              flex-direction: column;
              align-items: center;
              text-align: center;
          }

          .contact-info .info-item i {
              margin-bottom: 10px;
          }

          .footer-links a {
              justify-content: center;
          }

          .social-links {
              justify-content: center;
          }
      }
  </style>
</footer>