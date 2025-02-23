<x-laravel-ui-adminlte::adminlte-layout>

    <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Main Header -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="https://assets.infyom.com/logo/blue_logo_150x150.png"
                             class="user-image img-circle elevation-2" alt="User Image">
                        <span class="d-none d-md-inline font-weight-bold">Thiago Vinny</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- User image -->
                        <li class="user-header bg-primary text-center">
                            <img src="https://assets.infyom.com/logo/blue_logo_150x150.png"
                                 class="img-circle elevation-2 mb-2" alt="User Image">
                            <p>
                                <strong>Thiago Vinny</strong>
                                <small>Member since 22/10</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer d-flex justify-content-between">
                            <a href="#" class="btn btn-primary btn-flat">Profile</a>
                            <a href="#" class="btn btn-danger btn-flat"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Sign out
                            </a>
                            <form id="logout-form" action="#" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header text-center py-3">
                <h1 class="m-0 text-dark"></h1>
            </section>
            <section class="content container-fluid">
                @yield('content')
            </section>
        </div>

        <!-- Main Footer -->
        <footer class="main-footer bg-light text-center py-2">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>&copy; 2014-2023 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>
    </body>
</x-laravel-ui-adminlte::adminlte-layout>
