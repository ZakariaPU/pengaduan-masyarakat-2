<style>
  /* Header Container */
  .header {
      background: rgba(10, 25, 47, 0.95);
      backdrop-filter: blur(12px);
      border-bottom: 1px solid rgba(79, 255, 176, 0.1);
      position: sticky;
      top: 0;
      z-index: 50;
  }

  /* Header Container Inner */
  .header-container {
      display: flex;
      align-items: center;
      justify-content: flex-end;
      padding: 1rem 1.5rem;
  }

  /* Header Items Group */
  .header-items {
      display: flex;
      align-items: center;
      gap: 2rem; /* Increased gap between items */
  }

  /* Mobile Menu Button */
  .mobile-menu-button {
      color: #4FFFB0;
      padding: 0.5rem;
      border-radius: 0.5rem;
      transition: all 0.3s ease;
      border: 1px solid rgba(79, 255, 176, 0.2);
      background: rgba(79, 255, 176, 0.05);
      margin-right: 2rem; /* Added margin to separate from other elements */
  }

  .mobile-menu-button:hover {
      background: rgba(79, 255, 176, 0.1);
      transform: translateY(-1px);
  }

  /* Theme Toggle Button */
  .theme-toggle {
      color: #4FFFB0;
      padding: 0.75rem;
      border-radius: 0.5rem;
      transition: all 0.3s ease;
      border: 1px solid rgba(79, 255, 176, 0.2);
      background: rgba(79, 255, 176, 0.05);
      display: flex;
      align-items: center;
      justify-content: center;
  }

  .theme-toggle:hover {
      background: rgba(79, 255, 176, 0.1);
      transform: translateY(-1px);
  }

  .theme-toggle svg {
      width: 1.5rem;
      height: 1.5rem;
  }

  /* User Name */
  .user-name {
      color: #94A3B8;
      font-size: 0.875rem;
      font-weight: 500;
      padding: 0.5rem 1rem;
      background: rgba(79, 255, 176, 0.05);
      border: 1px solid rgba(79, 255, 176, 0.2);
      border-radius: 0.5rem;
  }

  /* Profile Button */
  .profile-button {
      position: relative;
      transition: all 0.3s ease;
  }

  .profile-image {
      width: 2.75rem;
      height: 2.75rem;
      border-radius: 9999px;
      border: 2px solid rgba(79, 255, 176, 0.2);
      transition: all 0.3s ease;
      object-fit: cover;
  }

  .profile-button:hover .profile-image {
      border-color: #4FFFB0;
      box-shadow: 0 0 15px rgba(79, 255, 176, 0.3);
      transform: translateY(-1px);
  }

  /* Dropdown Menu */
  .dropdown-menu {
      position: absolute;
      right: 0;
      margin-top: 0.75rem;
      width: 14rem;
      background: rgba(10, 25, 47, 0.98);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(79, 255, 176, 0.2);
      border-radius: 0.75rem;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
      padding: 0.5rem;
  }

  /* Dropdown Items */
  .dropdown-item {
      display: flex;
      align-items: center;
      padding: 0.75rem 1rem;
      color: #94A3B8;
      border-radius: 0.5rem;
      transition: all 0.3s ease;
  }

  .dropdown-item:hover {
      background: rgba(79, 255, 176, 0.1);
      color: #4FFFB0;
  }

  .dropdown-item svg {
      width: 1.25rem;
      height: 1.25rem;
      margin-right: 0.75rem;
  }

  /* Responsive Design */
  @media (max-width: 768px) {
      .header-items {
          gap: 1rem; /* Reduced gap on mobile */
      }

      .mobile-menu-button {
          margin-right: 1rem; /* Reduced margin on mobile */
      }

      .user-name {
          display: none; /* Hide username on mobile */
      }
  }
</style>

<header class="header">
  <div class="header-container">
      <!-- Mobile hamburger -->
      <button class="mobile-menu-button md:hidden" @click="toggleSideMenu" aria-label="Menu">
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"></path>
          </svg>
      </button>

      <div class="header-items">
          <!-- Theme toggler -->
          <button class="theme-toggle" @click="toggleTheme" aria-label="Toggle color mode">
              <template x-if="!dark">
                  <svg aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                  </svg>
              </template>
              <template x-if="dark">
                  <svg aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd"
                          d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                          clip-rule="evenodd"></path>
                  </svg>
              </template>
          </button>

          <!-- Username -->
          <div class="user-name">
              {{ Auth::user()->name }}
          </div>

          <!-- Profile menu -->
          <div class="profile-button">
              <button class="focus:outline-none" @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account" aria-haspopup="true">
                  <img class="profile-image"
                      src="https://shanghai-date.com/uploads/g/t/t/h/q2t34kjldqrqv0pl7ihh.png"
                      alt="Profile picture" aria-hidden="true" />
              </button>

              <template x-if="isProfileMenuOpen">
                  <ul class="dropdown-menu">
                      <li>
                          <form method="POST" action="{{ route('logout') }}">
                              @csrf
                              <a href="{{ route('logout') }}"
                                  onclick="event.preventDefault(); this.closest('form').submit();"
                                  class="dropdown-item">
                                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      viewBox="0 0 24 24" stroke="currentColor">
                                      <path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                  </svg>
                                  <span>Log out</span>
                              </a>
                          </form>
                      </li>
                  </ul>
              </template>
          </div>
      </div>
  </div>
</header>