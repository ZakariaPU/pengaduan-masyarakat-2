<!-- Desktop sidebar -->
<style>
  /* Sidebar Container */
  .sidebar {
      background: rgba(10, 25, 47, 0.95);
      backdrop-filter: blur(12px);
      border-right: 1px solid rgba(79, 255, 176, 0.1);
      min-height: 100vh;
  }

  /* Logo Section */
  .logo-container {
      padding: 1.5rem;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 1rem;
      border-bottom: 1px solid rgba(79, 255, 176, 0.1);
  }

  .logo-image {
      width: 3rem;
      height: auto;
      filter: drop-shadow(0 0 10px rgba(79, 255, 176, 0.3));
  }

  .logo-text {
      text-align: center;
  }

  .brand-name {
      color: #4FFFB0;
      font-size: 1.25rem;
      font-weight: 600;
      text-decoration: none;
      text-shadow: 0 0 20px rgba(79, 255, 176, 0.3);
      display: block;
      margin-bottom: 0.25rem;
  }

  .sub-brand {
      color: #94A3B8;
      font-size: 0.75rem;
      text-shadow: 0 0 10px rgba(79, 255, 176, 0.2);
  }

  /* Menu Items */
  .menu-section {
      padding: 1.5rem 0;
  }

  .menu-item {
      position: relative;
      padding: 0.75rem 1.5rem;
      margin: 0.25rem 0;
      transition: all 0.3s ease;
  }

  .menu-item:hover {
      background: rgba(79, 255, 176, 0.05);
  }

  .menu-link {
      display: flex;
      align-items: center;
      color: #94A3B8;
      font-size: 0.875rem;
      font-weight: 500;
      text-decoration: none;
      transition: all 0.3s ease;
  }

  .menu-link:hover {
      color: #4FFFB0;
  }

  .menu-icon {
      width: 1.25rem;
      height: 1.25rem;
      margin-right: 0.75rem;
      color: currentColor;
  }

  /* Active State */
  .menu-item.active {
      background: rgba(79, 255, 176, 0.05);
  }

  .menu-item.active::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      bottom: 0;
      width: 3px;
      background: #4FFFB0;
      border-radius: 0 4px 4px 0;
      box-shadow: 0 0 20px rgba(79, 255, 176, 0.4);
  }

  .menu-item.active .menu-link {
      color: #4FFFB0;
  }

  /* Mobile Styles */
  .mobile-backdrop {
      background: rgba(10, 25, 47, 0.8);
      backdrop-filter: blur(8px);
  }

  .mobile-sidebar {
      background: rgba(10, 25, 47, 0.95);
      backdrop-filter: blur(12px);
      border-right: 1px solid rgba(79, 255, 176, 0.1);
  }
</style>

<aside class="sidebar z-20 hidden w-64 overflow-y-auto md:block flex-shrink-0">
  <div class="py-4">
      <div class="logo-container">
          <img src="{{ asset('assets/img/logo_polri.png')}}" alt="SIGAPNET Logo" class="logo-image">
          <div class="logo-text">
              <a href="#" class="brand-name">SIGAPTELNET</a>
              <span class="sub-brand">BID TIK POLDA DIY</span>
          </div>
      </div>

      <div class="menu-section">
          <!-- Dashboard -->
          <div class="menu-item {{ (request()->routeIs('dashboard')) ? 'active' : '' }}">
              <a href="{{ route('dashboard') }}" class="menu-link">
                  <svg class="menu-icon" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                  </svg>
                  <span>Dashboard</span>
              </a>
          </div>

          <!-- Pengaduan -->
          <div class="menu-item {{ (request()->routeIs('pengaduans.index')) ? 'active' : '' }}">
              <a href="{{ route('pengaduans.index') }}" class="menu-link">
                  <svg class="menu-icon" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z" clip-rule="evenodd" />
                  </svg>
                  <span>Pengaduan</span>
              </a>
          </div>

          <!-- Pengguna -->
          <div class="menu-item {{ (request()->is('admin/masyarakat')) ? 'active' : '' }}">
              <a href="{{ url('admin/masyarakat') }}" class="menu-link">
                  <svg class="menu-icon" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                  </svg>
                  <span>Pengguna</span>
              </a>
          </div>

          @if(Auth::user()->roles == 'ADMIN')
          <!-- Petugas (Admin Only) -->
          <div class="menu-item {{ (request()->is('admin/petugas')) ? 'active' : '' }}">
              <a href="{{ route('petugas.index') }}" class="menu-link">
                  <svg class="menu-icon" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                  </svg>
                  <span>Petugas</span>
              </a>
          </div>
          @endif

          <!-- Laporan -->
          <div class="menu-item {{ (request()->is('admin/laporan')) ? 'active' : '' }}">
              <a href="{{ url('admin/laporan') }}" class="menu-link">
                  <svg class="menu-icon" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd" />
                  </svg>
                  <span>Laporan</span>
              </a>
          </div>
      </div>
  </div>
</aside>

<!-- Mobile Sidebar -->
<div x-show="isSideMenuOpen" 
   x-transition:enter="transition ease-in-out duration-150"
   x-transition:enter-start="opacity-0" 
   x-transition:enter-end="opacity-100"
   x-transition:leave="transition ease-in-out duration-150" 
   x-transition:leave-start="opacity-100"
   x-transition:leave-end="opacity-0"
   class="mobile-backdrop fixed inset-0 z-10 flex items-end sm:items-center sm:justify-center">
</div>

<aside class="mobile-sidebar fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto md:hidden"
     x-show="isSideMenuOpen"
     x-transition:enter="transition ease-in-out duration-150"
     x-transition:enter-start="opacity-0 transform -translate-x-20"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition ease-in-out duration-150"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0 transform -translate-x-20"
     @click.away="closeSideMenu"
     @keydown.escape="closeSideMenu">
  <!-- Mobile menu content - similar structure to desktop but with mobile-specific classes -->
</aside>