@extends('layouts.awal')
@section('title', 'Edit Keluarga')
@section('hero-title', 'Edit Keluarga')
@section('breadcrumb', 'Edit Keluarga')
@section('content')
    <div class="container mt-4">
        <div class="card shadow-lg">
            <div class="card-header bg-warning text-white">
                <h4 class="mb-0">Edit Keluarga</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('keluarga.update', $keluarga->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $keluarga->nama }}" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $keluarga->tanggal_lahir }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="status_keluarga_id" class="form-label">Status Keluarga</label>
                            <select class="form-select" id="status_keluarga_id" name="status_keluarga_id" required>
                                @foreach($statuses as $status)
                                    <option value="{{ $status->id }}" {{ $status->id == $keluarga->status_keluarga_id ? 'selected' : '' }}>
                                        {{ $status->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="anak_ke" class="form-label">Anak Ke-</label>
                            <input type="number" class="form-control" id="anak_ke" name="anak_ke" value="{{ $keluarga->anak_ke }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3" style="position: relative;">
                            <label for="orangtua_input" class="form-label">Orang Tua</label>
                            <input type="text" class="form-control" id="orangtua_input" name="orangtua_input"
                                   value="{{ $keluarga->orangtua->nama ?? '' }}" oninput="filterOrangtua()" autocomplete="off">
                            <input type="hidden" name="keluarga_id" id="orangtua_id" value="{{ $keluarga->keluarga_id }}">
                            <ul id="orangtua_list" class="dropdown-menu show" style="width: 100%; display: none; position: absolute; top: 100%; left: 0; z-index: 10; max-height: 200px; overflow-y: auto; border-radius: 5px; padding: 5px; border: 1px solid #ced4da; background: white;">
                                @foreach($keluargas as $orangtua)
                                    <li class="orangtua_item">
                                        <a href="javascript:void(0);" class="dropdown-item"
                                           onclick="pilihOrangtua('{{ $orangtua->id }}', '{{ $orangtua->nama }}')">
                                            {{ $orangtua->nama }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="col-md-6 mb-3" style="position: relative;">
                            <label for="pasangan_input" class="form-label">Pasangan</label>
                            <input type="text" class="form-control" id="pasangan_input" name="pasangan_input"
                                   value="{{ $keluarga->pasangan->nama ?? '' }}" oninput="filterPasangan()" autocomplete="off">
                            <input type="hidden" name="pasangan_id" id="pasangan_id" value="{{ $keluarga->pasangan_id }}">
                            <ul id="pasangan_list" class="dropdown-menu show" style="width: 100%; display: none; position: absolute; top: 100%; left: 0; z-index: 10; max-height: 200px; overflow-y: auto; border-radius: 5px; padding: 5px; border: 1px solid #ced4da; background: white;">
                                @foreach($keluargas as $pasangan)
                                    <li class="pasangan_item">
                                        <a href="javascript:void(0);" class="dropdown-item"
                                           onclick="pilihPasangan('{{ $pasangan->id }}', '{{ $pasangan->nama }}')">
                                            {{ $pasangan->nama }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required>{{ $keluarga->alamat }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="link_gmap" class="form-label">Link Google Maps</label>
                        <input type="url" class="form-control" id="link_gmap" name="link_gmap" placeholder="https://maps.google.com/..." value="{{ $keluarga->link_gmap }}">
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status" required onchange="toggleTanggalMeninggal()">
                                <option value="hidup" {{ $keluarga->status == 'hidup' ? 'selected' : '' }}>Hidup</option>
                                <option value="meninggal" {{ $keluarga->status == 'meninggal' ? 'selected' : '' }}>Meninggal</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3" id="tanggal_meninggal_container" style="{{ $keluarga->status == 'meninggal' ? '' : 'display: none;' }}">
                            <label for="tanggal_meninggal" class="form-label">Tanggal Meninggal</label>
                            <input type="date" class="form-control" id="tanggal_meninggal" name="tanggal_meninggal" value="{{ $keluarga->tanggal_meninggal }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto" onchange="previewImage(event)">
                        <input type="hidden" name="hapus_foto" id="hapus_foto" value="0">
                        <div id="fotoPreview" class="mt-3 text-center">
                            @if($keluarga->foto)
                                <img id="preview" src="{{ asset('storage/' . $keluarga->foto) }}" class="img-thumbnail" width="150">
                                <button type="button" class="btn btn-danger btn-sm mt-2" id="resetFoto" onclick="resetImage()">Hapus Foto</button>
                            @else
                                <img id="preview" src="#" alt="Preview Foto" class="img-thumbnail d-none" width="150">
                                <button type="button" class="btn btn-danger btn-sm mt-2 d-none" id="resetFoto" onclick="resetImage()">Hapus Foto</button>
                            @endif
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i> Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Script langsung di sini --}}
    <script>
        function filterOrangtua() {
            let input = document.getElementById("orangtua_input").value.toLowerCase();
            let list = document.getElementById("orangtua_list");
            let items = list.getElementsByClassName("orangtua_item");
            list.style.display = input.length > 0 ? "block" : "none";
            Array.from(items).forEach(function (item) {
                item.style.display = item.textContent.toLowerCase().includes(input) ? "block" : "none";
            });
        }

        function pilihOrangtua(id, nama) {
            document.getElementById("orangtua_id").value = id;
            document.getElementById("orangtua_input").value = nama;
            document.getElementById("orangtua_list").style.display = "none";
        }

        function filterPasangan() {
            let input = document.getElementById("pasangan_input").value.toLowerCase();
            let list = document.getElementById("pasangan_list");
            let items = list.getElementsByClassName("pasangan_item");
            list.style.display = input.length > 0 ? "block" : "none";
            Array.from(items).forEach(function (item) {
                item.style.display = item.textContent.toLowerCase().includes(input) ? "block" : "none";
            });
        }

        function pilihPasangan(id, nama) {
            document.getElementById("pasangan_id").value = id;
            document.getElementById("pasangan_input").value = nama;
            document.getElementById("pasangan_list").style.display = "none";
        }

        function toggleTanggalMeninggal() {
            const status = document.getElementById("status").value;
            const container = document.getElementById("tanggal_meninggal_container");
            container.style.display = (status === "meninggal") ? "block" : "none";
        }

        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function () {
                const output = document.getElementById("preview");
                output.src = reader.result;
                output.classList.remove("d-none");
                document.getElementById("resetFoto").classList.remove("d-none");
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        function resetImage() {
            const preview = document.getElementById("preview");
            const resetBtn = document.getElementById("resetFoto");
            const fileInput = document.getElementById("foto");
            fileInput.value = "";
            preview.src = "#";
            preview.classList.add("d-none");
            resetBtn.classList.add("d-none");
            document.getElementById("hapus_foto").value = "1";
        }
    </script>
@endsection
