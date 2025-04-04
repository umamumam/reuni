@extends('layouts.awal')

@section('title', 'Daftar Galeri')
@section('hero-title', 'Daftar Galeri')
@section('breadcrumb', 'Daftar Galeri')

@section('content')
<div class="container mt-4">
    <h1 class="text-center text-primary fw-bold">Galeri</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Filter Tahun -->
    <div class="text-center mb-4">
        <label for="filter-tahun" class="fw-bold me-2">Pilih Tahun:</label>
        <select id="filter-tahun" class="form-select d-inline-block w-auto">
            <option value="all">Semua</option>
            @foreach($galeris->pluck('tahun')->unique()->sortDesc() as $tahun)
                <option value="year-{{ $tahun }}">{{ $tahun }}</option>
            @endforeach
        </select>
    </div>

    @php
        $currentYear = null;
        $counter = 0;
    @endphp

    @foreach($galeris as $index => $galeri)
        @if($galeri->tahun != $currentYear)
            @if($currentYear !== null)
                </div> <!-- Tutup row sebelumnya -->
                @if($counter > 8)
                    <div class="text-center mt-2">
                        <button class="btn btn-primary btn-sm more-btn" data-target="year-{{ $currentYear }}">More Galeri</button>
                    </div>
                @endif
            @endif
            <h3 class="mt-5 fw-bold text-secondary year-heading" data-year="year-{{ $galeri->tahun }}">Tahun: {{ $galeri->tahun }}</h3>
            <div class="row g-3 year-group" id="year-{{ $galeri->tahun }}">
            @php
                $currentYear = $galeri->tahun;
                $counter = 0;
            @endphp
        @endif

        <div class="col-md-3 gallery-item {{ $counter >= 8 ? 'd-none' : '' }}">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('storage/' . $galeri->foto) }}" class="card-img-top" alt="Foto Galeri">
                <div class="card-body text-center">
                    <p class="card-text text-muted">Tahun: {{ $galeri->tahun }}</p>
                </div>
            </div>
        </div>

        @php $counter++; @endphp
    @endforeach

    @if($counter > 8)
        </div>
        <div class="text-center mt-2">
            <button class="btn btn-primary btn-sm more-btn" data-target="year-{{ $currentYear }}">More Galeri</button>
        </div>
    @endif

</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Fungsi untuk tombol "More Galeri"
        document.querySelectorAll('.more-btn').forEach(button => {
            button.addEventListener('click', function () {
                let target = document.getElementById(this.getAttribute('data-target'));
                target.querySelectorAll('.gallery-item.d-none').forEach(item => {
                    item.classList.remove('d-none');
                });
                this.remove();
            });
        });

        // Filter Tahun
        document.getElementById('filter-tahun').addEventListener('change', function () {
            let selectedYear = this.value;

            document.querySelectorAll('.year-group').forEach(group => {
                if (selectedYear === 'all' || group.id === selectedYear) {
                    group.style.display = 'flex';
                    group.previousElementSibling.style.display = 'block'; // Menampilkan judul tahun
                } else {
                    group.style.display = 'none';
                    group.previousElementSibling.style.display = 'none';
                }
            });
        });
    });
</script>
@endsection
