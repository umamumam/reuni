@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="mb-4 text-primary fw-bold"><i class="fas fa-edit me-2"></i>Edit Status Keluarga</h4>
            <form action="{{ route('status_keluarga.update', $statusKeluarga->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $statusKeluarga->nama }}" required>
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save me-1"></i> Perbarui
                </button>
                <a href="{{ route('status_keluarga.index') }}" class="btn btn-secondary ms-2">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
