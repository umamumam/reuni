@extends('layouts.layout1')

@section('title', 'Tambah Galeri')

@section('content')
<div class="container">
    <h2>Tambah Galeri</h2>
    <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto" required>
        </div>

        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input type="number" class="form-control" id="tahun" name="tahun" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
