<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UHN Graduation</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('lte/plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('lte/plugins/jqvmap/jqvmap.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('lte/dist/css/adminlte.min.css')); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('lte/plugins/daterangepicker/daterangepicker.css')); ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('lte/plugins/summernote/summernote-bs4.min.css')); ?>">
  <!-- FullCalendar CSS -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('lte/plugins/fullcalendar/main.css')); ?>">
   <!-- Font Kustom -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::asset('lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::asset('lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('lte/plugins/daterangepicker/daterangepicker.css')); ?>">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="lte/dist/img/nommensen.png" alt="AdminLTELogo" height="110" width="120">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <div class="row">
            <div>
              <img src="lte/dist/img/user2-160x160.jpg" style="height: 20px;" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="col-md">
              <p style="text: size 12px;"><?php echo e(Auth::user()->name); ?></p>
            </div>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="/logout" class="dropdown-item dropdown-footer">Logout</a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
      <img src="lte/dist/img/nommensen.png" alt="AdminLTE Logo" style="height: 100px;width: 100px;">
      <span class="brand-text font-weight-light">Universitas HKBP<br>Nommensen</span>
    </a>
  
    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Dashboard side menu -->
          <?php if(Auth::user()->role == 'Admin'): ?>
          <li class="nav-item menu-open">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <!-- wisudan sidebar menu -->
          <li class="nav-item">
            <a href="/mahasiswa" class="nav-link">
              <i class="nav-icon fa fa-graduation-cap"></i>
              <p>
                Daftar Wisudawan
              </p>
            </a>
          </li>
          <?php endif; ?>
          <!-- wisudan upload menu -->
           <?php if(Auth::user()->role == 'Mahasiswa'): ?>
          <li class="nav-item">
            <a href="/upload" class="nav-link">
              <i class="nav-icon fa fa-folder"></i>
              <p>
                Upload Dokumen
              </p>
            </a>
          </li>
          <?php endif; ?>
          <!-- wisudan pengumuman menu -->
          <li class="nav-item">
            <a href="/pengumuman" class="nav-link">
              <i class="nav-icon fas fa-bullhorn"></i>
              <p>
                Pengumuman
              </p>
            </a>
          </li>
          
          <!--Setting-->
          <li class="nav-header">Setting</li>
          <li class="nav-item">
            <a href="iframe.html" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>Users</p>
              <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <?php if(Auth::user()->role == 'Admin'): ?>
              <li class="nav-item">
                <a href="/admin-register" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Users</p>
                </a>
              </li>
              <?php endif; ?>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Password</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <?php echo $__env->yieldContent('content'); ?>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container text-center">
      <strong>Univesitas HKBP Nommensen &copy; 7 Oktober 1954</strong>
      All rights reserved.
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
<script src="<?php echo e(URL::asset('lte/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(URL::asset('lte/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(URL::asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo e(URL::asset('lte/plugins/chart.js/Chart.min.js')); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo e(URL::asset('lte/plugins/sparklines/sparkline.js')); ?>"></script>
<!-- JQVMap -->
<script src="<?php echo e(URL::asset('lte/plugins/jqvmap/jquery.vmap.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('lte/plugins/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo e(URL::asset('lte/plugins/jquery-knob/jquery.knob.min.js')); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo e(URL::asset('lte/plugins/moment/moment.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('lte/plugins/daterangepicker/daterangepicker.js')); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo e(URL::asset('lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
<!-- Summernote -->
<script src="<?php echo e(URL::asset('lte/plugins/summernote/summernote-bs4.min.js')); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo e(URL::asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(URL::asset('lte/dist/js/adminlte.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(URL::asset('lte/dist/js/demo.js')); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(URL::asset('lte/dist/js/pages/dashboard.js')); ?>"></script>
<!-- FullCalendar JS -->
<script src="<?php echo e(URL::asset('lte/plugins/fullcalendar/main.js')); ?>"></script>
<script src="<?php echo e(URL::asset('lte/plugins/moment/moment.min.js')); ?>"></script>
<!-- JS Kustom -->
<script src="<?php echo e(URL::asset('js/custom.js')); ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo e(URL::asset('lte/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('lte/plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('lte/plugins/datatables-buttons/js/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('lte/plugins/jszip/jszip.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('lte/plugins/pdfmake/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('lte/plugins/pdfmake/vfs_fonts.js')); ?>"></script>
<script src="<?php echo e(URL::asset('lte/plugins/datatables-buttons/js/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('lte/plugins/datatables-buttons/js/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('lte/plugins/datatables-buttons/js/buttons.colVis.min.js')); ?>"></script>
<!-- date-range-picker -->
<script src="<?php echo e(URL::asset('lte/plugins/daterangepicker/daterangepicker.js')); ?>"></script> 

<!-- Page specific script -->
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()
  })
</script>

<!-- Inisialisasi FullCalendar JS -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('mini-calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: ''
      },
      height: 'auto',
      contentHeight: 200,
      editable: false,
      events: [
        {
          title: 'Event 1',
          start: '2024-08-01'
        },
        {
          title: 'Event 2',
          start: '2024-08-07'
        }
      ]
    });

    calendar.render();
  });
</script>


<style>
  /* Mengatur ukuran dan jenis tulisan pada judul kalender dengan font kustom */
.fc-toolbar-title {
  font-size: 1em;
  font-family: 'Moderustic', sans-serif; /* Menggunakan font kustom */
  color: #030202;
}

/* Mengatur ukuran dan jenis tulisan pada header toolbar kalender dengan font kustom */
.fc-header-toolbar {
  font-size: 1em;
  font-family: 'Moderustic', sans-serif; /* Menggunakan font kustom */
  color: #0a0202;

}

/* Mengatur ukuran dan jenis tulisan pada hari-hari dalam bulan dengan font kustom */
.fc-daygrid-day-number {
  font-size: 1.2em;
  font-family: 'Moderustic', sans-serif; /* Menggunakan font kustom */
  color: #0a0202;
}

/* Mengatur ukuran dan jenis tulisan pada event di kalender dengan font kustom */
.fc-event {
  font-size: 0.9em;
  font-family: 'Moderustic', sans-serif; /* Menggunakan font kustom */
  color: #000000;
}

  /* Mengubah warna teks pada header kalender */
  .fc-toolbar-title {
    color: #000000; /* Ganti dengan warna yang diinginkan */
  }

  /* Mengubah warna latar belakang header kalender */
  .fc-header-toolbar {
    background-color: #527699; /* Ganti dengan warna latar belakang yang diinginkan */
  }

  /* Mengubah warna garis kolom pada kalender */
  .fc-daygrid-day {
    border-color: #000000; /* Ganti dengan warna garis kolom yang diinginkan */
  }

  /* Mengubah warna teks pada hari kalender */
  .fc-daygrid-day-number {
    color: #000000; /* Ganti dengan warna teks hari yang diinginkan */
  }

  /* Mengubah warna latar belakang hari yang dipilih */
  .fc-daygrid-day.fc-day-today {
    background-color: #3dbd3d; /* Ganti dengan warna latar belakang hari yang diinginkan */
    color: #030202; /* Ganti dengan warna teks hari yang diinginkan */
  }

  /* Mengubah warna latar belakang event */
  .fc-event {
    background-color: #8cbaeb; /* Ganti dengan warna latar belakang event yang diinginkan */
    color: #000000; /* Ganti dengan warna teks event yang diinginkan */  
  }

</style>

</body>
</html>
<?php /**PATH D:\Nommensen Internship\master_uhn\resources\views/layout/main.blade.php ENDPATH**/ ?>