@extends('layouts.admin')

@section('title')
    STEPA - Kriteria
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
                        <option value="10" @if($kriteria->bobot == "10") selected @endif>10</option>
                        <option value="20" @if($kriteria->bobot == "20") selected @endif>20</option>
                        <option value="30" @if($kriteria->bobot == "30") selected @endif>30</option>
                        <option value="40" @if($kriteria->bobot == "40") selected @endif>40</option>
                        <option value="50" @if($kriteria->bobot == "50") selected @endif>50</option>
                        <option value="60" @if($kriteria->bobot == "60") selected @endif>60</option>
                        <option value="70" @if($kriteria->bobot == "70") selected @endif>70</option>
                        <option value="80" @if($kriteria->bobot == "80") selected @endif>80</option>
                        <option value="90" @if($kriteria->bobot == "90") selected @endif>90</option>
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