@extends('layouts.admin')

@section('title')
    STEPA - Sub Kriteria
@endsection

@section('content')
<nav aria-label="breadcrumb" style="font-size:25px">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Sub Kriteria</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Sub Kriteria</li>
    </ol>
</nav>
<div class="card mb-3">
        <div class="card-header d-flex flex-row align-items-end">
            <a href="{{ route('sub-kriteria.create') }}" class="btn btn-primary" style="width:250px">Tambah Sub Kriteria</a>
        </div>
    <div class="table-responsive px-3 pb-3" style="margin-top:10px">
        <table id="dataTables" class="table align-items-center table-hover table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Kriteria</th>
                    <th>Keterangan</th>
                    <th>Nilai</th>
                    <th>Opsi</th>
                    <th>asd</th>
                </tr>
            </thead>
            <tbody>
                @foreach($subkriteria as $subkriteria)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$subkriteria->kriteria->nama}}</td>
                    <td>{{$subkriteria->keterangan}}</td>
                    <td>{{$subkriteria->bobot}}</td>
                    <td class="d-flex">
                        <a class="btn btn-sm btn-info text-white mx-1" href="{{route('sub-kriteria.edit', $subkriteria->id)}}" type="button" style="margin-bottom:5px">Edit</a>
                        <form action="{{route('sub-kriteria.destroy', $subkriteria->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button class="btn btn-sm btn-danger mx-2" type="submit" onclick="return confirm('Hapus data ini?')" value="Hapus">Hapus</button>
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