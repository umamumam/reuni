@extends('layouts.layout1')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Tambah Keluarga</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('keluarga.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <!-- Nama -->
                        <div class="col-md-6 mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>

                        <!-- Tanggal Lahir -->
                        <div class="col-md-6 mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Status Keluarga -->
                        <div class="col-md-6 mb-3">
                            <label for="status_keluarga_id" class="form-label">Status Keluarga</label>
                            <select class="form-select" id="status_keluarga_id" name="status_keluarga_id" required>
                                @foreach($statuses as $status)
                                    <option value="{{ $status->id }}">{{ $status->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Anak Ke -->
                        <div class="col-md-6 mb-3">
                            <label for="anak_ke" class="form-label">Anak Ke-</label>
                            <input type="number" class="form-control" id="anak_ke" name="anak_ke" required>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Orang Tua -->
                        <div class="col-md-6 mb-3">
                            <label for="keluarga_id" class="form-label">Orang Tua</label>
                            <select class="form-select" id="keluarga_id" name="keluarga_id">
                                <option value="">Pilih Orang Tua (Jika ada)</option>
                                @foreach($keluargas as $keluarga)
                                    <option value="{{ $keluarga->id }}">{{ $keluarga->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Pasangan -->
                        <div class="col-md-6 mb-3">
                            <label for="pasangan_id" class="form-label">Pasangan</label>
                            <select class="form-select" id="pasangan_id" name="pasangan_id">
                                <option value="">Pilih Pasangan (Jika ada)</option>
                                @foreach($keluargas as $keluarga)
                                    <option value="{{ $keluarga->id }}">{{ $keluarga->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Alamat -->
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                    </div>

                    <div class="row">
                        <!-- Status Hidup/Meninggal -->
                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status" required onchange="toggleTanggalMeninggal()">
                                <option value="hidup">Hidup</option>
                                <option value="meninggal">Meninggal</option>
                            </select>
                        </div>

                        <!-- Tanggal Meninggal -->
                        <div class="col-md-6 mb-3" id="tanggal_meninggal_container" style="display: none;">
                            <label for="tanggal_meninggal" class="form-label">Tanggal Meninggal</label>
                            <input type="date" class="form-control" id="tanggal_meninggal" name="tanggal_meninggal">
                        </div>
                    </div>

                    <!-- Upload Foto -->
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto" onchange="previewImage(event)">
                        <div id="fotoPreview" class="mt-3 text-center">
                            <img id="preview" src="#" alt="Preview Foto" class="img-thumbnail d-none" width="150">
                            <button type="button" class="btn btn-danger btn-sm mt-2 d-none" id="resetFoto" onclick="resetImage()">Hapus Foto</button>
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save me-1"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- SCRIPT UNTUK PREVIEW FOTO DAN STATUS --}}
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById('preview');
                output.src = reader.result;
                output.classList.remove('d-none');
                document.getElementById('resetFoto').classList.remove('d-none');
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        function resetImage() {
            document.getElementById('foto').value = "";
            document.getElementById('preview').classList.add('d-none');
            document.getElementById('resetFoto').classList.add('d-none');
        }

        function toggleTanggalMeninggal() {
            var status = document.getElementById('status').value;
            var tanggalMeninggalContainer = document.getElementById('tanggal_meninggal_container');

            if (status === "meninggal") {
                tanggalMeninggalContainer.style.display = 'block';
            } else {
                tanggalMeninggalContainer.style.display = 'none';
                document.getElementById('tanggal_meninggal').value = "";
            }
        }
    </script>
@endsection
