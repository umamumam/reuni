@extends('layouts.layout1')

@section('content')
    <div class="container">
        <h2>Struktur Keluarga</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="family-tree">
            @foreach($keluargas as $keluarga)
                <!-- Orang Tua -->
                <div class="parent-node">
                    <div class="person-card">
                        <img src="{{ asset('storage/' . $keluarga->foto) }}" alt="Foto Keluarga" class="person-img">
                        <div class="person-info">
                            <h5 class="person-name">{{ $keluarga->nama }}</h5>
                            <p>Anak Ke-: {{ $keluarga->anak_ke }}</p>
                            {{-- <p>Status: {{ $keluarga->status }}</p>
                            <p>Tanggal Lahir: {{ $keluarga->tanggal_lahir }}</p> --}}
                            <p>Alamat: {{ $keluarga->alamat }}</p>
                        </div>
                    </div>

                    <!-- Anak-anak (Jika Ada) -->
                    @if($keluarga->anak->count() > 0)
                        <div class="children">
                            @foreach($keluarga->anak->sortBy('anak_ke') as $anak)
                                <div class="child-node">
                                    <div class="person-card">
                                        <img src="{{ asset('storage/' . $anak->foto) }}" alt="Foto Anak" class="person-img">
                                        <div class="person-info">
                                            <h5 class="person-name">{{ $anak->nama }}</h5>
                                            <p>Anak Ke-: {{ $anak->anak_ke }}</p>
                                            {{-- <p>Status: {{ $anak->status }}</p>
                                            <p>Tanggal Lahir: {{ $anak->tanggal_lahir }}</p> --}}
                                            <p>Alamat: {{ $anak->alamat }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>

    <style>
        .family-tree {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .parent-node {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            margin-bottom: 40px;
        }

        .person-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 200px;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .person-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .person-info {
            text-align: center;
        }

        .person-name {
            font-weight: bold;
        }

        .children {
            display: flex;
            justify-content: space-around;
            width: 100%;
            margin-top: 20px;
        }

        .child-node {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        /* Garis menghubungkan orang tua dan anak */
        .parent-node::after {
            content: '';
            position: absolute;
            width: 2px;
            height: 40px;
            background-color: #ccc;
            top: 100%;
            left: 50%;
            margin-left: -1px;
        }

        .children::before {
            content: '';
            position: absolute;
            width: 2px;
            height: 20px;
            background-color: #ccc;
            top: -20px;
            left: 50%;
            margin-left: -1px;
        }
    </style>
@endsection
