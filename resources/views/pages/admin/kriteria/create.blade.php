@extends('layouts.admin')

@section('title')
    Kriteria
@endsection

@section('content')
<nav aria-label="breadcrumb" style="font-size:25px">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Kriteria</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Data Kriteria</li>
    </ol>
</nav>
<div class="card mb-3">
      <div class="card-body">
        <form action="{{ route('kriteria.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="col-md-6">
                    <br><label class="form-label">Nama Kriteria</label><br>
                    <input type="text" class="form-control" name="nama">    
                </div>
                <label class="form-label" style="margin-top:20px">Sifat Kriteria</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sifat" value="Benefit" checked>
                        <label class="form-check-label">Max/Benefit</label>
                    </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sifat" value="Cost">
                    <label class="form-check-label">Min/Cost</label>
                </div>
                <div class="col-md-6">
                    <br><label class="form-label">Bobot Kriteria</label><br>
                        <select class="form-select" aria-label="Default select example" name="bobot">
                            <option disabled>Pilih Bobot Kriteria</option>
                            <option value="0.1">0.1</option>
                            <option value="0.2">0.2</option>
                            <option value="0.3">0.3</option>
                            <option value="0.4">0.4</option>
                            <option value="0.5">0.5</option>
                            <option value="0.6">0.6</option>
                            <option value="0.7">0.7</option>
                            <option value="0.8">0.8</option>
                            <option value="0.9">0.9</option>
                        </select>
                </div>
            </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-success float-start mx-3" style="width:150px">Simpan</button>
                    <button type="reset" class="btn btn-warning text-white float-start mx-2" style="width:150px">Reset</button>
                    <a class="btn btn-danger float-end mx-5" href="{{route('kriteria.index')}}" type="button" style="width:150px">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection