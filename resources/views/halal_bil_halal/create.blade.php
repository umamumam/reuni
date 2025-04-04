@extends('layouts.layout1')

@section('title', 'Tambah Halal Bil Halal')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">Tambah Halal Bil Halal</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('halal_bil_halal.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="halal_bihalal_ke" class="form-label">Halal Bihalal Ke</label>
                                <input type="number" class="form-control" id="halal_bihalal_ke" name="halal_bihalal_ke" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="tempat" class="form-label">Tempat</label>
                            <input type="text" class="form-control" id="tempat" name="tempat" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="mc" class="form-label">MC</label>
                                <input type="text" class="form-control" id="mc" name="mc">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="qori" class="form-label">Qori</label>
                                <input type="text" class="form-control" id="qori" name="qori">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="tahlil" class="form-label">Tahlil</label>
                                <input type="text" class="form-control" id="tahlil" name="tahlil">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="mauidhoh" class="form-label">Mauidhoh</label>
                                <input type="text" class="form-control" id="mauidhoh" name="mauidhoh">
                            </div>
                        </div>
                        <hr>

                        <h5 class="text-primary">Sambutan</h5>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="sambutan_panitia" class="form-label">Panitia</label>
                                <input type="text" class="form-control" id="sambutan_panitia" name="sambutan_panitia">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="sambutan_tuan_rumah" class="form-label">Tuan Rumah</label>
                                <input type="text" class="form-control" id="sambutan_tuan_rumah" name="sambutan_tuan_rumah">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="sambutan_bendahara" class="form-label">Bendahara</label>
                                <input type="text" class="form-control" id="sambutan_bendahara" name="sambutan_bendahara">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('halal_bil_halal.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
