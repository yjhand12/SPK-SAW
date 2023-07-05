@extends('layouts.admin')

@section('title')
    STEPA - Dashboard
@endsection

@section('content')
<nav aria-label="breadcrumb" style="font-size:25px">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Dashboard Admin</a></li>
    </ol>
</nav>
<div class="card mb-3">
    <div class="table-responsive" style="margin-top:10px; min-height:500px">
        <div class="mx-4">
            <p style="font-size:22px;">Sistem Penerimaan Mahasiswa Baru Program Studi Rekayasa Keamanan Siber Politeknik Bhakti Semesta (STEPA)</p><br>
            <div class="row">
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="{{route('mahasiswa.index')}}" class="text-secondary text-decoration-none">Data Mahasiswa</a></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="{{route('kriteria.index')}}" class="text-secondary text-decoration-none">Data Kriteria</a></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-cube fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="{{route('sub-kriteria.index')}}" class="text-secondary text-decoration-none">Data Sub Kriteria</a></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-cubes fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-secondary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="{{route('nilai.index')}}" class="text-secondary text-decoration-none">Data Nilai</a></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-edit fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="{{route('hasil.index')}}" class="text-secondary text-decoration-none">Data Hasil Seleksi</a></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-chart-area fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection