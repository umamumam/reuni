@extends('layouts.layout1')

@section('content')
    <div class="container">
        <h2>Detail Status Keluarga</h2>
        
        <div class="mb-3">
            <strong>Nama:</strong> {{ $statusKeluarga->nama }}
        </div>
    </div>
@endsection
