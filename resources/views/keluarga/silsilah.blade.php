@extends('layouts.layout1')

@section('title', 'Silsilah Keluarga')
@section('hero-title', 'Silsilah Keluarga')
@section('breadcrumb', 'Silsilah Keluarga')

@section('content')
<div class="container text-center">
    <h2 class="mb-4">Silsilah Keluarga</h2>
    {{-- <div class="d-flex flex-row flex-wrap justify-content-center overflow-auto"> --}}
        <div class="mb-3 d-flex justify-content-center gap-2 flex-wrap">
            <a href="{{ url('/') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
            <a href="{{ url('/keluarga/create') }}" class="btn btn-success">
                <i class="bi bi-plus-lg"></i> Tambah
            </a>
            <a href="{{ route('silsilah.export.pdf') }}" class="btn btn-danger">
                <i class="bi bi-file-earmark-pdf"></i> Export PDF
            </a>
        </div>
        <div class="d-flex flex-column align-items-center">
        @forelse($indukKeluarga as $keluarga)
            @include('keluarga._tree', ['anggota' => $keluarga])
        @empty
            <p class="text-muted">Belum ada data silsilah keluarga yang dimulai dari akar (induk keluarga).</p>
        @endforelse
    </div>
</div>
@endsection
