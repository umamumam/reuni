@extends('layouts.layout1')

@section('content')
    <div class="container">
        <h2>Tambah Keluarga</h2>
        <form action="{{ route('keluarga.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto" onchange="previewImage(event)">
                <div id="fotoPreview" class="mt-3">
                    <img id="preview" src="#" alt="Preview Foto" style="display: none; width: 150px;">
                    <button type="button" class="btn btn-danger btn-sm mt-2" onclick="resetImage()" style="display: none;" id="resetFoto">Hapus Foto</button>
                </div>
            </div>

            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="status_keluarga_id" class="form-label">Status Keluarga</label>
                <select class="form-control" id="status_keluarga_id" name="status_keluarga_id" required>
                    @foreach($statuses as $status)
                        <option value="{{ $status->id }}">{{ $status->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="anak_ke" class="form-label">Anak Ke-</label>
                <input type="number" class="form-control" id="anak_ke" name="anak_ke" required>
            </div>

            <div class="mb-3">
                <label for="keluarga_id" class="form-label">Orang Tua</label>
                <select class="form-control" id="keluarga_id" name="keluarga_id">
                    <option value="">Pilih Orang Tua (Jika ada)</option>
                    @foreach($keluargas as $keluarga)
                        <option value="{{ $keluarga->id }}">{{ $keluarga->nama }}</option>
                    @endforeach
                </select>
            </div>

            {{-- Tambahkan Pilihan Pasangan --}}
            <div class="mb-3">
                <label for="pasangan_id" class="form-label">Pasangan</label>
                <select class="form-control" id="pasangan_id" name="pasangan_id">
                    <option value="">Pilih Pasangan (Jika ada)</option>
                    @foreach($keluargas as $keluarga)
                        <option value="{{ $keluarga->id }}">{{ $keluarga->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" name="status" required onchange="toggleTanggalMeninggal()">
                    <option value="hidup">Hidup</option>
                    <option value="meninggal">Meninggal</option>
                </select>
            </div>

            {{-- Tanggal meninggal akan otomatis disembunyikan jika status masih hidup --}}
            <div class="mb-3" id="tanggal_meninggal_container" style="display: none;">
                <label for="tanggal_meninggal" class="form-label">Tanggal Meninggal</label>
                <input type="date" class="form-control" id="tanggal_meninggal" name="tanggal_meninggal">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    {{-- SCRIPT UNTUK PREVIEW FOTO DAN STATUS --}}
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('preview');
                output.style.display = 'block';
                output.src = reader.result;
                document.getElementById('resetFoto').style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        function resetImage() {
            document.getElementById('foto').value = "";
            document.getElementById('preview').style.display = 'none';
            document.getElementById('resetFoto').style.display = 'none';
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
