@extends('layouts.app')

@section('title', 'Tambah Halal Bil Halal')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="mb-3 text-primary fw-bold">
                <i class="fas fa-handshake me-2"></i>Tambah Halal Bil Halal
            </h4>
            <form action="{{ route('halal_bil_halal.store') }}" method="POST" class="needs-validation" novalidate>
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="tanggal" class="form-label fw-semibold">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                        <div class="invalid-feedback">Tanggal wajib diisi.</div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="halal_bihalal_ke" class="form-label fw-semibold">Halal Bihalal Ke</label>
                        <input type="number" class="form-control" id="halal_bihalal_ke" name="halal_bihalal_ke" required>
                        <div class="invalid-feedback">Nomor wajib diisi.</div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="tempat" class="form-label fw-semibold">Tempat</label>
                    <input type="text" class="form-control" id="tempat" name="tempat" required>
                    <div class="invalid-feedback">Tempat wajib diisi.</div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="mc" class="form-label fw-semibold">MC</label>
                        <input type="text" class="form-control" id="mc" name="mc">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="qori" class="form-label fw-semibold">Qori</label>
                        <input type="text" class="form-control" id="qori" name="qori">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="tahlil" class="form-label fw-semibold">Tahlil</label>
                        <input type="text" class="form-control" id="tahlil" name="tahlil">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="mauidhoh" class="form-label fw-semibold">Mauidhoh</label>
                        <input type="text" class="form-control" id="mauidhoh" name="mauidhoh">
                    </div>
                </div>

                <hr>

                <h5 class="text-primary">Sambutan</h5>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="sambutan_panitia" class="form-label fw-semibold">Panitia</label>
                        <input type="text" class="form-control" id="sambutan_panitia" name="sambutan_panitia">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="sambutan_tuan_rumah" class="form-label fw-semibold">Tuan Rumah</label>
                        <input type="text" class="form-control" id="sambutan_tuan_rumah" name="sambutan_tuan_rumah">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="sambutan_bendahara" class="form-label fw-semibold">Bendahara</label>
                        <input type="text" class="form-control" id="sambutan_bendahara" name="sambutan_bendahara">
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="{{ route('halal_bil_halal.index') }}" class="btn btn-secondary">
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
