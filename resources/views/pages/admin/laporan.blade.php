@extends('layouts.admin')

@section('title')
Laporan
@endsection

@section('content')
<style>
    /* Base Styles matching login theme */
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

    /* Export Button Styling */
    .export-button {
        background: rgba(79, 255, 176, 0.1);
        color: #4FFFB0;
        padding: 0.75rem 1.5rem;
        border-radius: 12px;
        font-weight: 600;
        font-size: 0.875rem;
        border: 1px solid rgba(79, 255, 176, 0.2);
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .export-button:hover {
        background: rgba(79, 255, 176, 0.2);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(79, 255, 176, 0.2);
    }

    /* Table Container */
    .table-container {
        background: rgba(255, 255, 255, 0.02);
        backdrop-filter: blur(12px);
        border-radius: 24px;
        padding: 1.5rem;
        border: 1px solid rgba(79, 255, 176, 0.2);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        margin-top: 2rem;
    }

    /* Table Styles */
    table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        color: #CBD5E1;
    }

    thead tr {
        background: rgba(79, 255, 176, 0.05);
    }

    th {
        color: #4FFFB0;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.75rem;
        padding: 1rem;
        text-align: left;
        border-bottom: 1px solid rgba(79, 255, 176, 0.2);
    }

    td {
        padding: 1rem;
        font-size: 0.875rem;
        border-bottom: 1px solid rgba(79, 255, 176, 0.1);
    }

    tbody tr:hover {
        background: rgba(79, 255, 176, 0.05);
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

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 3rem;
        color: #64748B;
    }
</style>

<main class="h-full pb-16 overflow-y-auto">
    <div class="container px-6 mx-auto">
        <div class="my-6 mb-6">
            <a href="{{ url('admin/laporan/cetak')}}" class="export-button">
                Export ke PDF
            </a>
        </div>
        
        <div class="table-container">
            @if ($errors->any())
            <div class="message error-message">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIP/NRP</th>
                        <th>Nama</th>
                        <th>Pengaduan</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pengaduan as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->user_nik }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->created_at->format('l, d F Y') }}</td>
                        <td>
                            @if($item->status == 'Belum di Proses')
                            <span class="status-tag status-pending">
                                {{ $item->status }}
                            </span>
                            @elseif($item->status == 'Sedang di Proses')
                            <span class="status-tag status-processing">
                                {{ $item->status }}
                            </span>
                            @else
                            <span class="status-tag status-completed">
                                {{ $item->status }}
                            </span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="empty-state">
                            Data Kosong
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection