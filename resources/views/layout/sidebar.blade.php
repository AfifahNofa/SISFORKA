<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">ADMIN</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item ">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Profil</span>
        </a>
        <div id="collapsePages" class="collapse " aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Halaman:</h6>
                <a class="collapse-item" href="{{ url('/guru') }}">Data Guru</a>
                <a class="collapse-item" href="{{ url('/siswa') }}">Data Siswa</a>
                {{-- <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item " href="blank.html">Blank Page</a> --}}
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/ekstrakulikuler') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Ekstrakurikuler</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/pembina') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Pembina</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/jadwalekstra') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Jadwal Ekstrakurikuler</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/prestasi') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Prestasi</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/artikeladmin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Artikel</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/kontakadmin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Kontak</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/kalender') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Kalender</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/ppdb') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>PPDB</span></a>
    </li>

    {{-- <li class="nav-item">
        <a class="nav-link" href="{{ url('/saranaadmin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Sarana dan Prasarana</span></a>
    </li> --}}

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/sarana') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Sarana</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
