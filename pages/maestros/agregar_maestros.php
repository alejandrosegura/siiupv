

<?php
  require '../basedatos/conexion.php';

 ?>
 <!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<?php require '../menus/head.php' ?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php require '../menus/header.php' ?>
  <?php require '../menus/sidebar.php' ?>

  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
<div class="row" >
        <div class="col-xs-6">
          <div class="box" >
            <div class="box-header">
              <h3 class="box-title">Maestros</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" align="">
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="">CURP</label>
                    <input type="text" class="form-control" id="curp" placeholder="Ingrese una descripcion">
                  </div>
                  <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="">
                  </div>
                  <div class="form-group">
                   <label for="">Paterno</label>
                   <input type="text" class="form-control" id="paterno" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Materno</label>
                    <input type="text" class="form-control" id="materno" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">NSS</label>
                    <input type="text" class="form-control" id="nss" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Telefono movil</label>
                    <input type="text" class="form-control" id="telefono_movil" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Telefono Casa</label>
                    <input type="text" class="form-control" id="telefono_casa" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Fecha Nacimiento</label>
                    <input type="date" class="form-control" id="nacimiento" placeholder="">
                  </div>

                  <div class="form-group">
                    <label for="">Numero empleado</label>
                    <input type="number" class="form-control" id="numero_empleado" placeholder="">
                  </div>

                  <div class="form-group">
                    <label for="">Grado Academico</label>
                    <select name="grado_academico" class="form-control">
                      <option value="Prepa">Prepa</option>
                      <option value="Lic">Lic</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="">Tipo contraro</label>
                    <select name="tipo_contrato" class="form-control">
                      <option value="PA">PA</option>
                      <option value="PTC">PTC</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="">Carrera</label>
                    <select name="carrera" class="form-control">
                      <option value="0">0</option>
                    </select>
                  </div>


                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        <!-- /.col -->
      </div>






    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <?php require '../menus/footer.php' ?>

</div>

</body>
</html>
