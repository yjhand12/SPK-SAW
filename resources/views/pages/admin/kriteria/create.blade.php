@extends('layouts.admin')

@section('title')
    STEPA - Kriteria
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
        <form action="{{ route('kriteria.store') }}" method="post" enctype="multipart/form-data" id="kriteriaForm">
            @csrf
            @if (session('error'))
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: '{{ session('error') }}',
                        });
                    });
                </script>
            @endif
            <div class="form-group">
                <div class="col-md-6">
                    <br><label class="form-label">Nama Kriteria</label><br>
                    <input type="text" class="form-control" name="nama">
                    @error('nama')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
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
                        <option disabled selected>Pilih Bobot Kriteria</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="50">50</option>
                        <option value="60">60</option>
                        <option value="70">70</option>
                        <option value="80">80</option>
                        <option value="90">90</option>
                    </select>
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-success float-start mx-3" style="width:150px">Simpan</button>
                <button type="reset" class="btn btn-warning text-white float-start mx-2" style="width:150px">Reset</button>
                <a class="btn btn-danger float-end mx-5" href="{{route('kriteria.index')}}" type="button" style="width:150px">Batal</a>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.querySelector("#kriteriaForm");

        form.addEventListener("submit", function(event) {
            const bobotInput = document.querySelector("select[name='bobot']");
            const totalBobot = parseInt(bobotInput.value);

            if (totalBobot > 100) {
                event.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Total bobot Kriteria melebihi 100!',
                    html: 'Total bobot Kriteria anda sudah lebih dari 100! <br> Silahkan periksa kembali bobot pada Kriteria.',
                });
            }
        });
    });
</script>

@endsection