@extends('layouts.app')

@section('title', 'Tambah Santunan')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="mb-3 text-primary fw-bold">
                <i class="fas fa-hand-holding-heart me-2"></i>Tambah Santunan
            </h4>
            <form action="{{ route('santunan.store') }}" method="POST" class="needs-validation" novalidate>
                @csrf

                <div class="mb-3">
                    <label for="nama" class="form-label fw-semibold">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                    <div class="invalid-feedback">Nama wajib diisi.</div>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label fw-semibold">Status</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="" selected disabled>Pilih status...</option>
                        <option value="dhuafa">Dhuafa</option>
                        <option value="yatim">Yatim</option>
                    </select>
                    <div class="invalid-feedback">Silakan pilih status.</div>
                </div>

                <div class="mb-3">
                    <label for="tahun" class="form-label fw-semibold">Tahun</label>
                    <input type="number" class="form-control" id="tahun" name="tahun" min="1900" max="{{ date('Y') }}" required>
                    <div class="invalid-feedback">Tahun wajib diisi dan harus valid.</div>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('santunan.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left me-1"></i>Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-1"></i>Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Validasi Bootstrap --}}
<script>
    (function () {
        'use strict';
        var forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>
@endsection
