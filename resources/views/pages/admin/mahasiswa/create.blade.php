@extends('layouts.admin')

@section('title')
    Mahasiswa
@endsection

@section('content')
<nav aria-label="breadcrumb" style="font-size:25px">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Mahasiswa</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Data Mahasiswa</li>
    </ol>
</nav>
<div class="card mb-3">
      <div class="card-body">
        <form action="{{ route('mahasiswa.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="col-md-6">
                    <label class="form-label">NISN</label><br>
                    <input type="number" class="form-control" name="nisn" placeholder="Masukan NISN...">
                </div>
                <div class="col-md-6">
                    <br><label for="inputPassword4" class="form-label">Nama</label><br>
                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap...">    
                </div>
                <div class="col-6">
                    <br><label class="form-label">Tempat Lahir</label><br>
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukan Tempat Lahir...">
                </div>
                <div class="col-6">
                <br><label class="form-label">Tanggal Lahir</label>
                    <div class="input-group date">
                        <input type="date" class="form-control" id="datepicker" name="tanggal_lahir">
                        <span class="input-group-append">
                        </span>
                    </div>
                </div>
                <label class="form-label" style="margin-top:20px">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki" checked>
                        <label class="form-check-label">Laki-Laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                        <label class="form-check-label">Perempuan</label>
                    </div>
                <div class="col-md-7">
                    <br><label class="form-label">Asal Sekolah</label><br>
                    <input type="text" class="form-control" name="asal_sekolah" placeholder="Masukan Asal Sekolah...">
                </div>
            </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-success float-start mx-3" style="width:150px">Simpan</button>
                    <button type="reset" class="btn btn-warning text-white float-start mx-2" style="width:150px">Reset</button>
                    <a class="btn btn-danger float-end mx-5" href="{{route('mahasiswa.index')}}" type="button" style="width:150px">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection