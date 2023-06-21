@extends('layouts.admin')

@section('title')
    Kriteria
@endsection

@section('content')
<nav aria-label="breadcrumb" style="font-size:25px">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Kriteria</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Data Kriteria {{$kriteria->nama}}</li>
    </ol>
</nav>
<div class="card mb-3">
      <div class="card-body">
        <form action="{{ route('kriteria.update', $kriteria->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <div class="col-md-6">
                    <br><label class="form-label">Nama Kriteria</label><br>
                    <input type="text" class="form-control" name="nama" value="{{ $kriteria->nama }}" disabled>    
                </div>
                <label class="form-label" style="margin-top:20px">Sifat Kriteria</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sifat" value="Benefit" @if($kriteria->sifat == "Benefit") checked @endif>
                        <label class="form-check-label">Max/Benefit</label>
                    </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sifat" value="Cost" @if($kriteria->sifat == "Cost") checked @endif>
                    <label class="form-check-label">Min/Cost</label>
                </div>
                <div class="col-md-6">
                    <br><label class="form-label">Bobot Kriteria</label><br>
                    <select class="form-select" aria-label="Default select example" name="bobot" value="{{$kriteria->bobot}}">
                        <option disabled>Pilih Bobot Kriteria</option>
                        <option value="0.1" @if($kriteria->bobot == "0.1") selected @endif>0.1</option>
                        <option value="0.2" @if($kriteria->bobot == "0.2") selected @endif>0.2</option>
                        <option value="0.3" @if($kriteria->bobot == "0.3") selected @endif>0.3</option>
                        <option value="0.4" @if($kriteria->bobot == "0.4") selected @endif>0.4</option>
                        <option value="0.5" @if($kriteria->bobot == "0.5") selected @endif>0.5</option>
                        <option value="0.6" @if($kriteria->bobot == "0.6") selected @endif>0.6</option>
                        <option value="0.7" @if($kriteria->bobot == "0.7") selected @endif>0.7</option>
                        <option value="0.8" @if($kriteria->bobot == "0.8") selected @endif>0.8</option>
                        <option value="0.9" @if($kriteria->bobot == "0.9") selected @endif>0.9</option>
                    </select>
                </div>
            </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-success float-start mx-2" style="width:150px">Simpan</button>
                    <a class="btn btn-primary float-end mx-5" href="{{route('kriteria.index')}}" type="button" style="width:150px">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection