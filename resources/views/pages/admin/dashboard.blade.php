@extends('layouts.admin')

@section('title')
Dashboard
@endsection

@section('content')
<style>
    /* Base Styles */
    body {
        background: linear-gradient(135deg, #0a192f 0%, #112240 100%);
        font-family: 'Poppins', sans-serif;
    }

    /* Container Styles */
    .container {
        max-width: 1440px;
        margin: 0 auto;
        position: relative;
    }

    .container::before {
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

    /* Dashboard Title */
    .dashboard-title {
        color: #4FFFB0;
        font-size: 2rem;
        font-weight: 600;
        margin: 2rem 0;
        text-shadow: 0 0 20px rgba(79, 255, 176, 0.2);
    }

    /* Cards Grid */
    .cards-grid {
        display: grid;
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    @media (min-width: 768px) {
        .cards-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width: 1280px) {
        .cards-grid {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    /* Card Styles */
    .stat-card {
        background: rgba(255, 255, 255, 0.02);
        backdrop-filter: blur(12px);
        border-radius: 16px;
        padding: 1.5rem;
        border: 1px solid rgba(79, 255, 176, 0.2);
        display: flex;
        align-items: center;
        transition: all 0.3s ease;
    }

    .stat-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        border-color: rgba(79, 255, 176, 0.4);
    }

    /* Icon Container */
    .icon-container {
        padding: 1rem;
        margin-right: 1rem;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Color Variants */
    .blue {
        background: rgba(59, 130, 246, 0.1);
        color: #60A5FA;
        border: 1px solid rgba(59, 130, 246, 0.2);
    }

    .red {
        background: rgba(239, 68, 68, 0.1);
        color: #F87171;
        border: 1px solid rgba(239, 68, 68, 0.2);
    }

    .orange {
        background: rgba(249, 115, 22, 0.1);
        color: #FB923C;
        border: 1px solid rgba(249, 115, 22, 0.2);
    }

    .green {
        background: rgba(79, 255, 176, 0.1);
        color: #4FFFB0;
        border: 1px solid rgba(79, 255, 176, 0.2);
    }

    /* Card Content */
    .card-content p:first-child {
        color: #94A3B8;
        font-size: 0.875rem;
        margin-bottom: 0.5rem;
    }

    .card-content p:last-child {
        color: #CBD5E1;
        font-size: 1.25rem;
        font-weight: 600;
    }

    /* Icons */
    .icon-container svg {
        width: 1.5rem;
        height: 1.5rem;
    }
</style>

<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto">
        <h2 class="dashboard-title">
            Dashboard
        </h2>

        <!-- First Row Cards -->
        <div class="cards-grid">
            <!-- Pengaduan Card -->
            <div class="stat-card">
                <div class="icon-container blue">
                    <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="card-content">
                    <p>Jumlah Pengaduan</p>
                    <p>{{ $pengaduan }}</p>
                </div>
            </div>

            <!-- Pending Card -->
            <div class="stat-card">
                <div class="icon-container red">
                    <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="card-content">
                    <p>Belum di Proses</p>
                    <p>{{ $pending }}</p>
                </div>
            </div>

            <!-- Process Card -->
            <div class="stat-card">
                <div class="icon-container orange">
                    <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M8 5a1 1 0 100 2h5.586l-1.293 1.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L13.586 5H8zM12 15a1 1 0 100-2H6.414l1.293-1.293a1 1 0 10-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L6.414 15H12z" />
                    </svg>
                </div>
                <div class="card-content">
                    <p>Sedang di Proses</p>
                    <p>{{ $process }}</p>
                </div>
            </div>

            <!-- Success Card -->
            <div class="stat-card">
                <div class="icon-container green">
                    <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="card-content">
                    <p>Selesai</p>
                    <p>{{ $success }}</p>
                </div>
            </div>
        </div>

        @if(Auth::user()->roles == 'ADMIN')
        <!-- Admin Cards -->
        <div class="cards-grid">
            <!-- Users Card -->
            <div class="stat-card">
                <div class="icon-container green">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                        </path>
                    </svg>
                </div>
                <div class="card-content">
                    <p>Jumlah User</p>
                    <p>{{ $user }}</p>
                </div>
            </div>

            <!-- Staff Card -->
            <div class="stat-card">
                <div class="icon-container orange">
                    <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                    </svg>
                </div>
                <div class="card-content">
                    <p>Jumlah Petugas</p>
                    <p>{{ $petugas }}</p>
                </div>
            </div>

            <!-- Admin Card -->
            <div class="stat-card">
                <div class="icon-container red">
                    <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="card-content">
                    <p>Jumlah Admin</p>
                    <p>{{ $admin }}</p>
                </div>
            </div>

            <!-- Responses Card -->
            <div class="stat-card">
                <div class="icon-container blue">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="card-content">
                    <p>Jumlah Tanggapan</p>
                    <p>{{ $tanggapan }}</p>
                </div>
            </div>
        </div>
        @endif
    </div>
</main>
@endsection