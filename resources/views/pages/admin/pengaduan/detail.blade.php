@extends('layouts.admin')

@section('title')
Detail Pengaduan
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

    /* Page Title */
    .page-title {
        color: #4FFFB0;
        font-size: 2rem;
        font-weight: 600;
        margin: 2rem 0;
        text-align: center;
        text-shadow: 0 0 20px rgba(79, 255, 176, 0.2);
    }

    /* Card Styles */
    .detail-card {
        background: rgba(255, 255, 255, 0.02);
        backdrop-filter: blur(12px);
        border-radius: 24px;
        padding: 2rem;
        border: 1px solid rgba(79, 255, 176, 0.2);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        margin-bottom: 2rem;
        color: #CBD5E1;
    }

    .info-item {
        margin: 1rem 0;
        display: flex;
        align-items: center;
    }

    .info-label {
        font-weight: 500;
        color: #4FFFB0;
        margin-right: 0.5rem;
    }

    .info-value {
        color: #94A3B8;
    }

    /* Status Tags */
    .status-tag {
        padding: 0.5rem 1rem;
        border-radius: 9999px;
        font-size: 0.75rem;
        font-weight: 600;
        display: inline-block;
    }

    .status-pending {
        background: rgba(255, 99, 99, 0.1);
        color: #ff6363;
        border: 1px solid rgba(255, 99, 99, 0.2);
    }

    .status-processing {
        background: rgba(255, 170, 0, 0.1);
        color: #ffaa00;
        border: 1px solid rgba(255, 170, 0, 0.2);
    }

    .status-completed {
        background: rgba(79, 255, 176, 0.1);
        color: #4FFFB0;
        border: 1px solid rgba(79, 255, 176, 0.2);
    }

    /* Image and Description Card */
    .content-card {
        display: flex;
        gap: 2rem;
        padding: 2rem;
    }

    .content-section {
        flex: 1;
    }

    .section-title {
        color: #4FFFB0;
        font-weight: 600;
        margin-bottom: 1.5rem;
        font-size: 1.1rem;
    }

    .complaint-image {
        border-radius: 12px;
        border: 1px solid rgba(79, 255, 176, 0.2);
        transition: all 0.3s ease;
        max-width: 100%;
    }

    .complaint-image:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }

    /* Response Section */
    .response-card {
        text-align: center;
        padding: 2rem;
    }

    /* Action Buttons */
    .button-container {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin: 2rem 0;
    }

    .action-button {
        background: rgba(79, 255, 176, 0.1);
        color: #4FFFB0;
        padding: 0.75rem 1.5rem;
        border-radius: 12px;
        font-weight: 500;
        font-size: 0.875rem;
        border: 1px solid rgba(79, 255, 176, 0.2);
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        text-align: center;
    }

    .action-button:hover {
        background: rgba(79, 255, 176, 0.2);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(79, 255, 176, 0.2);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .content-card {
            flex-direction: column;
        }

        .button-container {
            flex-direction: column;
        }

        .action-button {
            width: 100%;
        }
    }
</style>

<main class="h-full pb-16 overflow-y-auto">
    <div class="container px-6 mx-auto">
        <h2 class="page-title">Detail Pengaduan</h2>

        <div class="w-full mb-8">
            @foreach($item->details as $ite)
                <div class="detail-card">
                    <div class="info-item">
                        <span class="info-label">Nama:</span>
                        <span class="info-value">{{ $ite->name }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">NIP/NRP:</span>
                        <span class="info-value">{{ $ite->user_nik }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">No Telepon:</span>
                        <span class="info-value">{{ $item->user->phone }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Tanggal:</span>
                        <span class="info-value">{{ $ite->created_at->format('l, d F Y - H:i:s') }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Status:</span>
                        @if($item->status == 'Belum di Proses')
                            <span class="status-tag status-pending">{{ $item->status }}</span>
                        @elseif($item->status == 'Sedang di Proses')
                            <span class="status-tag status-processing">{{ $item->status }}</span>
                        @else
                            <span class="status-tag status-completed">{{ $item->status }}</span>
                        @endif
                    </div>
                </div>

                <div class="detail-card content-card">
                    <div class="content-section">
                        <h3 class="section-title">Foto</h3>
                        <img class="complaint-image" src="{{ Storage::url($item->image) }}" alt="Complaint Image" loading="lazy" />
                    </div>
                    <div class="content-section">
                        <h3 class="section-title">Keterangan</h3>
                        <p class="info-value">{{ $item->description }}</p>
                    </div>
                </div>
            @endforeach

            <div class="detail-card response-card">
                <h3 class="section-title">Tanggapan</h3>
                <p class="info-value">
                    @if (empty($tangap->tanggapan))
                        Belum ada tanggapan
                    @else
                        {{ $tangap->tanggapan }}
                    @endif
                </p>
            </div>

            <div class="button-container">
                <a href="{{ url('admin/pengaduan/cetak', $item->id)}}" class="action-button">
                    Export ke PDF
                </a>
                <a href="{{ route('tanggapan.show', $item->id)}}" class="action-button">
                    Berikan Tanggapan
                </a>
            </div>
        </div>
    </div>
</main>
@endsection