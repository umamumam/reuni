@extends('layouts.layout1')

@section('title', 'Halal Bil Halal')

@section('content')
<div class="container">
    <h1>Daftar Halal Bil Halal</h1>
    <a href="{{ route('halal_bil_halal.create') }}" class="btn btn-primary mb-3">Tambah Halal Bil Halal</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Tempat</th>
                <th>Halal Bihalal Ke</th>
                <th>MC</th>
                <th>Qori</th>
                <th>Tahlil</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($halalBilHalals as $halalBilHalal)
                <tr>
                    <td>{{ $halalBilHalal->tanggal }}</td>
                    <td>{{ $halalBilHalal->tempat }}</td>
                    <td>{{ $halalBilHalal->halal_bihalal_ke }}</td>
                    <td>{{ $halalBilHalal->mc }}</td>
                    <td>{{ $halalBilHalal->qori }}</td>
                    <td>{{ $halalBilHalal->tahlil }}</td>
                    <td>
                        <a href="{{ route('halal_bil_halal.edit', $halalBilHalal) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('halal_bil_halal.destroy', $halalBilHalal) }}" method="POST" style="display:inline;">
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
