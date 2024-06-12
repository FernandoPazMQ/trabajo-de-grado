<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tgrado | www.maldito.com</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../public/css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="../public/img/apple-touch-icon.png">
    <link rel="shortcut icon" href="../public/img/favicon.ico">

    <!-- DATATABLES -->
    <link rel="stylesheet" type="text/css" href="../public/datatables/jquery.dataTables.min.css">
    <link href="../public/datatables/buttons.dataTables.min.css" rel="stylesheet"/>
    <link href="../public/datatables/responsive.dataTables.min.css" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-select.min.css">

  </head>
  <body class="hold-transition skin-purple-light sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo articulo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>AD</b>Ventas</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>REGISTRO</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../files/usuarios/1487132068.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Los Malditos</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../files/usuarios/1487132068.jpg" class="img-circle" alt="User Image">
                    <p>
                      www.incanatoit.com - Desarrollando Software
                      <small>www.youtube.com/jcarlosad7</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="../ajax/usuario.php?op=salir" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            <li id="mEscritorio">
              <a href="header.php">
                <i class="fa fa-tasks"></i> <span>Escritorio</span>
              </a>
            </li>
            <li id="mAlmacen" class="treeview">
              <a href="trabajos_de_grado.php">
                <i class="fa fa-file"></i>
                <span>Trabajos de Grado</span>
              </a>
            </li>
              <li id="mAlmacen" class="treeview">
              <a href="revision.php">
                <i class="fa fa-file-text"></i>
                <span>Revisiones docente</span>
              </a>
            </li>
              <li id="mAlmacen" class="treeview">
              <a href="#">
                <i class="fa fa-calendar"></i>
                <span>Fechas de entrega</span>
              </a>
            </li>

            </li>
              <li id="mAlmacen" class="treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>Estudiante</span>
              </a>
            </li>

            </li>
              <li id="mAlmacen" class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Docente</span>
              </a>
            </li>

            
            <li id="mConsultaC" class="treeview"></li>
            <li>
              <a href="ayuda.php">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="acerca.php">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h1 class="box-title">Escritorio</h1>
                  <div class="box-tools pull-right"></div>
                </div>
                <!-- /.box-header -->
                <!-- centro -->
                <div class="panel-body">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="small-box bg-purple">
                      <div class="inner">
                        <h4 style="font-size:17px;">
                          <strong>15</strong>
                        </h4>
                        <p>Trabajos de grado revisados</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-bag"></i>
                      </div>
                      <a href="ingreso.php" class="small-box-footer">info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="small-box bg-gray">
                      <div class="inner">
                        <h4 style="font-size:17px;">
                          <strong>32</strong>
                        </h4>
                        <p>Por revisar</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-bag"></i>
                      </div>
                      <a href="venta.php" class="small-box-footer">Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="panel-body">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="box box-primary">
                      <div class="box-header with-border"></div>
                      <div class="box-body">
                        <canvas id="compras" width="400" height="300"></canvas>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="box box-primary">
                      <div class="box-header with-border"></div>
                      <div class="box-body">
                        <canvas id="ventas" width="400" height="300"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
                <!--Fin centro -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 3.0.0
        </div>
        <strong>Copyright &copy; 2013-2019 <a href="http://www.incanatoit.com">IncanatoIT</a>.</strong> All rights reserved.
      </footer>
    </div><!-- /.wrapper -->

    <!-- jQuery -->
    <script src="../public/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../public/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../public/js/app.min.js"></script>

    <!-- DATATABLES -->
    <script src="../public/datatables/jquery.dataTables.min.js"></script>
    <script src="../public/datatables/dataTables.buttons.min.js"></script>
    <script src="../public/datatables/buttons.html5.min.js"></script>
    <script src="../public/datatables/buttons.colVis.min.js"></script>
    <script src="../public/datatables/jszip.min.js"></script>
    <script src="../public/datatables/pdfmake.min.js"></script>
    <script src="../public/datatables/vfs_fonts.js"></script>

    <script src="../public/js/bootbox.min.js"></script>
    <script src="../public/js/bootstrap-select.min.js"></script>
    <script src="../public/js/chart.min.js"></script>
    <script src="../public/js/Chart.bundle.min.js"></script>
    <script type="text/javascript">
      var ctxCompras = document.getElementById("compras").getContext('2d');
      var compras = new Chart(ctxCompras, {
        type: 'bar',
        data: {
          labels: ["14-5","13-5","6-5","8-4","13-9"],
          datasets: [{
            label: 'Compras en S/ de los últimos 10 días',
            data: [2.00,2.00,16.00,1700.00,200.00],
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
              'rgba(255,99,132,1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero:true
              }
            }]
          }
        }
      });

      var ctxVentas = document.getElementById("ventas").getContext('2d');
      var ventas = new Chart(ctxVentas, {
        type: 'bar',
        data: {
          labels: ["May","April","September"],
          datasets: [{
            label: 'Ventas en S/ de los últimos 12 Meses',
            data: [2.00,6269.00,1.00],
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
              'rgba(255,99,132,1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero:true
              }
            }]
          }
        }
      });
    </script>
  </body>
</html>
