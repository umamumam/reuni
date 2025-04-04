@extends('layouts.layout1')

@section('title', 'Daftar Santunan')

@section('content')
<div class="container">
    <h1>Daftar Santunan</h1>
    <a href="{{ route('santunan.create') }}" class="btn btn-primary mb-3">Tambah Santunan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Status</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($santunans as $santunan)
                <tr>
                    <td>{{ $santunan->nama }}</td>
                    <td>{{ $santunan->status }}</td>
                    <td>{{ $santunan->tahun }}</td>
                    <td>
                        <a href="{{ route('santunan.edit', $santunan) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('santunan.destroy', $santunan) }}" method="POST" style="display:inline;">
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
