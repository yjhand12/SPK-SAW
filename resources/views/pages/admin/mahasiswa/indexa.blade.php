@extends('layouts.admin')
@push('addon-style')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('title')
    Nilai
@endsection

@section('content')
<nav aria-label="breadcrumb" style="font-size:25px">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Nilai</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Data Nilai Calon Mahasiswa</li>
    </ol>
</nav>
<div class="card mb-3">
      <div class="card-body">
        <form action="{{ route('nilai.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="col-md-6">
                    <label class="form-label">NISN</label><br>
                        <select class="form-select" id="select_box" aria-label="Default select example" name="mahasiswa_id">
                            <option value="">----- Masukan NISN Calon Mahasiswa -----</option>
                            @foreach ($mahasiswa as $mhs)
                            <option value="{{ $mhs->id }}">{{ $mhs->nisn }}</option>
                            @endforeach
                        </select>
                </div>
                <div class="col-md-6">
                    <br><label class="form-label">Nama</label><br>
                    <input type="text" class="form-control">    
                </div>
                <div class="col-md-6">
                @foreach ($kriteria as $kr)
                    <br><label class="form-label" for="kriteria[{{ $kr->id }}]">{{ $kr->nama }}</label>
                        <select class="form-select" id="kriteria[{{ $kr->id }}]" name="kriteria[{{ $kr->id }}]" aria-label="Default select example">
                        @php
                        $res = $subkriteria->where('kriteria_id', $kr->id)->all();
                        @endphp
                            @foreach ($res as $skr)
                                <option value="{{ $skr->id }}">{{ $skr->keterangan }}</option>
                            @endforeach
                        </select>
                        @endforeach
                </div>
            </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-success float-start mx-3" style="width:150px">Simpan</button>
                    <a class="btn btn-danger float-end mx-5" href="{{route('nilai.index')}}" type="button" style="width:150px">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('addon-script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
    $('#select_box').select2();
});
</script>
@endpush