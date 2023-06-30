<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto pt-2 pt-lg-0 font-base">
                <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link fw-medium active" href="{{route('dashboard')}}">Home</a></li>
                <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link fw-medium active" href="{{route('hasil-seleksi')}}">Hasil</a></li>
            </ul>
            <form class="ps-lg-5" action="{{route('logout')}}" method="POST">
                {{ csrf_field() }}
                <button class="btn btn-outline-primary order-0" type="submit">Logout</button>
            </form>
        </div>
    </div>
</nav>
