@extends('layouts.admin')

@section('title')
    Nilai
@endsection

@section('content')
<nav aria-label="breadcrumb" style="font-size:25px">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Nilai</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Data Nilai Calon Mahasiswa</li>
    </ol>
</nav>
<div class="card mb-3">
      <div class="card-body">
        <form action="{{ route('nilai.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="col-md-6">
                    <br><label class="form-label">NISN</label><br>
                    <input type="text" class="form-control" value="{{ $nilai->mahasiswa->nisn }}" disabled>    
                </div>
                <div class="col-md-6">
                    <br><label class="form-label">Nama</label><br>
                    <input type="text" class="form-control" value="{{ $nilai->mahasiswa->nama }}" disabled>    
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
<script>
    var select_box_element = document.querySelector('#select_box');
    dselect(select_box_element, {
        search: true
    });
</script>
@endpush