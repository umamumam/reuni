@extends('layouts.layout1')

@section('title', 'Tambah Petugas')

@section('content')
<div class="container">
    <h2>Tambah Petugas</h2>
    <form action="{{ route('petugas.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="halal_bihalal_id" class="form-label">Halal Bihalal</label>
            <select class="form-control" id="halal_bihalal_id" name="halal_bihalal_id" required>
                @foreach($halalBilHalals as $halalBilHalal)
                    <option value="{{ $halalBilHalal->id }}">{{ $halalBilHalal->tempat }} (Ke-{{ $halalBilHalal->halal_bihalal_ke }})</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="mc" class="form-label">MC</label>
            <input type="text" class="form-control" id="mc" name="mc">
        </div>

        <div class="mb-3">
            <label for="qori" class="form-label">Qori</label>
            <input type="text" class="form-control" id="qori" name="qori">
        </div>

        <div class="mb-3">
            <label for="tahlil" class="form-label">Tahlil</label>
            <input type="text" class="form-control" id="tahlil" name="tahlil">
        </div>

        <div class="mb-3">
            <label for="sambutan_panitia" class="form-label">Sambutan Panitia</label>
            <input type="text" class="form-control" id="sambutan_panitia" name="sambutan_panitia">
        </div>

        <div class="mb-3">
            <label for="sambutan_tuan_rumah" class="form-label">Sambutan Tuan Rumah</label>
            <input type="text" class="form-control" id="sambutan_tuan_rumah" name="sambutan_tuan_rumah">
        </div>

        <div class="mb-3">
            <label for="sambutan_bendahara" class="form-label">Sambutan Bendahara</label>
            <input type="text" class="form-control" id="sambutan_bendahara" name="sambutan_bendahara">
        </div>

        <div class="mb-3">
            <label for="mauidhoh" class="form-label">Mauidhoh</label>
            <input type="text" class="form-control" id="mauidhoh" name="mauidhoh">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
