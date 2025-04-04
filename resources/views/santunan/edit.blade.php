@extends('layouts.app')

@section('title', 'Edit Santunan')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="mb-3 text-primary fw-bold">
                <i class="fas fa-edit me-2"></i>Edit Santunan
            </h4>
            <form action="{{ route('santunan.update', $santunan) }}" method="POST" class="needs-validation" novalidate>
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama" class="form-label fw-semibold">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $santunan->nama) }}" required>
                    <div class="invalid-feedback">Nama wajib diisi.</div>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label fw-semibold">Status</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="dhuafa" {{ old('status', $santunan->status) == 'dhuafa' ? 'selected' : '' }}>Dhuafa</option>
                        <option value="yatim" {{ old('status', $santunan->status) == 'yatim' ? 'selected' : '' }}>Yatim</option>
                    </select>
                    <div class="invalid-feedback">Silakan pilih status.</div>
                </div>

                <div class="mb-3">
                    <label for="tahun" class="form-label fw-semibold">Tahun</label>
                    <input type="number" class="form-control" id="tahun" name="tahun" value="{{ old('tahun', $santunan->tahun) }}" required>
                    <div class="invalid-feedback">Tahun wajib diisi dan harus valid.</div>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('santunan.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left me-1"></i>Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-1"></i>Update
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
