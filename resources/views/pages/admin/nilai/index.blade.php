@extends('layouts.admin')

@section('title')
    STEPA - Nilai
@endsection

@section('content')
<nav aria-label="breadcrumb" style="font-size:25px">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Nilai</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Nilai Calon Mahasiswa</li>
    </ol>
</nav>
<div class="card mb-3">
        <div class="card-header d-flex flex-row align-items-end">
            <a href="{{ route('nilai.create') }}" class="btn btn-primary" style="width:280px">Tambah Nilai Calon Mahasiswa</a>
        </div>
    <div class="table-responsive px-3 pb-3" style="margin-top:10px">
        <table id="dataTables" class="table align-items-center table-hover table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    @foreach ($kriteria as $kr)
                    <th>{{$kr->nama}}</th>
                    @endforeach
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $seen = [];
                $no = 0;
                @endphp
                @foreach ($mahasiswa as $mhs)
                @foreach ($nilai->where('idmahasiswa', $mhs->id) as $nile)
                @if (!in_array($nile->nisn, $seen))
                <tr>
                <td>{{++$no}}</td>
                <td>{{$mhs->nisn}}</td>
                <td>{{$mhs->nama}}</td>
                @foreach ($kriteria as $kr)
                    @php
                        $nilaiMhs = $nilai->where('idmahasiswa', $mhs->id)->where('idkriteria', $kr->id);
                    @endphp
                    @if ($nilaiMhs->isNotEmpty())
                        <td>
                            @foreach ($nilaiMhs as $nile)
                                {{$nile->keterangan}}
                                {{-- Tambahkan tanda pemisah jika ada lebih dari satu nilai --}}
                                @if (!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </td>
                    @else
                        <td>-</td>
                    @endif
                @endforeach
                    <td>
                        <div class ="d-flex">
                            <a class="btn btn-sm btn-info text-white mx-1" href="{{route('nilai.edit', $nile->id)}}" type="button" style="margin-bottom:5px">Edit</a>
                            <form action="{{route('nilai.destroy', $mhs->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                            <button class="btn btn-sm btn-danger mx-2" type="submit" onclick="return confirm('Hapus data ini?')" value="Hapus">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @php
                $seen[] = $nile->nisn;
                @endphp
                @endif
                @endforeach
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection

@push('addon-script')
<script>
    $(document).ready(function(){
        $('#dataTables').DataTable({
        });
    });
</script>
@endpush