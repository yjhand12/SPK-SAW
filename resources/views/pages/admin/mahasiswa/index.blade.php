@extends('layouts.admin')

@section('title')
    Mahasiswa
@endsection

@section('content')
<nav aria-label="breadcrumb" style="font-size:25px">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Mahasiswa</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Mahasiswa</li>
    </ol>
</nav>
<div class="card mb-3">
        <div class="card-header d-flex flex-row align-items-end">
            <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary" style="width:250px">Tambah Mahasiswa</a>
        </div>
    <div class="table-responsive px-3 pb-3" style="margin-top:10px">
        <table id="dataTables" class="table align-items-center table-hover table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Tempat Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Asal Sekolah</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswa as $mahasiswa)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$mahasiswa->nisn}}</td>
                    <td>{{$mahasiswa->nama}}</td>
                    <td>{{$mahasiswa->tempat_lahir}}, {{$mahasiswa->tanggal_lahir}}</td>
                    <td>{{$mahasiswa->jenis_kelamin}}</td>
                    <td>{{$mahasiswa->asal_sekolah}}</td>
                    <td class="d-flex">
                        <a class="btn btn-sm btn-info text-white mx-1" href="{{route('mahasiswa.edit', $mahasiswa->id)}}" type="button" style="margin-bottom:5px">Edit</a>
                        <form action="{{route('mahasiswa.destroy', $mahasiswa->id)}}" method="POST" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger mx-2 delete-button" type="button" value="Hapus">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('addon-script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function(){
        $('.delete-button').click(function(){
            var form = $(this).closest('.delete-form');
            var mahasiswaName = form.data('name');

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data " + mahasiswaName + " akan dihapus permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });

        $('#dataTables').DataTable();
    });
</script>
@endpush