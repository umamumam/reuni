@extends('layouts.layout1')

@section('title', 'Edit Galeri')

@section('content')
<div class="container">
    <h2>Edit Galeri</h2>
    <form action="{{ route('galeri.update', $galeri) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto">
            @if($galeri->foto)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $galeri->foto) }}" alt="Foto Galeri" width="100">
                </div>
            @endif
        </div>

        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input type="number" class="form-control" id="tahun" name="tahun" value="{{ old('tahun', $galeri->tahun) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
