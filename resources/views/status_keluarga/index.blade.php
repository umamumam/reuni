@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Tampilkan pesan sukses jika ada -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fas fa-check-circle"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <!-- Card Container -->
    <div class="card shadow-sm">
        <div class="card-header bg-primary">
            <h4 class="mb-0 text-white"><i class="fas fa-users me-2"></i>Daftar Status Keluarga</h4>
        </div>

        <div class="card-body">
            <!-- Tombol Tambah -->
            <div class="mb-3 mt-3">
                <a href="{{ route('status_keluarga.create') }}" class="btn btn-success">
                    <i class="fas fa-plus-circle"></i> &nbsp;Tambah Status
                </a>
            </div>

            <!-- Tabel -->
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered align-middle">
                    <thead class="table-primary text-center">
                        <tr>
                            <th style="width: 5%;">#</th>
                            <th style="width: 60%;">Nama</th>
                            <th style="width: 35%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($statuses as $status)
                        <tr>
                            <td class="text-center fw-bold">{{ $loop->iteration }}</td>
                            <td>{{ $status->nama }}</td>
                            <td class="text-center">
                                <!-- Tombol Edit -->
                                <a href="{{ route('status_keluarga.edit', $status->id) }}"
                                    class="btn btn-warning btn-sm d-inline-flex align-items-center action-btn">
                                    <i class="fas fa-edit"></i> <span class="d-none d-md-inline"> Edit</span>
                                </a>

                                <!-- Tombol Delete -->
                                <form action="{{ route('status_keluarga.destroy', $status->id) }}" method="POST"
                                    class="d-inline"
                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus status ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="btn btn-danger btn-sm d-inline-flex align-items-center action-btn">
                                        <i class="fas fa-trash-alt"></i> <span class="d-none d-md-inline"> Hapus</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- CSS Responsive untuk tombol -->
<style>
    @media (max-width: 768px) {
        .action-btn span {
            display: none !important;
        }
    }
</style>
@endsection
