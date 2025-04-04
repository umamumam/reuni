<style>
    .tree-wrapper {
        overflow-x: auto;
        white-space: nowrap;
        padding: 5px;
        margin: 0 auto;
        display: flex;
        justify-content: center;
    }

    .children-wrapper {
        display: inline-flex;
        flex-wrap: nowrap;
        gap: 5px;
    }

    .tree-node {
        display: inline-block;
        vertical-align: top;
        text-align: center;
    }

    .card {
        min-width: 120px;
        max-width: 140px;
        text-align: center;
        white-space: normal;
    }

    .line {
        width: 2px;
        height: 20px;
        background-color: black;
        margin: 5px auto;
    }

    .pasangan-line {
        font-size: 24px;
        margin: 0 4px;
        line-height: 1;
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

    // Cegah tampilan ulang anggota
    if (isset($displayedMembers[$anggota->id])) {
        return;
    }
    $displayedMembers[$anggota->id] = true;

    $isMeninggal = $anggota->status === 'meninggal';

    // Ambil pasangan (baik sebagai suami atau istri)
    $pasanganUtama = $anggota->pasangan ?? $anggota->pasanganDari;

    // Cegah tampilan ulang pasangan jika sudah tampil
    if ($pasanganUtama && isset($displayedMembers[$pasanganUtama->id])) {
        $pasanganUtama = null;
    }

    // Tandai pasangan sudah tampil
    if ($pasanganUtama) {
        $displayedMembers[$pasanganUtama->id] = true;
    }

    // Anak-anak yang valid dan belum tampil, diurutkan berdasarkan anak_ke
    $anakValid = $anggota->anak
        ->filter(fn($anak) => $anak->keluarga_id !== null && !isset($displayedMembers[$anak->id]))
        ->sortBy('anak_ke');
@endphp

<div class="tree-wrapper">
    <div class="tree-node">
        <div class="d-flex justify-content-center align-items-center mb-2">
            {{-- Anggota --}}
            <div class="card border {{ $isMeninggal ? 'border-danger' : 'border-success' }}">
                <div class="card-body p-2">
                    <strong>{{ $anggota->nama }}</strong><br>
                    <small>{{ optional($anggota->statusKeluarga)->nama ?? '-' }}</small><br>
                    @if ($anggota->foto)
                        <img src="{{ asset('storage/' . $anggota->foto) }}" width="50" class="mt-1">
                    @endif
                </div>
            </div>

            {{-- Jika ada pasangan, tampilkan dengan tanda "-" --}}
            @if ($pasanganUtama)
                <div class="pasangan-line">-</div>
                <div class="card border {{ $pasanganUtama->status === 'meninggal' ? 'border-danger' : 'border-success' }}">
                    <div class="card-body p-2">
                        <strong>{{ $pasanganUtama->nama }}</strong><br>
                        <small>{{ optional($pasanganUtama->statusKeluarga)->nama ?? '-' }}</small><br>
                        @if ($pasanganUtama->foto)
                            <img src="{{ asset('storage/' . $pasanganUtama->foto) }}" width="50" class="mt-1">
                        @endif
                    </div>
                </div>
            @endif
        </div>

        {{-- Tampilkan anak jika ada --}}
        @if ($anakValid->isNotEmpty())
            <div class="d-flex flex-column align-items-center">
                <div class="line"></div>
                <div class="children-wrapper">
                    @foreach ($anakValid as $anak)
                        @include('keluarga._tree', ['anggota' => $anak, 'displayedMembers' => &$displayedMembers])
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</div>
