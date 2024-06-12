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
              <i class="fa fa-file"></i> <span>Trabajos de Grado</span>
            </a>
          </li>
          <li id="mAlmacen" class="treeview">
            <a href="revision.php">
              <i class="fa fa-file-text"></i> <span>Revisiones docente</span>
            </a>
          </li>
          <li id="mAlmacen" class="treeview">
            <a href="#">
              <i class="fa fa-calendar"></i> <span>Fechas de entrega</span>
            </a>
          </li>
          <li id="mAlmacen" class="treeview">
            <a href="#">
              <i class="fa fa-user"></i> <span>Estudiante</span>
            </a>
          </li>
          <li id="mAlmacen" class="treeview">
            <a href="#">
              <i class="fa fa-laptop"></i> <span>Docente</span>
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
    <div class="content-wrapper">
      <section class="content-header">
        <h1>Fechas de Entrega</h1>
      </section>
      <section class="content">
      <section class="content">
  <form action="procesar.php" method="post">
    <label for="fecha_entrega">Fecha de Entrega:</label>
    <input type="date" id="fecha_entrega" name="fecha_entrega" required>
    <label for="id_trabajo">ID Trabajo:</label>
    <input type="text" id="id_trabajo" name="id_trabajo" required>
    <button type="submit" name="accion" value="agregar">Agregar</button>
  </form>

  <table>
    <thead>
      <tr>
        <th>Acciones</th>
        <th>id_fecha_entrega</th>
        <th>fecha_entrega</th>
        <th>id_trabajo</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $conexion = mysqli_connect('localhost', 'root', '', 'trabajo_de_grado');
        if (!$conexion) {
          die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM fechasdeentrega";
        $result = mysqli_query($conexion, $sql);

        while ($mostrar = mysqli_fetch_array($result)) {
      ?>
      <tr>
        <td>
          <a href="procesar.php?id=<?php echo $mostrar['id_fecha_entrega']; ?>&accion=eliminar" class="eliminar">
            <i class="fa fa-trash"></i> Eliminar
          </a>
          <a href="editar.php?id=<?php echo $mostrar['id_fecha_entrega']; ?>">
            <i class="fa fa-edit"></i> Editar
          </a>
        </td>
        <td><?php echo $mostrar['id_fecha_entrega']; ?></td>
        <td><?php echo $mostrar['fecha_entrega']; ?></td>
        <td><?php echo $mostrar['id_trabajo']; ?></td>
      </tr>
      <?php
        }
        mysqli_close($conexion);
      ?>
    </tbody>
  </table>
</section>

<style>
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
  th {
    background-color: #f2f2f2;
  }
</style>



<script>
  document.querySelectorAll('.eliminar').forEach(function(element) {
    element.addEventListener('click', function(event) {
      if (!confirm("¿Estás seguro de que deseas eliminar esta fila?")) {
        event.preventDefault();
      }
    });
  });
</script>



    </div>
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
</body>
</html>
