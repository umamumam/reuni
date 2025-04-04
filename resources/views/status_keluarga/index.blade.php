@extends('layouts.layout1')

@section('content')
    <div class="container">
        <h2>Status Keluarga</h2>
        
        <!-- Tampilkan pesan sukses jika ada -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tombol Tambah -->
        <a href="{{ route('status_keluarga.create') }}" class="btn btn-primary mb-3">Tambah Status Keluarga</a>

        <!-- Tabel Status Keluarga -->
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($statuses as $status)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $status->nama }}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('status_keluarga.edit', $status->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <!-- Delete Button -->
                            <form action="{{ route('status_keluarga.destroy', $status->id) }}" method="POST" class="d-inline">
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
