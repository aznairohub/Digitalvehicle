<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>police| Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">

    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-primary">
      <ul class="nav" >
        <li class="nav-item">
          <h2 >Digital Vehicle</h2>
        </li>
      </ul>
    </nav>


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <div class="sidebar">
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/police" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v1</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  PUNISHMENT


                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/addpunishment" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>ADD PUNISHMENT</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/viewpunishment" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>VIEW PUNISHMENT</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
            <li class="nav-item">
              <a href="/viewrdetails" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  VIEW RC BOOK

                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/viewldetails" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  VIEW LISENCE

                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/policeprofile" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  VIEW PROFILE

                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/logout" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                 Logout
                </p>
              </a>
            </li>




            </li>
            </li>
            </li>
            <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    @yield('police_body')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <!-- /.content-header -->

      <!-- Main content -->

      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="/plugins/moment/moment.min.js"></script>
  <script src="/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="/dist/js/pages/dashboard.js"></script>
</body>

</html>