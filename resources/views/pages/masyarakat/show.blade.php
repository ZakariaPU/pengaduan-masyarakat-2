@extends('layouts.masyarakat')

@section('title')
    Detail Pengaduan
@endsection

@section('content')
<style>
    /* Container & Layout */
    .content-container {
        min-height: 100vh;
        padding: 2rem;
        position: relative;
        color: #94A3B8;
    }

    .content-container::before {
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

    .detail-wrapper {
        max-width: 1000px;
        margin: 0 auto;
        position: relative;
        z-index: 1;
    }

    /* Header Styles */
    .header-section {
        margin-bottom: 2rem;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 16px;
        padding: 1.5rem;
        backdrop-filter: blur(10px);
        animation: fadeInDown 0.5s ease-out;
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
    }

    .main-title i {
        background: rgba(79, 255, 176, 0.1);
        border: 1px solid rgba(79, 255, 176, 0.2);
        padding: 0.5rem;
        border-radius: 10px;
        font-size: 1.25rem;
    }

    .back-button {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: rgba(79, 255, 176, 0.1);
        border: 1px solid rgba(79, 255, 176, 0.2);
        color: #4FFFB0;
        padding: 0.75rem 1.25rem;
        border-radius: 10px;
        font-weight: 500;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .back-button:hover {
        background: rgba(79, 255, 176, 0.2);
        transform: translateX(-5px);
        box-shadow: 0 4px 12px rgba(79, 255, 176, 0.2);
    }

    /* Detail Card */
    .detail-card {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 16px;
        backdrop-filter: blur(10px);
        overflow: hidden;
        margin-bottom: 2rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        animation: fadeInUp 0.5s ease-out;
    }

    /* Personal Info Section */
    .personal-info {
        padding: 2rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        background: rgba(255, 255, 255, 0.02);
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }

    .info-item {
        background: rgba(255, 255, 255, 0.03);
        padding: 1.25rem;
        border-radius: 12px;
        border: 1px solid rgba(255, 255, 255, 0.05);
        display: flex;
        align-items: center;
        gap: 1rem;
        transition: all 0.3s ease;
    }

    .info-item:hover {
        transform: translateY(-2px);
        background: rgba(255, 255, 255, 0.04);
        border-color: rgba(79, 255, 176, 0.2);
    }

    .info-icon {
        width: 42px;
        height: 42px;
        background: rgba(79, 255, 176, 0.1);
        border: 1px solid rgba(79, 255, 176, 0.2);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #4FFFB0;
        font-size: 1.25rem;
    }

    .info-content {
        flex: 1;
    }

    .info-label {
        font-size: 0.875rem;
        color: #94A3B8;
        margin-bottom: 0.25rem;
    }

    .info-value {
        font-size: 1rem;
        color: #CBD5E1;
        font-weight: 600;
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

    /* Complaint Details Section */
    .complaint-details {
        padding: 2rem;
        display: grid;
        grid-template-columns: 350px 1fr;
        gap: 2rem;
    }

    .image-container {
        position: relative;
        padding-top: 2.5rem;
    }

    .complaint-image {
        width: 100%;
        border-radius: 12px;
        transition: all 0.3s ease;
        cursor: pointer;
        border: 2px solid rgba(79, 255, 176, 0.2);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    .complaint-image:hover {
        transform: scale(1.02);
        border-color: #4FFFB0;
        box-shadow: 0 8px 12px rgba(79, 255, 176, 0.2);
    }

    .image-label {
        background: rgba(79, 255, 176, 0.1);
        color: #4FFFB0;
        padding: 0.5rem 1rem;
        border-radius: 8px;
        font-size: 0.875rem;
        font-weight: 500;
        position: absolute;
        top: 0;
        left: 0;
        border: 1px solid rgba(79, 255, 176, 0.2);
    }

    .description-container {
        padding: 1.5rem;
        background: rgba(255, 255, 255, 0.02);
        border-radius: 12px;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .description-label {
        font-size: 1rem;
        color: #4FFFB0;
        font-weight: 600;
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid rgba(79, 255, 176, 0.2);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .description-text {
        color: #CBD5E1;
        line-height: 1.7;
        text-align: justify;
        font-size: 0.95rem;
    }

    /* Response Section */
    .response-section {
        background: rgba(255, 255, 255, 0.02);
        padding: 2rem;
        border-radius: 16px;
        border: 1px solid rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        animation: fadeInUp 0.5s ease-out 0.2s;
        animation-fill-mode: both;
    }

    .response-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1.5rem;
        padding-bottom: 1rem;
        border-bottom: 2px solid rgba(79, 255, 176, 0.2);
    }

    .response-icon {
        width: 42px;
        height: 42px;
        background: rgba(79, 255, 176, 0.1);
        border: 1px solid rgba(79, 255, 176, 0.2);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #4FFFB0;
    }

    .response-title {
        font-size: 1.25rem;
        color: #4FFFB0;
        font-weight: 600;
    }

    .response-content {
        background: rgba(255, 255, 255, 0.02);
        padding: 1.5rem;
        border-radius: 12px;
        color: #CBD5E1;
        line-height: 1.7;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .response-message {
        color: #CBD5E1;
        line-height: 1.7;
        font-size: 0.95rem;
    }

    .no-response {
        color: #94A3B8;
        font-style: italic;
        text-align: center;
        padding: 2rem;
        background: rgba(255, 255, 255, 0.02);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
    }

    .no-response i {
        color: #4FFFB0;
        opacity: 0.5;
    }

    /* Modal Styles */
    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(10, 25, 47, 0.95);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 50;
        backdrop-filter: blur(4px);
        padding: 2rem;
    }

    .modal-container {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 16px;
        position: relative;
        max-width: 90vw;
        max-height: 90vh;
        overflow: hidden;
        animation: modalAppear 0.3s ease-out;
    }

    .modal-close {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: rgba(79, 255, 176, 0.1);
        border: 1px solid rgba(79, 255, 176, 0.2);
        color: #4FFFB0;
        border-radius: 50%;
        width: 2.5rem;
        height: 2.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.2s ease;
        z-index: 51;
    }

    .modal-close:hover {
        background: rgba(79, 255, 176, 0.2);
        transform: scale(1.1);
    }

    .modal-image {
        display: block;
        max-width: 100%;
        max-height: 80vh;
        object-fit: contain;
    }

    .modal-loading {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #4FFFB0;
        font-size: 2rem;
        z-index: 52;
    }

    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

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

    @keyframes modalAppear {
        from { 
            opacity: 0; 
            transform: scale(0.9); 
        }
        to { 
            opacity: 1; 
            transform: scale(1); 
        }
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .content-container {
            padding: 1.5rem;
        }

        .info-grid {
            gap: 1rem;
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

        .back-button {
            width: 100%;
            justify-content: center;
        }

        .info-grid {
            grid-template-columns: 1fr;
        }

        .complaint-details {
            grid-template-columns: 1fr;
        }

        .description-container {
            margin-top: 2rem;
        }
    }

    @media (max-width: 640px) {
        .modal-container {
            margin: 1rem;
            width: calc(100% - 2rem);
        }

        .modal-close {
            top: 0.5rem;
            right: 0.5rem;
            width: 2rem;
            height: 2rem;
        }
    }

    /* Print styles */
    @media print {
        .modal-overlay {
            display: none !important;
        }

        .content-container {
            padding: 0;
            background: none;
        }

        .detail-card,
        .response-section {
            box-shadow: none;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .info-icon {
            print-color-adjust: exact;
            -webkit-print-color-adjust: exact;
        }
    }
</style>

<div class="content-container">
    <div class="detail-wrapper">
        <!-- Header Section -->
        <div class="header-section">
            <div class="header-content">
                <h2 class="main-title">
                    <i class="fas fa-file-alt"></i>
                    Detail Pengaduan
                </h2>
                <a href="{{ url('user/pengaduan') }}" class="back-button">
                    <i class="fas fa-arrow-left"></i>
                    Kembali ke Data Pengaduan
                </a>
            </div>
        </div>

        <!-- Detail Content -->
        @foreach($item->details as $ite)
        <div class="detail-card">
            <!-- Personal Info -->
            <div class="personal-info">
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="info-content">
                            <div class="info-label">Nama</div>
                            <div class="info-value">{{ $ite->name }}</div>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-id-card"></i>
                        </div>
                        <div class="info-content">
                            <div class="info-label">NIP/NRP</div>
                            <div class="info-value">{{ $ite->user_nik }}</div>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="info-content">
                            <div class="info-label">No Telepon</div>
                            <div class="info-value">{{ $item->user->phone }}</div>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="info-content">
                            <div class="info-label">Tanggal Pengaduan</div>
                            <div class="info-value">{{ $ite->created_at->format('l, d F Y - H:i:s') }}</div>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-info-circle"></i>
                        </div>
                        <div class="info-content">
                            <div class="info-label">Status</div>
                            <div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Complaint Details -->
            <div class="complaint-details">
                <div class="image-container">
                    <div class="image-label">Foto Pengaduan</div>
                    <img class="complaint-image" 
                         src="{{ Storage::url($item->image) }}" 
                         alt="Foto Pengaduan"
                         onclick="openImageModal('{{ Storage::url($item->image) }}')" 
                         loading="lazy" />
                </div>

                <div class="description-container">
                    <div class="description-label">
                        <i class="fas fa-align-left"></i>
                        Keterangan Pengaduan
                    </div>
                    <p class="description-text">{{ $item->description }}</p>
                </div>
            </div>
        </div>
        @endforeach

        <!-- Response Section -->
        <div class="response-section">
            <div class="response-header">
                <div class="response-icon">
                    <i class="fas fa-comments"></i>
                </div>
                <h3 class="response-title">Tanggapan Petugas</h3>
            </div>
            
            <div class="response-content">
                @if (empty($tangap->tanggapan))
                    <p class="no-response">
                        <i class="fas fa-inbox"></i>
                        Belum ada tanggapan dari petugas
                    </p>
                @else
                    <div class="response-message">{{ $tangap->tanggapan }}</div>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Image Modal -->
<div class="modal-overlay" id="imageModal">
    <div class="modal-container">
        <button class="modal-close" onclick="closeImageModal()">
            <i class="fas fa-times"></i>
        </button>
        <div class="modal-content">
            <div class="modal-loading">
                <i class="fas fa-spinner fa-spin"></i>
            </div>
            <img class="modal-image" id="modalImage" src="" alt="Preview gambar pengaduan">
        </div>
    </div>
</div>

<script>
    function openImageModal(imageSrc) {
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const body = document.body;

        document.querySelector('.modal-loading').style.display = 'block';
        modalImage.src = imageSrc;
        modal.style.display = 'flex';
        body.classList.add('modal-open');
        document.addEventListener('keydown', handleEscapeKey);

        modalImage.onload = function() {
            document.querySelector('.modal-loading').style.display = 'none';
        };
    }

    function closeImageModal() {
        const modal = document.getElementById('imageModal');
        const body = document.body;
        
        modal.style.display = 'none';
        body.classList.remove('modal-open');
        document.removeEventListener('keydown', handleEscapeKey);
    }

    function handleEscapeKey(e) {
        if (e.key === 'Escape') {
            closeImageModal();
        }
    }

    document.getElementById('imageModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeImageModal();
        }
    });

    document.querySelector('.modal-container').addEventListener('click', function(e) {
        e.stopPropagation();
    });

    // Animation for info items
    const infoItems = document.querySelectorAll('.info-item');
    infoItems.forEach((item, index) => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(20px)';
        setTimeout(() => {
            item.style.transition = 'all 0.3s ease';
            item.style.opacity = '1';
            item.style.transform = 'translateY(0)';
        }, 100 * index);
    });
</script>
@endsection