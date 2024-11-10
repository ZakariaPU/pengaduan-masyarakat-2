@extends('layouts.masyarakat')

@section('title')
    Data Pengaduan
@endsection

@section('content')
<style>
    /* Container & Layout */
    .page-container {
        padding: 2rem;
        max-width: 1200px;
        margin: 0 auto;
        min-height: 100vh;
        color: #94A3B8;
        position: relative;
    }

    /* Animated Background */
    .page-container::before {
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

    /* Header Section */
    .header-section {
        margin-bottom: 2rem;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 16px;
        padding: 1.5rem;
        backdrop-filter: blur(10px);
        animation: fadeInDown 0.5s ease-out;
        position: relative;
        z-index: 1;
    }

    .header-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 1rem;
    }

    .main-title {
        color: #4FFFB0;
        font-size: 1.75rem;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin: 0;
    }

    .main-title i {
        background: rgba(79, 255, 176, 0.1);
        border: 1px solid rgba(79, 255, 176, 0.2);
        padding: 0.75rem;
        border-radius: 12px;
        font-size: 1.25rem;
    }

    .add-button {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: rgba(79, 255, 176, 0.1);
        border: 1px solid rgba(79, 255, 176, 0.2);
        color: #4FFFB0;
        padding: 0.75rem 1.25rem;
        border-radius: 12px;
        font-weight: 500;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .add-button:hover {
        background: rgba(79, 255, 176, 0.2);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(79, 255, 176, 0.2);
    }

    /* Table Card */
    .table-card {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 16px;
        backdrop-filter: blur(10px);
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        position: relative;
        z-index: 1;
        animation: fadeIn 0.5s ease-out;
    }

    /* Table Styles */
    .data-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
    }

    .table-header {
        background: rgba(255, 255, 255, 0.03);
    }

    .table-header th {
        padding: 1.25rem 1.5rem;
        font-size: 0.875rem;
        font-weight: 600;
        color: #4FFFB0;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        text-align: left;
        border-bottom: 2px solid rgba(78, 255, 176, 0.2);
    }

    .table-body tr {
        transition: all 0.2s ease;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .table-body tr:hover {
        background: rgba(255, 255, 255, 0.03);
    }

    .table-body td {
        padding: 1.25rem 1.5rem;
        vertical-align: middle;
        color: #CBD5E1;
    }

    /* Image Cell */
    .image-cell {
        width: 220px;
    }

    .complaint-image {
        width: 200px;
        height: 130px;
        object-fit: cover;
        border-radius: 12px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border: 2px solid rgba(78, 255, 176, 0.2);
        cursor: pointer;
    }

    .complaint-image:hover {
        transform: scale(1.03);
        border-color: #4FFFB0;
        box-shadow: 0 8px 16px rgba(79, 255, 176, 0.2);
    }

    /* Date Cell */
    .date-cell {
        font-size: 0.95rem;
        color: #94A3B8;
        font-weight: 500;
    }

    /* Status Badges */
    .status-badge {
        padding: 0.625rem 1.25rem;
        border-radius: 50px;
        font-size: 0.875rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.2s ease;
    }

    .status-pending {
        background: rgba(190, 18, 60, 0.1);
        color: #fda4af;
        border: 1px solid rgba(190, 18, 60, 0.2);
    }

    .status-process {
        background: rgba(194, 65, 12, 0.1);
        color: #fdba74;
        border: 1px solid rgba(194, 65, 12, 0.2);
    }

    .status-complete {
        background: rgba(21, 128, 61, 0.1);
        color: #86efac;
        border: 1px solid rgba(21, 128, 61, 0.2);
    }

    /* Action Button */
    .action-button {
        background: rgba(79, 255, 176, 0.1);
        color: #4FFFB0;
        padding: 0.75rem 1.5rem;
        border-radius: 10px;
        font-size: 0.875rem;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.2s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        border: 1px solid rgba(79, 255, 176, 0.2);
    }

    .action-button:hover {
        background: rgba(79, 255, 176, 0.2);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(79, 255, 176, 0.2);
    }

    /* Empty State */
    .empty-state {
        padding: 4rem 2rem;
        text-align: center;
        background: rgba(255, 255, 255, 0.02);
    }

    .empty-state i {
        font-size: 3rem;
        color: #4FFFB0;
        margin-bottom: 1rem;
        opacity: 0.5;
    }

    .empty-message {
        font-size: 1.125rem;
        font-weight: 500;
        color: #94A3B8;
    }

    /* Error Messages */
    .error-container {
        background: rgba(220, 38, 38, 0.1);
        border: 1px solid rgba(220, 38, 38, 0.2);
        border-radius: 12px;
        padding: 1rem 1.5rem;
        margin-bottom: 1.5rem;
    }

    .error-container li {
        color: #fca5a5;
        font-size: 0.875rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.25rem 0;
    }

    /* Animations */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

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

    /* Responsive Design */
    @media (max-width: 1024px) {
        .page-container {
            padding: 1.5rem;
        }
    }

    @media (max-width: 768px) {
        .header-content {
            flex-direction: column;
            text-align: center;
            gap: 1rem;
        }

        .main-title {
            justify-content: center;
            font-size: 1.5rem;
        }

        .add-button {
            width: 100%;
            justify-content: center;
        }

        .page-container {
            padding: 1rem;
        }

        .data-table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .table-header th, 
        .table-body td {
            padding: 1rem;
        }

        .complaint-image {
            width: 160px;
            height: 100px;
        }

        .status-badge {
            padding: 0.5rem 1rem;
            font-size: 0.75rem;
        }

        .action-button {
            padding: 0.625rem 1rem;
            font-size: 0.75rem;
        }
    }
</style>

<div class="page-container">
    <!-- Header Section -->
    <div class="header-section">
        <div class="header-content">
            <h2 class="main-title">
                <i class="fas fa-clipboard-list"></i>
                Data Pengaduan
            </h2>
            <a href="{{ route('pengaduan.create') }}" class="add-button">
                <i class="fas fa-plus"></i>
                Buat Pengaduan Baru
            </a>
        </div>
    </div>

    <!-- Table Card -->
    <div class="table-card">
        <table class="data-table">
            <thead class="table-header">
                <tr>
                    <th>Foto</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-body">
                @forelse ($items as $item)
                    <tr>
                        <td class="image-cell">
                            <img class="complaint-image" 
                                 src="{{ Storage::url($item->image) }}" 
                                 alt="Foto Pengaduan" 
                                 loading="lazy" />
                        </td>
                        <td class="date-cell">
                            {{ $item->created_at->format('l, d F Y - H:i:s') }}
                        </td>
                        <td>
                            @if($item->status == 'Belum di Proses')
                                <span class="status-badge status-pending">
                                    <i class="fas fa-clock"></i>
                                    {{ $item->status }}
                                </span>
                            @elseif($item->status == 'Sedang di Proses')
                                <span class="status-badge status-process">
                                    <i class="fas fa-spinner fa-spin"></i>
                                    {{ $item->status }}
                                </span>
                            @else
                                <span class="status-badge status-complete">
                                    <i class="fas fa-check-circle"></i>
                                    {{ $item->status }}
                                </span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('pengaduan.show', $item->id) }}" 
                               class="action-button">
                                <i class="fas fa-eye"></i>
                                Lihat Detail
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="empty-state">
                            <i class="fas fa-inbox"></i>
                            <p class="empty-message">Belum ada data pengaduan</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection