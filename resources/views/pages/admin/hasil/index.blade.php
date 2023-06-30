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
                        $total += $n->bobot * 100;
                    }

                    return $total;
                });

                $topMahasiswa = $sortedMahasiswa->take(15)->pluck('id')->all();
                @endphp

                @foreach ($mahasiswa as $mhs)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mhs->nisn }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->asal_sekolah }}</td>
                    @php
                    $nle = $nilai->where('idmahasiswa', $mhs->id)->all();
                    $total = 0;

                    foreach ($nle as $n) {
                        $total += $n->bobot * 100;
                    }
                    @endphp
                    <td>{{ $total }}</td>
                    <td>
                        @if (in_array($mhs->id, $topMahasiswa))
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
