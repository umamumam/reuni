@extends('layouts.layout1')

@section('content')
    <div class="container">
        <h2>Edit Status Keluarga</h2>
        
        <form action="{{ route('status_keluarga.update', $statusKeluarga->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $statusKeluarga->nama }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
@endsection
