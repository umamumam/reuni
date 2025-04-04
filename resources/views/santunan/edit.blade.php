@extends('layouts.layout1')

@section('title', 'Edit Santunan')

@section('content')
<div class="container">
    <h2>Edit Santunan</h2>
    <form action="{{ route('santunan.update', $santunan) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $santunan->nama) }}" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="dhuafa" {{ old('status', $santunan->status) == 'dhuafa' ? 'selected' : '' }}>Dhuafa</option>
                <option value="yatim" {{ old('status', $santunan->status) == 'yatim' ? 'selected' : '' }}>Yatim</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input type="number" class="form-control" id="tahun" name="tahun" value="{{ old('tahun', $santunan->tahun) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
