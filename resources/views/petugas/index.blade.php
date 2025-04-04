@extends('layouts.layout1')

@section('content')
    <div class="container">
        <h1>Daftar Petugas</h1>
        <a href="{{ route('petugas.create') }}" class="btn btn-primary">Tambah Petugas</a>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>MC</th>
                    <th>Qori</th>
                    <th>Tahlil</th>
                    <th>Sambutan Panitia</th>
                    <th>Sambutan Tuan Rumah</th>
                    <th>Sambutan Bendahara</th>
                    <th>Mauidhoh</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($petugas as $petugasItem)
                    <tr>
                        <td>{{ $petugasItem->mc }}</td>
                        <td>{{ $petugasItem->qori }}</td>
                        <td>{{ $petugasItem->tahlil }}</td>
                        <td>{{ $petugasItem->sambutan_panitia }}</td>
                        <td>{{ $petugasItem->sambutan_tuan_rumah }}</td>
                        <td>{{ $petugasItem->sambutan_bendahara }}</td>
                        <td>{{ $petugasItem->mauidhoh }}</td>
                        <td>
                            <a href="{{ route('petugas.edit', $petugasItem) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('petugas.destroy', $petugasItem) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                            <a href="{{ route('petugas.cetak', $petugasItem) }}" class="btn btn-info">Cetak Surat</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
