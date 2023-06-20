@extends('layouts.admin')

@section('title')
    Sub Kriteria
@endsection

@section('content')
<nav aria-label="breadcrumb" style="font-size:25px">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Sub Kriteria</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Data Sub Kriteria</li>
    </ol>
</nav>
<div class="card mb-3">
      <div class="card-body">
        <form action="{{ route('sub-kriteria.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="col-md-6">
                    <br><label class="form-label">Jenis Kriteria</label><br>
                    <select class="form-select" aria-label="Default select example" name="kriteria_id">
                        <option disabled>Pilih Kriteria</option>
                        @foreach ($kriteria as $kriteria)
                        <option value="{{ $kriteria->id }}">{{ $kriteria->nama }}</option>
                        @endforeach
                    </select>   
                </div>
                <div class="col-md-6">
                    <br><label class="form-label">Sub Kriteria / Keterangan</label><br>
                    <input type="text" class="form-control" name="keterangan">    
                </div>
                <div class="col-md-6">
                    <br><label class="form-label">Bobot Sub Kriteria</label><br>
                    <input type="float" class="form-control" name="bobot">
                </div>
            </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-success float-start mx-3" style="width:150px">Simpan</button>
                    <button type="reset" class="btn btn-warning text-white float-start mx-2" style="width:150px">Reset</button>
                    <a class="btn btn-danger float-end mx-5" href="{{route('sub-kriteria.index')}}" type="button" style="width:150px">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection