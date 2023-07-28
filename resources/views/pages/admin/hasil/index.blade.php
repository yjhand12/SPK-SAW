@extends('layouts.admin')

@section('title')
    STEPA - Hasil
@endsection

@section('content')
<nav aria-label="breadcrumb" style="font-size:25px">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Hasil</a></li>
        <li class="breadcrumb-item active" aria-current="page">Hasil Perhitungan Nilai Calon Mahasiswa</li>
    </ol>
</nav>
<div class="card mb-3">
    <div class="table-responsive px-3 pb-3" style="margin-top:10px">
        <table id="dataTables" class="table align-items-center table-hover table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Asal Sekolah</th>
                    <th>Nilai Akhir</th>
                    <th>Keputusan</th>
                </tr>
            </thead>
            <tbody>
            @php
                $sortedMahasiswa = $mahasiswa->sortByDesc(function ($mhs) use ($nilai) {
                    $nle = $nilai->where('idmahasiswa', $mhs->id)->all();
                    $total = 0;

                    foreach ($nle as $n) {
                        $total += $n->bobot;
                    }
                    return [$total, -$mhs->id];
                });

                $topMahasiswa = $sortedMahasiswa->take(16)->pluck('id')->all();
            @endphp

            @foreach ($mahasiswa as $mhs)
                @php
                    $nle = $nilai->where('idmahasiswa', $mhs->id)->all();
                    $total = 0;

                    foreach ($nle as $n) {
                        $total += $n->bobot;
                    }

                    $butawarna = App\Models\Nilai::where('mahasiswa_id', $mhs->id)
                                ->whereHas('subKriteria', function ($query) {
                                    $query->where('keterangan', 'Buta Warna');
                                })->exists();

                    if ($butawarna) {
                        $keputusan = 'TIDAK DITERIMA';
                        $keterangan = 'Mahasiswa Program Studi RKS Tidak Boleh Buta Warna';
                    } else {
                        $keputusan = in_array($mhs->id, $topMahasiswa) ? 'DITERIMA' : 'TIDAK DITERIMA';
                        if ($keputusan === 'DITERIMA') {
                            $keterangan = 'Selamat, Anda Diterima';
                        } elseif ($keputusan === 'TIDAK DITERIMA') {
                            $keterangan = 'Mohon Maaf, Anda Tidak Diterima';
                        }
                    }

                    $maxKeputusanLength = 50;
                    $maxKeteranganLength = 50;
                    $keputusan = mb_substr($keputusan, 0, $maxKeputusanLength);
                    $keterangan = mb_substr($keterangan, 0, $maxKeteranganLength);

                    $dataHasil = [
                        'mahasiswa_id' => $mhs->id,
                        'nilai' => $total,
                        'keputusan' => $keputusan,
                        'keterangan' => $keterangan
                    ];

                    $CekData = App\Models\Hasil::where('mahasiswa_id', $mhs->id)->first();
                    if ($CekData) {
                        $CekData->update($dataHasil);
                    } else {
                        App\Models\Hasil::create($dataHasil);
                    }
                @endphp

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mhs->nisn }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->asal_sekolah }}</td>
                    <td>{{ $total }}</td>
                    <td>
                        @if ($keputusan === 'DITERIMA')
                            <b>DITERIMA</b>
                        @else
                            <b>TIDAK DITERIMA</b>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@push('addon-script')
<script>
    $(document).ready(function(){
        $('#dataTables').DataTable({});
    });
</script>
@endpush
