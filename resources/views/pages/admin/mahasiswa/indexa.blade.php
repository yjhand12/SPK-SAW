@extends('layouts.admin')

@section('title')
    Nilai
@endsection

@section('content')
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
                <tr>
                    @foreach($mahasiswa as $mhs)
                    <td>{{$loop->iteration}}</td>
                    <td>{{$mhs->nisn}}</td>
                    <td>{{$mhs->nama}}</td>
                    @php
                        $nlai = $nilai->where('idmahasiswa', $mhs->id)->all();
                    @endphp
                    @foreach ($nlai as $nlai)
                        <td>{{$nlai->keterangan}}</td>
                    @endforeach
                    <td>
                        <a class="btn btn-primary" href="" type="button" style="margin-bottom:5px">Edit</a>
                        <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                        <button class="btn btn-danger" type="submit">Hapus</button>
                    </form>
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
        $('#dataTables').DataTable({
        });
    });
</script>
@endpush