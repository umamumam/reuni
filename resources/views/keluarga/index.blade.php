@extends('layouts.layout1')

@section('content')
    <div class="container">
        <h2>Daftar Keluarga</h2>
        <a href="{{ route('keluarga.create') }}" class="btn btn-primary mb-3">Tambah Keluarga</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Foto</th>
                    <th>Status</th>
                    <th>Orang Tua</th>
                    <th>Pasangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($keluargas as $keluarga)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $keluarga->nama }}</td>
                        <td>
                            @if($keluarga->foto)
                                <img src="{{ asset('storage/' . $keluarga->foto) }}" width="50" alt="Foto Keluarga">
                            @else
                                <span>No Photo</span>
                            @endif
                        </td>
                        <td>{{ $keluarga->status }}</td>
                        <td>{{ $keluarga->orangTua ? $keluarga->orangTua->nama : 'Tidak ada' }}</td>
                        <td>{{ $keluarga->pasangan ? $keluarga->pasangan->nama : 'Tidak ada' }}</td>
                        <td>
                            <a href="{{ route('keluarga.edit', $keluarga->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('keluarga.destroy', $keluarga->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
