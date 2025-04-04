@extends('layouts.app')

@section('title', 'Daftar Galeri')

@section('content')
<div class="container mt-4">

    {{-- Alert Notifikasi Sukses --}}
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
            <h4 class="mb-3 text-primary fw-bold">
                <i class="fas fa-images me-2"></i>Daftar Galeri
            </h4>

            {{-- Filter Tahun --}}
            <div class="d-flex justify-content-between mb-3">
                <div>
                    <label for="filter-tahun" class="fw-bold me-2">Filter Tahun:</label>
                    <select id="filter-tahun" class="form-select d-inline-block w-auto">
                        <option value="">Semua Tahun</option>
                        @foreach($tahunList as $tahun)
                            <option value="{{ $tahun }}" {{ request('tahun') == $tahun ? 'selected' : '' }}>{{ $tahun }}</option>
                        @endforeach
                    </select>
                </div>
                <a href="{{ route('galeri.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-1"></i>Tambah Galeri
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-striped align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>Foto</th>
                            <th>Tahun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="galeri-table-body">
                        @foreach($galeris as $galeri)
                            <tr data-tahun="{{ $galeri->tahun }}">
                                <td>
                                    <img src="{{ asset('storage/' . $galeri->foto) }}" alt="Foto Galeri" class="rounded" width="100">
                                </td>
                                <td>{{ $galeri->tahun }}</td>
                                <td>
                                    <a href="{{ route('galeri.edit', $galeri) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm btn-delete" data-id="{{ $galeri->id }}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <form id="delete-form-{{ $galeri->id }}" action="{{ route('galeri.destroy', $galeri) }}" method="POST" class="d-none">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @if($galeris->isEmpty())
                <div class="text-center text-muted my-3">Belum ada galeri.</div>
            @endif
        </div>
    </div>
</div>

{{-- SweetAlert2 CDN & JavaScript --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Filter berdasarkan tahun
        document.getElementById("filter-tahun").addEventListener("change", function () {
            let selectedYear = this.value;
            document.querySelectorAll("#galeri-table-body tr").forEach(row => {
                if (selectedYear === "" || row.getAttribute("data-tahun") === selectedYear) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });

        // Konfirmasi hapus dengan SweetAlert2
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
    });
</script>
@endsection
