<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Aplicacion</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Usuario</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon fa fa-th"></i>
                        <p>
                            Inicio
                            <span class="right badge badge-danger">Info</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-pie-chart"></i>
                        <p>
                            Personas
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('personas.index') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Listado</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('personas.create') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Crear Persona</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">Administracion</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-plus-square-o"></i>
                        <p>
                            Sistema
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/examples/404.html" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Errores</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/500.html" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Estado</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">Acerca de</li>
                <li class="nav-item">
                    <a href="https://adminlte.io/docs" class="nav-link">
                        <i class="nav-icon fa fa-file"></i>
                        <p>Manual</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://adminlte.io/docs" class="nav-link">
                        <i class="nav-icon fa fa-file"></i>
                        <p>Soporte</p>
                    </a>
                </li>
                <li class="nav-header">Opciones</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-circle-o text-primary"></i>
                        <p class="text">Contacto</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
