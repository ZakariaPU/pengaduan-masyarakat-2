@extends('layouts.masyarakat')

@section('title')
    Form Pengaduan
@endsection

@section('content')
<style>
    .page-container {
        padding: 2rem;
        min-height: 100vh;
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

    .complaint-card {
        background: rgba(255, 255, 255, 0.02);
        backdrop-filter: blur(10px);
        border-radius: 24px;
        padding: 3.5rem;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        border: 1px solid rgba(79, 255, 176, 0.2);
        max-width: 800px;
        margin: 0 auto;
        position: relative;
        overflow: hidden;
        animation: fadeIn 0.5s ease-out;
    }

    /* Decorative Elements */
    .complaint-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #4FFFB0, rgba(79, 255, 176, 0.5));
    }

    /* Header Styles */
    .form-header {
        text-align: center;
        margin-bottom: 3.5rem;
        position: relative;
    }

    .form-title {
        font-size: 2.5rem;
        font-weight: 800;
        color: #4FFFB0;
        margin-bottom: 1rem;
        text-shadow: 0 0 20px rgba(79, 255, 176, 0.3);
    }

    .form-subtitle {
        color: #94A3B8;
        font-size: 1.1rem;
        line-height: 1.6;
        max-width: 600px;
        margin: 0 auto;
    }

    /* Form Elements */
    .form-group {
        margin-bottom: 2.5rem;
    }

    .form-label {
        display: block;
        color: #CBD5E1;
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 1rem;
    }

    .form-label i {
        color: #4FFFB0;
        margin-right: 0.5rem;
    }

    .form-textarea {
        width: 100%;
        min-height: 200px;
        padding: 1.5rem;
        border: 1px solid rgba(79, 255, 176, 0.2);
        border-radius: 16px;
        background: rgba(255, 255, 255, 0.02);
        color: #CBD5E1;
        font-size: 1rem;
        line-height: 1.7;
        transition: all 0.3s ease;
        resize: vertical;
    }

    .form-textarea:focus {
        outline: none;
        border-color: #4FFFB0;
        box-shadow: 0 0 0 4px rgba(79, 255, 176, 0.1);
    }

    .form-textarea::placeholder {
        color: #64748B;
    }

    /* File Upload */
    .file-upload {
        position: relative;
        width: 100%;
        min-height: 180px;
        border: 2px dashed rgba(79, 255, 176, 0.2);
        border-radius: 16px;
        padding: 2.5rem;
        text-align: center;
        transition: all 0.3s ease;
        cursor: pointer;
        background: rgba(255, 255, 255, 0.02);
    }

    .file-upload:hover {
        border-color: #4FFFB0;
        background: rgba(79, 255, 176, 0.05);
    }

    .upload-icon {
        font-size: 3rem;
        color: #4FFFB0;
        margin-bottom: 1.2rem;
        opacity: 0.8;
    }

    .upload-text {
        color: #94A3B8;
        font-size: 1.1rem;
        line-height: 1.6;
    }

    .upload-text small {
        display: block;
        margin-top: 0.8rem;
        color: #64748B;
        font-size: 0.9rem;
    }

    /* Image Preview */
    .image-preview-container {
        display: none;
        margin-top: 1.5rem;
    }

    .image-preview-wrapper {
        position: relative;
        display: inline-block;
        max-width: 100%;
    }

    .image-preview {
        max-width: 100%;
        max-height: 200px;
        border-radius: 12px;
        border: 2px solid rgba(79, 255, 176, 0.2);
    }

    .remove-image {
        position: absolute;
        top: -10px;
        right: -10px;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: rgba(79, 255, 176, 0.1);
        border: 1px solid rgba(79, 255, 176, 0.2);
        color: #4FFFB0;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .remove-image:hover {
        background: rgba(79, 255, 176, 0.2);
        transform: scale(1.1);
    }

    /* Buttons */
    .button-group {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
        margin-top: 3.5rem;
    }

    .submit-button, .back-button {
        padding: 1.3rem;
        border-radius: 16px;
        font-weight: 600;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.8rem;
        cursor: pointer;
    }

    .submit-button {
        background: linear-gradient(135deg, #4FFFB0 0%, #45e49d 100%);
        color: #0a192f;
        border: none;
    }

    .back-button {
        background: rgba(255, 255, 255, 0.02);
        color: #4FFFB0;
        border: 1px solid rgba(79, 255, 176, 0.2);
        text-decoration: none;
    }

    .submit-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(79, 255, 176, 0.2);
    }

    .back-button:hover {
        transform: translateY(-2px);
        border-color: #4FFFB0;
        background: rgba(79, 255, 176, 0.1);
    }

    /* Error Messages */
    .error-container {
        background: rgba(220, 38, 38, 0.1);
        border: 1px solid rgba(220, 38, 38, 0.2);
        border-radius: 16px;
        padding: 1.5rem;
        margin-bottom: 2.5rem;
    }

    .error-list {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .error-item {
        display: flex;
        align-items: center;
        gap: 0.8rem;
        padding: 0.5rem 0;
        color: #fca5a5;
    }

    .error-item i {
        font-size: 1.2rem;
    }

    /* Animations */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .page-container {
            padding: 1.5rem;
        }

        .complaint-card {
            padding: 2.5rem 2rem;
        }

        .form-title {
            font-size: 2rem;
        }

        .button-group {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 480px) {
        .complaint-card {
            padding: 2rem 1.5rem;
            border-radius: 20px;
        }

        .form-header {
            margin-bottom: 2.5rem;
        }

        .file-upload {
            min-height: 150px;
            padding: 2rem 1.5rem;
        }

        .form-title {
            font-size: 1.8rem;
        }
    }
</style>

<div class="page-container">
    <div class="complaint-card">
        <!-- Header -->
        <div class="form-header">
            <h1 class="form-title">Form Pengaduan</h1>
            <p class="form-subtitle">Sampaikan keluhan Anda dengan detail dan jelas untuk penanganan yang lebih cepat dan efektif</p>
        </div>

        <!-- Error Messages -->
        @if ($errors->any())
            <div class="error-container">
                <ul class="error-list">
                    @foreach($errors->all() as $error)
                        <li class="error-item">
                            <i class="fas fa-exclamation-circle"></i>
                            <span>{{ $error }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form -->
        <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label class="form-label" for="description">
                    <i class="fas fa-pen-alt mr-2"></i>
                    Deskripsi Pengaduan
                </label>
                <textarea
                    id="description"
                    name="description"
                    class="form-textarea"
                    placeholder="Deskripsikan masalah yang Anda alami secara detail (lokasi, waktu kejadian, dll)..."
                    required
                >{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label class="form-label" for="image">
                    <i class="fas fa-camera mr-2"></i>
                    Dokumentasi Pendukung
                </label>
                <div class="file-upload">
                    <input 
                        type="file"
                        id="image"
                        name="image"
                        accept="image/*"
                        required
                        style="display: none;"
                    >
                    <div class="upload-icon">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </div>
                    <div class="upload-text">
                        Klik atau seret foto dokumentasi ke sini
                        <small>Format yang didukung: JPG, PNG, JPEG (Maksimal 5MB)</small>
                    </div>
                    <div class="image-preview-container">
                        <div class="image-preview-wrapper">
                            <img class="image-preview" src="" alt="Preview">
                            <button type="button" class="remove-image">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="button-group">
                <a href="/" class="back-button">
                    <i class="fas fa-arrow-left"></i>
                    Kembali
                </a>
                <button type="submit" class="submit-button">
                    <i class="fas fa-paper-plane"></i>
                    Kirim Pengaduan
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    const fileInput = document.getElementById('image');
    const uploadText = document.querySelector('.upload-text');
    const uploadIcon = document.querySelector('.upload-icon i');
    const previewContainer = document.querySelector('.image-preview-container');
    const previewImage = document.querySelector('.image-preview');
    const removeButton = document.querySelector('.remove-image');
    const dropZone = document.querySelector('.file-upload');

    function showPreview(file) {
        if (file) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewContainer.style.display = 'block';
                uploadText.style.display = 'none';
                uploadIcon.style.display = 'none';
            }
            
            reader.readAsDataURL(file);
        }
    }

    function resetFileInput() {
        fileInput.value = '';
        previewContainer.style.display = 'none';
        uploadText.style.display = 'block';
        uploadIcon.style.display = 'block';
        uploadIcon.classList.remove('fa-check-circle');
        uploadIcon.classList.add('fa-cloud-upload-alt');
        uploadText.innerHTML = `
            Klik atau seret foto dokumentasi ke sini
            <small>Format yang didukung: JPG, PNG, JPEG (Maksimal 5MB)</small>
        `;
    }

    fileInput.addEventListener('change', function(e) {
        if (e.target.files.length > 0) {
            const file = e.target.files[0];
            showPreview(file);
        }
    });

    removeButton.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        resetFileInput();
    });

    dropZone.addEventListener('click', function() {
        fileInput.click();
    });

    // Drag and Drop Enhancement
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropZone.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    ['dragenter', 'dragover'].forEach(eventName => {
        dropZone.addEventListener(eventName, highlight, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        dropZone.addEventListener(eventName, unhighlight, false);
    });

    function highlight(e) {
        dropZone.classList.add('border-indigo-500');
    }

    function unhighlight(e) {
        dropZone.classList.remove('border-indigo-500');
    }

    dropZone.addEventListener('drop', handleDrop, false);

    function handleDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;
        
        if (files.length > 0) {
            fileInput.files = files;
            showPreview(files[0]);
        }
    }
</script>
@endsection