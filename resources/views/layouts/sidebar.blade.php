<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{  asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Data Akademik</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= asset('assets/dist/img/avatar5.png') ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                {{-- <li class="nav-item">
                    <a href="/" class="nav-link {{ request()->is('/') ? "active" : "" }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li> --}}
                <li class="nav-header">IOT Monitoring Tempat Sampah</li>
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link {{ request()->is('dashbord') ? "active" : "" }}">
                        <i class="fas fa-tools nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @if(Auth::user()->role == "isAdmin")
                <li class="nav-item">
                    <a href="/bobot_sampah" class="nav-link {{ request()->is('bobot_sampah') ? "active" : "" }}">
                        <i class="fas fa-trash nav-icon"></i>
                        <p>Bobot Sampah</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/indikator_sampah" class="nav-link {{ request()->is('indikator_sampah') ? "active" : "" }}">
                        <i class="fas fa-chart-line nav-icon"></i>
                        <p>Indikator Sampah</p>
                    </a>
                </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
