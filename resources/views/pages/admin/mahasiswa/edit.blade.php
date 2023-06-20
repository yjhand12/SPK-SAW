@extends('layouts.admin')

@section('title')
    Mahasiswa
@endsection

@section('content')
<nav aria-label="breadcrumb" style="font-size:25px">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Mahasiswa</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Data Mahasiswa{{ $mahasiswa->nama }}</li>
    </ol>
</nav>
<div class="card mb-3">
      <div class="card-body">
        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <div class="col-md-6">
                    <label class="form-label">NISN</label><br>
                    <input type="number" class="form-control" name="nisn" placeholder="Masukan NISN..." value="{{ $mahasiswa->nisn }}">
                </div>
                <div class="col-md-6">
                    <br><label for="inputPassword4" class="form-label">Nama</label><br>
                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap..." value="{{ $mahasiswa->nama }}">    
                </div>
                <div class="col-6">
                    <br><label class="form-label">Tempat Lahir</label><br>
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukan Tempat Lahir..." value="{{ $mahasiswa->tempat_lahir }}">
                </div>
                <div class="col-6">
                <br><label class="form-label">Tanggal Lahir</label>
                    <div class="input-group date">
                        <input type="date" class="form-control" id="datepicker" name="tanggal_lahir" value="{{ $mahasiswa->tanggal_lahir }}">
                        <span class="input-group-append">
                        </span>
                    </div>
                </div>
                <label class="form-label" style="margin-top:20px">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki" @if($mahasiswa->jenis_kelamin == "Laki-Laki") checked @endif>
                        <label class="form-check-label">Laki-Laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" @if($mahasiswa->jenis_kelamin == "Perempuan") checked @endif>
                        <label class="form-check-label">Perempuan</label>
                    </div>
                <div class="col-md-7">
                    <br><label class="form-label">Asal Sekolah</label><br>
                    <input type="text" class="form-control" name="asal_sekolah" placeholder="Masukan Asal Sekolah..." value="{{ $mahasiswa->asal_sekolah }}">
                </div>
            </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-success float-start mx-2" style="width:150px">Simpan</button>
                    <a class="btn btn-danger float-end mx-5" href="{{route('mahasiswa.index')}}" type="button" style="width:150px">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection