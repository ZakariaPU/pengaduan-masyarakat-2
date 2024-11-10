@extends('layouts.admin')

@section('title')
Data Petugas
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

    /* Add Staff Button */
    .add-button {
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
        display: inline-block;
        margin: 1.5rem 0;
    }

    .add-button:hover {
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

        .add-button {
            width: 100%;
            text-align: center;
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
            Data Petugas
        </h2>

        <div>
            <a href="{{ route('petugas.create') }}" class="add-button">
                Tambah Petugas
            </a>
        </div>

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
                            <th>Nama</th>
                            <th>NIP/NRP</th>
                            <th>No. Hp</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $petugas)
                        <tr>
                            <td>{{ $petugas->name }}</td>
                            <td>{{ $petugas->nik }}</td>
                            <td>{{ $petugas->phone }}</td>
                            <td>{{ $petugas->email }}</td>
                            <td>{{ $petugas->roles }}</td>
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