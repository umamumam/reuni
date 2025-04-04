@extends('layouts.app')

@section('content')
<style>
    .action-buttons {
        display: flex;
        justify-content: center;
        gap: 4px;
        flex-wrap: wrap;
    }
    .action-btn {
        padding: 4px 8px;
        white-space: nowrap;
    }
    .table td:last-child, .table th:last-child {
        width: 170px;
    }
    @media (max-width: 576px) {
        .action-btn span {
            display: none;
        }
    }
</style>
<div class="container">
    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="mb-4 text-primary fw-bold">
                <i class="fas fa-hand-holding-heart me-2"></i>Daftar Santunan
            </h4>
            <div class="row mb-3 g-3 align-items-center justify-content-between">
                <div class="col-12 col-md-auto">
                    <a href="{{ route('santunan.create') }}" class="btn btn-success px-3 w-100 w-md-auto">
                        <i class="fas fa-plus-circle me-1"></i> <span>Tambah Santunan</span>
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
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Tahun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($santunans as $santunan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $santunan->nama }}</td>
                            <td>{{ $santunan->status }}</td>
                            <td>{{ $santunan->tahun }}</td>
                            <td class="action-buttons">
                                <a href="{{ route('santunan.edit', $santunan->id) }}" class="btn btn-warning btn-sm action-btn">
                                    <i class="fas fa-edit"></i> <span>Edit</span>
                                </a>
                                <button class="btn btn-danger btn-sm action-btn btn-delete" data-id="{{ $santunan->id }}">
                                    <i class="fas fa-trash-alt"></i> <span>Hapus</span>
                                </button>
                                <form id="delete-form-{{ $santunan->id }}" action="{{ route('santunan.destroy', $santunan->id) }}" method="POST" class="d-none">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-muted">Tidak ada data ditemukan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- SweetAlert Konfirmasi Hapus --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.querySelectorAll('.btn-delete').forEach(button => {
        button.addEventListener('click', function() {
            let id = this.getAttribute('data-id');
            Swal.fire({
                title: "Apakah Anda yakin?",
                text: "Data yang dihapus tidak bisa dikembalikan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`delete-form-${id}`).submit();
                }
            });
        });
    });
</script>
@endsection
