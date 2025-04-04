@extends('layouts.layout1')

@section('title', 'Daftar Galeri')

@section('content')
<div class="container">
    <h1>Galeri</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Menampilkan galeri berdasarkan tahun -->
    @php
        $currentYear = null;
    @endphp

    @foreach($galeris as $galeri)
        <!-- Cek apakah tahun sekarang berbeda dengan tahun sebelumnya -->
        @if($galeri->tahun != $currentYear)
            @if($currentYear)
                </div> <!-- Tutup row jika tahun berbeda -->
            @endif
            <!-- Menampilkan tahun baru -->
            <h3 class="mt-4">Tahun: {{ $galeri->tahun }}</h3>
            <div class="row">
            @php
                $currentYear = $galeri->tahun;
            @endphp
        @endif
        
        <!-- Tampilkan Card untuk setiap foto -->
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="{{ asset('storage/' . $galeri->foto) }}" class="card-img-top" alt="Foto Galeri">
                <div class="card-body">
                    <p class="card-text">Tahun: {{ $galeri->tahun }}</p>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Menutup row terakhir jika ada -->
    </div>
</div>
@endsection
