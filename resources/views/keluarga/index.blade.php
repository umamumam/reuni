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
    @if(session('success'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: "success",
                    title: "Berhasil!",
                    text: "{{ session('success') }}",
                    showConfirmButton: false,
                    timer: 3000
                });
            });
        </script>
    @endif
    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="mb-4 text-primary fw-bold">
                <i class="fas fa-users me-2"></i>Daftar Keluarga
            </h4>
            <div class="row mb-3 g-3 align-items-center justify-content-between">
                {{-- Tombol Tambah --}}
                <div class="col-12 col-md-auto">
                    <a href="{{ route('keluarga.create') }}" class="btn btn-success px-3 w-100 w-md-auto">
                        <i class="fas fa-plus-circle me-1"></i> Tambah Keluarga
                    </a>
                </div>

                {{-- Search Form --}}
                <div class="col-12 col-md-auto">
                    <form method="GET" action="{{ route('keluarga.index') }}" class="d-flex justify-content-md-end">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Cari nama..."
                                value="{{ request('search') }}" style="max-width: 250px;">
                            <button class="btn btn-outline-primary" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- Alert --}}
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            {{-- Tabel --}}
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered align-middle text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Foto</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Orang Tua</th>
                            <th>Pasangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($keluargas as $keluarga)
                        <tr>
                            <td>{{ $loop->iteration + ($keluargas->currentPage() - 1) * $keluargas->perPage() }}</td>
                            <td>{{ $keluarga->nama }}</td>
                            <td>
                                @if($keluarga->foto)
                                <img src="{{ asset('storage/' . $keluarga->foto) }}" width="50" class="img-thumbnail"
                                    alt="Foto">
                                @else
                                <span class="text-muted">Tidak Ada</span>
                                @endif
                            </td>
                            <td>{{ $keluarga->alamat }}</td>
                            <td>{{ $keluarga->status }}</td>
                            <td>{{ $keluarga->orangTua ? $keluarga->orangTua->nama : '-' }}</td>
                            <td>{{ $keluarga->pasangan ? $keluarga->pasangan->nama : '-' }}</td>
                            <td class="action-buttons">
                                {{-- Tombol Edit --}}
                                <a href="{{ route('keluarga.edit', $keluarga->id) }}"
                                    class="btn btn-warning btn-sm action-btn d-none d-md-inline">
                                    <i class="fas fa-edit me-1"></i>Edit
                                </a>
                                <a href="{{ route('keluarga.edit', $keluarga->id) }}"
                                    class="btn btn-warning btn-sm action-btn d-md-none">
                                    <i class="fas fa-edit"></i>
                                </a>

                                {{-- Tombol Delete --}}
                                <button type="button" class="btn btn-danger btn-sm action-btn btn-delete"
                                    data-id="{{ $keluarga->id }}">
                                    <i class="fas fa-trash-alt me-1"></i> <span class="d-none d-md-inline">Hapus</span>
                                </button>

                                <form id="delete-form-{{ $keluarga->id }}"
                                    action="{{ route('keluarga.destroy', $keluarga->id) }}" method="POST"
                                    class="d-none">
                                    @csrf
                                    @method('DELETE')
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

            {{-- Pagination --}}
            <div class="mt-4">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center flex-wrap">
                        {!! $keluargas->onEachSide(2)->links('pagination::bootstrap-5') !!}
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</div>
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
