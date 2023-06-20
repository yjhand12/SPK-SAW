<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="/assets/images/pilibist.jpg" type="image/x-icon">

    {{-- Style --}}
    @stack('prepend-style')
    <link rel="stylesheet" href="/assets/css/style.css">
	<link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.css">
  	<link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/ruang-admin.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/datatables/css/dataTables.bootstrap5.min.css">
    @stack('addon-style')

</head>

<body style="background-color:#c8e5f0;">
<div id="wrapper">
    {{-- Sidebar --}}
    @include('includes.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
        <div class="content">
            {{-- Navbar --}}
            @include('includes.navbar-admin')

            <div class="container" id="container-wrapper">
                {{-- Page Content --}}    
                @yield('content')
            </div>

        </div>
    </div>
</div>
<a class="scroll-to-top text-white rounded" onclick="window.scrollTo(0, 0)">
    <i class="fas fa-angle-up"></i>
</a>
@stack('prepend-script')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="/assets/bootstrap/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/assets/bootstrap/datatables/js/dataTables.bootstrap5.min.js"></script>
    <script src="/assets/jquery-easing/jquery.easing.min.js"></script>
    <script src="/assets/js/dselect.js"></script>
	<script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js"></script>
@stack('addon-script')
</body>
</html>