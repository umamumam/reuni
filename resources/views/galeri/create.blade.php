@extends('layouts.app')

@section('title', 'Tambah Galeri')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="text-primary fw-bold mb-3">
                <i class="fas fa-images me-2"></i>Tambah Galeri
            </h4>
            <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="foto" class="form-label fw-bold">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto" accept="image/*" required onchange="previewImage(event)">
                    <div class="mt-2 text-center">
                        <img id="preview" src="#" alt="Preview" class="img-thumbnail d-none" style="max-width: 200px;">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="tahun" class="form-label fw-bold">Tahun</label>
                    <input type="number" class="form-control" id="tahun" name="tahun" placeholder="Masukkan tahun..." required>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save me-1"></i>Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function previewImage(event) {
        const preview = document.getElementById('preview');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function() {
                preview.src = reader.result;
                preview.classList.remove('d-none');
            };
            reader.readAsDataURL(file);
        } else {
            preview.src = '#';
            preview.classList.add('d-none');
        }
    }
</script>
@endsection
