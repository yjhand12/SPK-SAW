<ul class="navbar-nav sidebar sidebar-light accordion d-print-none" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <img src="/assets/images/pilibist.jpg">
        </div>
        <div class="sidebar-brand-text mx-3">STEPA</div>
    </a>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin-dashboard')}}">
                <i class="fas fa-home"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Mahasiswa
            </div>
            <li class="nav-item">
                <a class="nav-link" href="{{route('mahasiswa.index')}}">
                    <i class="fas fa-users"></i>
                    <span>Mahasiswa</span>
                </a>
            </li>
        <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Kriteria
            </div>
            <li class="nav-item">
                <a class="nav-link" href="{{route('kriteria.index')}}">
                    <i class="fas fa-cube"></i>
                    <span>Kriteria</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('sub-kriteria.index')}}">
                    <i class="fas fa-cubes"></i>
                    <span>Sub Kriteria</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Nilai
            </div>
            <li class="nav-item">
                <a class="nav-link" href="{{route('nilai.index')}}">
                    <i class="fas fa-edit"></i>
                    <span>Nilai Mahasiswa</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Hasil
            </div>
            <li class="nav-item">
                <a class="nav-link" href="{{route('hasil.index')}}">
                    <i class="fas fa-chart-area"></i>
                    <span>Hasil Seleksi</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Fitur
            </div>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Keluar</span>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    </form>
                </a>
            </li>
        
</ul>

