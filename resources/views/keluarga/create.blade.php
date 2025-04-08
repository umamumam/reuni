@extends('layouts.awal')
@section('title', 'Tambah Keluarga')
@section('hero-title', 'Tambah Keluarga')
@section('breadcrumb', 'Tambah Keluarga')
@section('content')
<style>
    label.required::after {
        content: " *";
        color: red;
    }
</style>

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
                            <label for="nama" class="form-label required" >Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>

                        <!-- Tanggal Lahir -->
                        <div class="col-md-6 mb-3">
                            <label for="tanggal_lahir" class="form-label required">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Status Keluarga -->
                        <div class="col-md-6 mb-3">
                            <label for="status_keluarga_id" class="form-label required">Status Keluarga</label>
                            <select class="form-select" id="status_keluarga_id" name="status_keluarga_id" required>
                                @foreach($statuses as $status)
                                    <option value="{{ $status->id }}">{{ $status->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Anak Ke -->
                        <div class="col-md-6 mb-3">
                            <label for="anak_ke" class="form-label required">Anak Ke-</label>
                            <input type="number" class="form-control" id="anak_ke" name="anak_ke" required>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Orang Tua -->
                        <div class="col-md-6 mb-3" style="position: relative;">
                            <label for="orangtua_input" class="form-label">Orang Tua</label>
                            <input type="text" class="form-control" id="orangtua_input" name="orangtua_input" placeholder="Cari Nama Orang Tua" oninput="filterOrangtua()" autocomplete="off">
                            <input type="hidden" name="keluarga_id" id="orangtua_id">

                            <ul id="orangtua_list" class="dropdown-menu show"
                                style="width: 100%; display: none; position: absolute; top: 100%; left: 0; z-index: 10;
                                max-height: 200px; overflow-y: auto; border-radius: 5px; padding: 5px;
                                border: 1px solid #ced4da; background: white;">
                                @foreach($keluargas as $keluarga)
                                    <li class="orangtua_item">
                                        <a href="javascript:void(0);" class="dropdown-item"
                                            onclick="pilihOrangtua('{{ $keluarga->id }}', '{{ $keluarga->nama }}')">
                                            {{ $keluarga->nama }} ({{ $keluarga->alamat }})
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>


                        <!-- Pasangan -->
                        <div class="col-md-6 mb-3" style="position: relative;">
                            <label for="pasangan_input" class="form-label">Pasangan</label>
                            <input type="text" class="form-control" id="pasangan_input" name="pasangan_input" placeholder="Cari Nama Pasangan" oninput="filterPasangan()" autocomplete="off">
                            <input type="hidden" name="pasangan_id" id="pasangan_id">

                            <ul id="pasangan_list" class="dropdown-menu show"
                                style="width: 100%; display: none; position: absolute; top: 100%; left: 0; z-index: 10;
                                max-height: 200px; overflow-y: auto; border-radius: 5px; padding: 5px;
                                border: 1px solid #ced4da; background: white;">
                                @foreach($keluargas as $keluarga)
                                    <li class="pasangan_item">
                                        <a href="javascript:void(0);" class="dropdown-item"
                                           onclick="pilihPasangan('{{ $keluarga->id }}', '{{ $keluarga->nama }}')">
                                            {{ $keluarga->nama }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>

                    <!-- Alamat -->
                    <div class="mb-3">
                        <label for="alamat" class="form-label required">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Di isi nama tempat saja tidak alamat lengkap" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="link_gmap" class="form-label">Link Google Maps</label>
                        <input type="url" class="form-control" id="link_gmap" name="link_gmap" placeholder="https://maps.google.com/...">
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

    <script>
        // Filter dan pilih Orang Tua
        function filterOrangtua() {
            let input = document.getElementById("orangtua_input").value.toLowerCase();
            let list = document.getElementById("orangtua_list");
            let items = document.querySelectorAll(".orangtua_item");

            let visibleCount = 0;
            for (let item of items) {
                let text = item.textContent.toLowerCase();
                if (text.includes(input) && visibleCount < 5) {
                    item.style.display = "block";
                    visibleCount++;
                } else {
                    item.style.display = "none";
                }
            }

            list.style.display = visibleCount > 0 ? "block" : "none";
        }

        function pilihOrangtua(id, nama) {
            document.getElementById("orangtua_input").value = nama;
            document.getElementById("orangtua_id").value = id;
            document.getElementById("orangtua_list").style.display = "none";
        }

        // Filter dan pilih Pasangan
        function filterPasangan() {
            let input = document.getElementById("pasangan_input").value.toLowerCase();
            let list = document.getElementById("pasangan_list");
            let items = document.querySelectorAll(".pasangan_item");

            let visibleCount = 0;
            for (let item of items) {
                let text = item.textContent.toLowerCase();
                if (text.includes(input) && visibleCount < 5) {
                    item.style.display = "block";
                    visibleCount++;
                } else {
                    item.style.display = "none";
                }
            }

            list.style.display = visibleCount > 0 ? "block" : "none";
        }

        function pilihPasangan(id, nama) {
            document.getElementById("pasangan_input").value = nama;
            document.getElementById("pasangan_id").value = id;
            document.getElementById("pasangan_list").style.display = "none";
        }

        // Sembunyikan semua dropdown jika klik di luar
        document.addEventListener("click", function(event) {
            ["orangtua", "pasangan"].forEach(function(prefix) {
                let input = document.getElementById(prefix + "_input");
                let list = document.getElementById(prefix + "_list");
                if (!input.contains(event.target) && !list.contains(event.target)) {
                    list.style.display = "none";
                }
            });
        });
    </script>

@endsection
