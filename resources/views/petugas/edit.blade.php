@extends('layouts.layout1')

@section('title', 'Edit Petugas')

@section('content')
<div class="container">
    <h2>Edit Petugas</h2>
    @if($petugas)
    <form action="{{ route('petugas.update', $petugas->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="halal_bihalal_id" class="form-label">Halal Bihalal</label>
            <select class="form-control" id="halal_bihalal_id" name="halal_bihalal_id" required>
                @foreach($halalBilHalals as $halalBilHalal)
                    <option value="{{ $halalBilHalal->id }}" {{ $petugas->halal_bihalal_id == $halalBilHalal->id ? 'selected' : '' }}>
                        {{ $halalBilHalal->tempat }} (Ke-{{ $halalBilHalal->halal_bihalal_ke }})
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="mc" class="form-label">MC</label>
            <input type="text" class="form-control" id="mc" name="mc" value="{{ $petugas->mc }}">
        </div>

        <div class="mb-3">
            <label for="qori" class="form-label">Qori</label>
            <input type="text" class="form-control" id="qori" name="qori" value="{{ $petugas->qori }}">
        </div>

        <div class="mb-3">
            <label for="tahlil" class="form-label">Tahlil</label>
            <input type="text" class="form-control" id="tahlil" name="tahlil" value="{{ $petugas->tahlil }}">
        </div>

        <div class="mb-3">
            <label for="sambutan_panitia" class="form-label">Sambutan Panitia</label>
            <input type="text" class="form-control" id="sambutan_panitia" name="sambutan_panitia" value="{{ $petugas->sambutan_panitia }}">
        </div>

        <div class="mb-3">
            <label for="sambutan_tuan_rumah" class="form-label">Sambutan Tuan Rumah</label>
            <input type="text" class="form-control" id="sambutan_tuan_rumah" name="sambutan_tuan_rumah" value="{{ $petugas->sambutan_tuan_rumah }}">
        </div>

        <div class="mb-3">
            <label for="sambutan_bendahara" class="form-label">Sambutan Bendahara</label>
            <input type="text" class="form-control" id="sambutan_bendahara" name="sambutan_bendahara" value="{{ $petugas->sambutan_bendahara }}">
        </div>

        <div class="mb-3">
            <label for="mauidhoh" class="form-label">Mauidhoh</label>
            <input type="text" class="form-control" id="mauidhoh" name="mauidhoh" value="{{ $petugas->mauidhoh }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    @else
        <p>Petugas tidak ditemukan.</p>
    @endif
</div>
@endsection
