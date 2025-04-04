@extends('layouts.app')

@section('content')
<style>
    .action-buttons {
        display: flex;
        justify-content: center;
        gap: 8px;
    }
    .action-btn {
        padding: 6px 10px;
        white-space: nowrap;
    }
</style>
<div class="container">
    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="mb-4 text-primary fw-bold">
                <i class="fas fa-calendar-alt me-2"></i>Daftar Halal Bil Halal
            </h4>
            <div class="row mb-3 g-3 align-items-center justify-content-between">
                <div class="col-12 col-md-auto">
                    <a href="{{ route('halal_bil_halal.create') }}" class="btn btn-success px-3 w-100 w-md-auto">
                        <i class="fas fa-plus-circle me-1"></i> Tambah Acara
                    </a>
                </div>
            </div>

            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered align-middle text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Tanggal</th>
                            <th>Tempat</th>
                            <th>Ke</th>
                            <th>MC</th>
                            <th>Qori</th>
                            <th>Tahlil</th>
                            <th>Mauidhoh</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($halalBilHalals as $halalBilHalal)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ \Carbon\Carbon::parse($halalBilHalal->tanggal)->format('d M Y') }}</td>
                            <td>{{ $halalBilHalal->tempat }}</td>
                            <td>{{ $halalBilHalal->halal_bihalal_ke }}</td>
                            <td>{{ $halalBilHalal->mc }}</td>
                            <td>{{ $halalBilHalal->qori }}</td>
                            <td>{{ $halalBilHalal->tahlil }}</td>
                            <td>{{ $halalBilHalal->mauidhoh }}</td>
                            <td class="action-buttons">
                                <a href="{{ route('halal_bil_halal.edit', $halalBilHalal->id) }}" class="btn btn-warning btn-sm action-btn d-none d-md-inline">
                                    <i class="fas fa-edit me-1"></i>Edit
                                </a>
                                <a href="{{ route('halal_bil_halal.edit', $halalBilHalal->id) }}" class="btn btn-warning btn-sm action-btn d-md-none">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="{{ route('halal_bil_halal.cetak', $halalBilHalal->id) }}" class="btn btn-primary btn-sm action-btn d-none d-md-inline" target="_blank">
                                    <i class="fas fa-print me-1"></i>Cetak
                                </a>
                                <a href="{{ route('halal_bil_halal.cetak', $halalBilHalal->id) }}" class="btn btn-primary btn-sm action-btn d-md-none" target="_blank">
                                    <i class="fas fa-print"></i>
                                </a>
                                <form action="{{ route('halal_bil_halal.destroy', $halalBilHalal->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm action-btn d-none d-md-inline">
                                        <i class="fas fa-trash-alt me-1"></i>Delete
                                    </button>
                                    <button type="submit" class="btn btn-danger btn-sm action-btn d-md-none">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-muted">Tidak ada data ditemukan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
