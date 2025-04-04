<style>
    .tree-node {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .card {
        min-width: 120px;
        max-width: 140px;
        text-align: center;
    }

    .line {
        width: 2px;
        height: 20px;
        background-color: black;
        margin: 5px auto;
    }
</style>

@php
    if (!isset($displayedMembers)) {
        $displayedMembers = [];
    }

    // Cegah anggota yang sudah tampil
    if (isset($displayedMembers[$anggota->id])) {
        return;
    }

    // Tandai anggota ini sudah tampil
    $displayedMembers[$anggota->id] = true;

    $isMeninggal = $anggota->status === 'meninggal';
    $pasanganUtama = $anggota->pasangan ?? $anggota->pasanganDari;

    // Pastikan anak hanya muncul jika memiliki orang tua yang valid
    $anakValid = $anggota->anak->filter(fn($anak) => $anak->keluarga_id !== null && !isset($displayedMembers[$anak->id]));
@endphp

<div class="tree-node text-center">
    <div class="d-flex justify-content-center align-items-center mb-2">
        <div class="card mx-2 border {{ $isMeninggal ? 'border-danger' : 'border-success' }}">
            <div class="card-body p-2">
                <strong>{{ $anggota->nama }}</strong><br>
                <small>{{ optional($anggota->statusKeluarga)->nama ?? '-' }}</small><br>
                @if ($anggota->foto)
                    <img src="{{ asset('storage/' . $anggota->foto) }}" width="50" class="mt-1">
                @endif
            </div>
        </div>

        @if ($pasanganUtama && !isset($displayedMembers[$pasanganUtama->id]))
            @php
                $displayedMembers[$pasanganUtama->id] = true;
            @endphp
            <div class="card mx-2 border {{ $pasanganUtama->status === 'meninggal' ? 'border-danger' : 'border-success' }}">
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

    @if ($anakValid->isNotEmpty())
        <div class="d-flex flex-column align-items-center">
            <div class="line"></div>
            <div class="d-flex justify-content-center align-items-start flex-wrap gap-2">
                @foreach ($anakValid as $anak)
                    @include('keluarga._tree', ['anggota' => $anak, 'displayedMembers' => &$displayedMembers])
                @endforeach
            </div>
        </div>
    @endif
</div>
