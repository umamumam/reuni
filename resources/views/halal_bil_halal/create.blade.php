@extends('layouts.layout1')

@section('title', 'Tambah Halal Bil Halal')

@section('content')
<div class="container">
    <h2>Tambah Halal Bil Halal</h2>
    <form action="{{ route('halal_bil_halal.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
        </div>

        <div class="mb-3">
            <label for="tempat" class="form-label">Tempat</label>
            <input type="text" class="form-control" id="tempat" name="tempat" required>
        </div>

        <div class="mb-3">
            <label for="halal_bihalal_ke" class="form-label">Halal Bihalal Ke</label>
            <input type="number" class="form-control" id="halal_bihalal_ke" name="halal_bihalal_ke" required>
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
