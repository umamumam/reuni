<style>
    .tree-wrapper {
        overflow-x: auto;
        white-space: nowrap;
        padding: 5px;
        margin: 0 auto;
        display: flex;
        justify-content: center;
    }

    .tree-node {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        text-align: center;
    }

    .card {
        min-width: 120px;
        max-width: 140px;
        white-space: normal;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        border-radius: 8px;
        background-color: #fff;
    }

    .pasangan-line {
        font-size: 24px;
        margin: 0 4px;
        line-height: 1;
    }

    .connector-vertical {
        width: 2px;
        height: 20px;
        background-color: black;
        margin: 0 auto;
    }

    .connector-children {
        display: flex;
        gap: 10px;
        position: relative;
        padding-top: 20px;
    }

    .connector-children::before {
        content: '';
        position: absolute;
        top: 0;
        height: 2px;
        background-color: black;
        left: calc(10px + 60px);
        right: calc(10px + 60px);
    }
    .connector-children > .tree-node::before {
        content: '';
        position: absolute;
        top: -20px;
        height: 20px;
        width: 2px;
        background-color: black;
        left: 50%;
        transform: translateX(-50%);
    }

    .tree-wrapper::-webkit-scrollbar {
        height: 8px;
    }

    .tree-wrapper::-webkit-scrollbar-thumb {
        background-color: #888;
        border-radius: 4px;
    }

    .tree-wrapper::-webkit-scrollbar-thumb:hover {
        background-color: #555;
    }
</style>

@php
    if (!isset($displayedMembers)) {
        $displayedMembers = [];
    }
    if (isset($displayedMembers[$anggota->id])) {
        return;
    }
    $displayedMembers[$anggota->id] = true;
    $isMeninggal = $anggota->status === 'meninggal';
    $pasanganUtama = $anggota->pasangan ?? $anggota->pasanganDari;
    if ($pasanganUtama && isset($displayedMembers[$pasanganUtama->id])) {
        $pasanganUtama = null;
    }
    if ($pasanganUtama) {
        $displayedMembers[$pasanganUtama->id] = true;
    }
    $anakValid = $anggota->anak
        ->filter(fn($anak) => $anak->keluarga_id !== null && !isset($displayedMembers[$anak->id]))
        ->sortBy('anak_ke');
@endphp

<div class="tree-wrapper">
    <div class="tree-node">

        {{-- Bagian Orang Tua & Pasangan --}}
        <div class="d-flex justify-content-center align-items-center mb-2">
            <div class="card border {{ $isMeninggal ? 'border-danger' : 'border-success' }}">
                <div class="card-body p-2">
                    <strong>{{ $anggota->nama }}</strong><br>
                    <small>{{ optional($anggota->statusKeluarga)->nama ?? '-' }}</small><br>
                    @if ($anggota->foto)
                        <img src="{{ asset('storage/' . $anggota->foto) }}" width="50" class="mt-1"><br>
                    @endif
                    <small>({{ $anggota->alamat }})</small><br>
                </div>
                <div class="text-center p-2">
                    <a href="{{ route('keluarga.edit', $anggota->id) }}" class="btn btn-sm btn-primary">Edit</a>
                </div>
            </div>
            @if ($pasanganUtama)
                <div class="pasangan-line">-</div>
                <div class="card border {{ $pasanganUtama->status === 'meninggal' ? 'border-danger' : 'border-success' }}">
                    <div class="card-body p-2">
                        <strong>{{ $pasanganUtama->nama }}</strong><br>
                        <small>{{ optional($pasanganUtama->statusKeluarga)->nama ?? '-' }}</small><br>
                        @if ($pasanganUtama->foto)
                            <img src="{{ asset('storage/' . $pasanganUtama->foto) }}" width="50" class="mt-1"><br>
                        @endif
                        <small>({{ $anggota->alamat }})</small><br>
                        <a href="{{ route('keluarga.edit', $pasanganUtama->id) }}" class="btn btn-sm btn-primary mt-2">Edit</a>
                    </div>
                </div>
            @endif
        </div>

        {{-- Garis tengah ke bawah jika punya anak --}}
        @if ($anakValid->isNotEmpty())
            <div class="connector-vertical"></div>
        @endif

        {{-- Anak-anak --}}
        @if ($anakValid->isNotEmpty())
            <div class="connector-children">
                @foreach ($anakValid as $anak)
                    <div class="tree-node">
                        @include('keluarga._tree', ['anggota' => $anak, 'displayedMembers' => &$displayedMembers])
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
