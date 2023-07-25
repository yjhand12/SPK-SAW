<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STEPA - Hasil Seleksi</title>
    <link rel="icon" href="/assets/images/pilibist.jpg" type="image/x-icon">
    <meta name="theme-color" content="#ffffff">
    <link href="assets/vendor/css/theme.css" rel="stylesheet" />

  </head>
<body>
<main class="main" id="top">
{{-- Navbar --}}
@include('includes.navbar')


<section id="services">
    <div class="container">
        <div class="col-lg-12 mx-auto text-center mb-4">
            <h5 class="fw-light fs-3 fs-lg-5 lh-sm mb-3">Hasil Seleksi Penerimaan Mahasiswa Baru Program Studi<br>Rekayasa Keamanan Siber</h5>
                <div class="card mb-3 mt-5">
                    <div class="table-responsive px-3 pb-3" style="margin-top:10px">
                        <table id="dataTablesHasil" class="table align-items-center table-hover table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Asal Sekolah</th>
                                <th>Nilai Akhir</th>
                                <th>Keputusan</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hasil as $hasil)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $hasil->mahasiswa->nisn }}</td>
                                <td>{{ $hasil->mahasiswa->nama }}</td>
                                <td>{{ $hasil->mahasiswa->jenis_kelamin }}</td>
                                <td>{{ $hasil->mahasiswa->asal_sekolah }}</td>
                                <td>{{ $hasil->nilai }}</td>
                                <td>{{ $hasil->keputusan }}</td>
                                <td>{{ $hasil->keterangan   }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
</section>
</main>
{{-- Footer --}}
@include('includes.footer')


<script src="vendors/@popperjs/popper.min.js"></script>
<script src="vendors/bootstrap/bootstrap.min.js"></script>
<script src="vendors/is/is.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="assets/js/theme.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="/assets/bootstrap/datatables/js/jquery.dataTables.min.js"></script>
<script src="/assets/bootstrap/datatables/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function(){
        $('#dataTablesHasil').DataTable({
            ordering: false,
            lengthMenu: [[10], [10]]
        });
    });
</script>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
</body>
</html>