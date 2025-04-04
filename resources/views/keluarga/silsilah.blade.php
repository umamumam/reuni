@extends('layouts.layout1')

@section('content')
<div class="container text-center">
    <h2 class="mb-4">Silsilah Keluarga</h2>
    
    {{-- Menampilkan seluruh keluarga yang tidak punya orang tua --}}
    <div class="d-flex flex-column align-items-center">
        @forelse($indukKeluarga as $keluarga)
            @include('keluarga._tree', ['anggota' => $keluarga])
        @empty
            <p class="text-muted">Belum ada data silsilah keluarga yang dimulai dari akar (induk keluarga).</p>
        @endforelse
    </div>
</div>
@endsection
