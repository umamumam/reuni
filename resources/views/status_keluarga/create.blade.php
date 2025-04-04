@extends('layouts.layout1')

@section('content')
    <div class="container">
        <h2>Tambah Status Keluarga</h2>
        
        <form action="{{ route('status_keluarga.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
