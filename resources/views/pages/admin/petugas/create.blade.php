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

    /* Form Container */
    .form-container {
        background: rgba(255, 255, 255, 0.02);
        backdrop-filter: blur(12px);
        border-radius: 24px;
        padding: 2rem;
        border: 1px solid rgba(79, 255, 176, 0.2);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        margin-bottom: 2rem;
    }

    /* Form Fields */
    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-label {
        display: block;
        color: #4FFFB0;
        font-size: 0.875rem;
        font-weight: 500;
        margin-bottom: 0.5rem;
    }

    .form-input {
        width: 100%;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(79, 255, 176, 0.2);
        border-radius: 12px;
        padding: 0.75rem 1rem;
        color: #CBD5E1;
        font-size: 0.875rem;
        transition: all 0.3s ease;
    }

    .form-input:focus {
        outline: none;
        border-color: #4FFFB0;
        box-shadow: 0 0 0 3px rgba(79, 255, 176, 0.1);
    }

    .form-input::placeholder {
        color: #64748B;
    }

    /* Select Field */
    .form-select {
        width: 100%;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(79, 255, 176, 0.2);
        border-radius: 12px;
        padding: 0.75rem 1rem;
        color: #CBD5E1;
        font-size: 0.875rem;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%234FFFB0'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 1rem center;
        background-size: 1rem;
    }

    .form-select:focus {
        outline: none;
        border-color: #4FFFB0;
        box-shadow: 0 0 0 3px rgba(79, 255, 176, 0.1);
    }

    /* Submit Button */
    .submit-button {
        background: rgba(79, 255, 176, 0.1);
        color: #4FFFB0;
        padding: 0.75rem 1.5rem;
        border-radius: 12px;
        font-weight: 500;
        font-size: 0.875rem;
        border: 1px solid rgba(79, 255, 176, 0.2);
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 2rem;
        width: auto;
        display: inline-block;
    }

    .submit-button:hover {
        background: rgba(79, 255, 176, 0.2);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(79, 255, 176, 0.2);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .form-container {
            padding: 1.5rem;
            border-radius: 16px;
        }

        .page-title {
            font-size: 1.5rem;
        }

        .submit-button {
            width: 100%;
        }
    }
</style>

<main class="h-full pb-16 overflow-y-auto">
    <div class="container px-6 mx-auto">
        <h2 class="page-title">
            Forms
        </h2>

        <form action="{{ route('petugas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-container">
                <div class="form-group">
                    <label class="form-label">NIP/NRP</label>
                    <input class="form-input"
                           type="text"
                           placeholder="NIP/NRP"
                           value="{{ old('nik') }}"
                           name="nik">
                </div>

                <div class="form-group">
                    <label class="form-label">Name</label>
                    <input class="form-input"
                           type="text"
                           placeholder="Zakaria"
                           value="{{ old('name') }}"
                           name="name">
                </div>

                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input class="form-input"
                           type="email"
                           placeholder="email@example.com"
                           value="{{ old('email') }}"
                           name="email">
                </div>

                <div class="form-group">
                    <label class="form-label">No. Hp</label>
                    <input class="form-input"
                           type="text"
                           placeholder="0123456789"
                           value="{{ old('phone') }}"
                           name="phone">
                </div>

                <div class="form-group">
                    <label class="form-label">Role</label>
                    <select class="form-select" name="roles">
                        <option value="ADMIN">Admin</option>
                        <option value="PETUGAS">Petugas</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input class="form-input"
                           type="password"
                           placeholder="Password"
                           value="{{ old('password') }}"
                           name="password">
                </div>

                <div class="form-group">
                    <label class="form-label">Konfirmasi Password</label>
                    <input class="form-input"
                           type="password"
                           placeholder="Konfirmasi Password"
                           value="{{ old('password') }}"
                           name="password_confirmation">
                </div>

                <button type="submit" class="submit-button">
                    Tambah Petugas
                </button>
            </div>
        </form>
    </div>
</main>
@endsection