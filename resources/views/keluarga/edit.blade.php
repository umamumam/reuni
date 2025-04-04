@extends('layouts.layout1')

@section('content')
    <div class="container">
        <h2>Edit Keluarga: {{ $keluarga->nama }}</h2>
        <form action="{{ route('keluarga.update', $keluarga->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $keluarga->nama) }}" required>
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
                <div class="mt-2">
                    @if($keluarga->foto)
                        <img id="preview" src="{{ asset('storage/' . $keluarga->foto) }}" width="150" alt="Foto Keluarga">
                    @else
                        <img id="preview" src="#" width="150" style="display: none;" alt="Preview Foto">
                    @endif
                </div>
            </div>

            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir', $keluarga->tanggal_lahir) }}" required>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required>{{ old('alamat', $keluarga->alamat) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="status_keluarga_id" class="form-label">Status Keluarga</label>
                <select class="form-control" id="status_keluarga_id" name="status_keluarga_id" required>
                    @foreach($statuses as $status)
                        <option value="{{ $status->id }}" {{ $keluarga->status_keluarga_id == $status->id ? 'selected' : '' }}>{{ $status->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="anak_ke" class="form-label">Anak Ke-</label>
                <input type="number" class="form-control" id="anak_ke" name="anak_ke" min="1" value="{{ old('anak_ke', $keluarga->anak_ke) }}" required>
            </div>

            <div class="mb-3">
                <label for="keluarga_id" class="form-label">Orang Tua</label>
                <select class="form-control" id="keluarga_id" name="keluarga_id">
                    <option value="">Pilih Orang Tua (Jika ada)</option>
                    @foreach($keluargas as $keluargaOption)
                        <option value="{{ $keluargaOption->id }}" {{ $keluarga->keluarga_id == $keluargaOption->id ? 'selected' : '' }}>
                            {{ $keluargaOption->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="hidup" {{ $keluarga->status == 'hidup' ? 'selected' : '' }}>Hidup</option>
                    <option value="meninggal" {{ $keluarga->status == 'meninggal' ? 'selected' : '' }}>Meninggal</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="pasangan_id" class="form-label">Pasangan</label>
                <select class="form-control" id="pasangan_id" name="pasangan_id">
                    <option value="">Pilih Pasangan (Jika ada)</option>
                    @foreach($keluargas as $keluargaOption)
                        @if ($keluargaOption->id !== $keluarga->id) {{-- Hindari memilih dirinya sendiri --}}
                            <option value="{{ $keluargaOption->id }}" {{ $keluarga->pasangan_id == $keluargaOption->id ? 'selected' : '' }}>
                                {{ $keluargaOption->nama }}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>            

            <div class="mb-3" id="tanggal_meninggal_container">
                <label for="tanggal_meninggal" class="form-label">Tanggal Meninggal</label>
                <input type="date" class="form-control" id="tanggal_meninggal" name="tanggal_meninggal" value="{{ old('tanggal_meninggal', $keluarga->tanggal_meninggal) }}">
            </div>

            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>

    <script>
        document.getElementById('foto').addEventListener('change', function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('preview');
                output.style.display = 'block';
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        });

        document.getElementById('status').addEventListener('change', function() {
            var status = this.value;
            var tanggalMeninggalContainer = document.getElementById('tanggal_meninggal_container');
            var tanggalMeninggalField = document.getElementById('tanggal_meninggal');

            if (status === 'meninggal') {
                tanggalMeninggalContainer.style.display = 'block';
            } else {
                tanggalMeninggalContainer.style.display = 'none';
                tanggalMeninggalField.value = ''; // Reset jika bukan meninggal
            }
        });

        // Jalankan saat halaman dimuat
        window.onload = function() {
            document.getElementById('status').dispatchEvent(new Event('change'));
        };
    </script>
@endsection
