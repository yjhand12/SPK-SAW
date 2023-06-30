<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STEPA - Home</title>
    <link rel="icon" href="/assets/images/pilibist.jpg" type="image/x-icon">
    <meta name="theme-color" content="#ffffff">
    <link href="assets/vendor/css/theme.css" rel="stylesheet" />

  </head>
<body>
<main class="main" id="top">
{{-- Navbar --}}
@include('includes.navbar')
<section class="py-0" id="home">
    <div class="bg-holder d-none d-md-block" style="background-image:url(assets/vendor/img/gallery/hero.png);background-position:right bottom;background-size:contain;margin-top:5.625rem;">
    </div>
        <div class="container">
          <div class="row align-items-center min-vh-md-75 mt-7">
            <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
            @php
             echo "<h1>Halo " .Auth::user()->nama. "! Selamat Datang di</h1>"
            @endphp
              <h1 class="mt-5 mb-sm-4 display-4 fw-light lh-sm fs-4 fs-lg-6 fs-xxl-7">Sistem Penerimaan Mahasiswa Baru <span class="text-primary">STEPA</span><br class="d-block d-lg-none d-xl-block" />Program Studi RKS </h1>
              <p class="mb-5 fs-1 lh-lg">Menyelenggarakan seleksi penerimaan mahasiswa baru Program Studi Rekayasa Keamanan Siber Politeknik Bhakti Semesta dengan Cepat, Efektif, dan Transparan.</p><a class="btn btn-lg btn-primary hover-top btn-glow" href="{{route('hasil-seleksi')}}">Cek Hasil Seleksi
                <svg class="bi bi-arrow-right-short ms-2" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                </svg></a>
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

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
</body>
</html>