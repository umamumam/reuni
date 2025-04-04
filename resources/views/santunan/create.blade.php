@extends('layouts.layout1')

@section('title', 'Tambah Santunan')

@section('content')
<div class="container">
    <h2>Tambah Santunan</h2>
    <form action="{{ route('santunan.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="dhuafa">Dhuafa</option>
                <option value="yatim">Yatim</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input type="number" class="form-control" id="tahun" name="tahun" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
