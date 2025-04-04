@extends('layouts.layout1')

@section('title', 'Daftar Galeri')

@section('content')
<div class="container">
    <h1>Daftar Galeri</h1>
    <a href="{{ route('galeri.create') }}" class="btn btn-primary mb-3">Tambah Galeri</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($galeris as $galeri)
                <tr>
                    <td><img src="{{ asset('storage/' . $galeri->foto) }}" alt="Foto Galeri" width="100"></td>
                    <td>{{ $galeri->tahun }}</td>
                    <td>
                        <a href="{{ route('galeri.edit', $galeri) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('galeri.destroy', $galeri) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
