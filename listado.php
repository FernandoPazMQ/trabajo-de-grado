<?php 
require 'header.php'; ?>

<!--Contenido-->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h1 class="box-title">
                            Tabla
                            <button class="btn btn-success" onclick="mostrarform(true)">
                                <i class="fa fa-plus-circle"></i> Agregar
                            </button>
                        </h1>
                        <div class="box-tools pull-right">
                            <!-- Aquí se pueden agregar herramientas adicionales si es necesario -->
                        </div>
                    </div><!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <!-- Aquí se puede agregar el contenido de la tabla de registros -->
                    </div>
                    <div class="panel-body" style="height: 400px;" id="formularioregistros">
                        <!-- Aquí se puede agregar el contenido del formulario de registros -->
                    </div>
                    <!--Fin centro -->
                </div><!-- /.box -->
            </div><!--/.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<!--Fin-Contenido-->

<?php require 'footer.php'; ?>
