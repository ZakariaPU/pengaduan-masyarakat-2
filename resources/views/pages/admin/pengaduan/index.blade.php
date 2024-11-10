@extends('layouts.admin')

@section('title')
Data Pengaduan
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
        font-size: 1.875rem;
        font-weight: 600;
        margin: 2rem 0;
        text-shadow: 0 0 20px rgba(79, 255, 176, 0.2);
    }

    /* Table Container */
    .table-container {
        background: rgba(255, 255, 255, 0.02);
        backdrop-filter: blur(12px);
        border-radius: 24px;
        padding: 1.5rem;
        border: 1px solid rgba(79, 255, 176, 0.2);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        margin-bottom: 2rem;
    }

    /* Error Messages */
    .alert-danger {
        background: rgba(255, 99, 99, 0.1);
        border: 1px solid rgba(255, 99, 99, 0.2);
        color: #ff6363;
        padding: 1rem 1.5rem;
        border-radius: 12px;
        margin-bottom: 1.5rem;
    }

    .alert-danger ul {
        list-style: none;
        margin: 0;
        padding: 0;
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
        color: #94A3B8;
    }

    tbody tr {
        transition: all 0.3s ease;
    }

    tbody tr:hover {
        background: rgba(79, 255, 176, 0.05);
    }

    /* Image Styles */
    .complaint-image {
        border-radius: 12px;
        border: 1px solid rgba(79, 255, 176, 0.2);
        transition: all 0.3s ease;
    }

    .complaint-image:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
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

    /* Action Buttons */
    .action-buttons {
        display: flex;
        gap: 1rem;
        align-items: center;
    }

    .action-button {
        background: transparent;
        border: none;
        padding: 0.5rem;
        border-radius: 8px;
        color: #4FFFB0;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .action-button:hover {
        background: rgba(79, 255, 176, 0.1);
        transform: translateY(-2px);
    }

    .action-button svg {
        width: 1.25rem;
        height: 1.25rem;
    }

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 3rem;
        color: #64748B;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .table-container {
            padding: 1rem;
            border-radius: 16px;
        }

        th, td {
            padding: 0.75rem;
        }

        .page-title {
            font-size: 1.5rem;
        }
    }
</style>

<main class="h-full pb-16 overflow-y-auto">
    <div class="container px-6 mx-auto">
        <h2 class="page-title">
            Pengaduan
        </h2>

        <div class="table-container">
            @if ($errors->any())
            <div class="alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="w-full overflow-x-auto">
                <table>
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                        <tr>
                            <td>
                                <div class="flex items-center">
                                    <div class="relative hidden md:block">
                                        <img class="complaint-image h-32 w-35" 
                                             src="{{ Storage::url($item->image) }}" 
                                             alt="Complaint Image" 
                                             loading="lazy" />
                                    </div>
                                </div>
                            </td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->created_at->format('l, d F Y - H:i:s') }}</td>
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
                            <td>
                                <div class="action-buttons">
                                    <a href="{{ route('pengaduans.show', $item->id) }}" 
                                       class="action-button" 
                                       aria-label="Detail">
                                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" 
                                                  stroke-linejoin="round" 
                                                  stroke-width="2"
                                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" 
                                                  stroke-linejoin="round" 
                                                  stroke-width="2"
                                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </a>
                                    <form action="{{ route('pengaduans.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" 
                                                class="action-button" 
                                                aria-label="Delete">
                                            <svg fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                      d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="empty-state">
                                Data Kosong
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection