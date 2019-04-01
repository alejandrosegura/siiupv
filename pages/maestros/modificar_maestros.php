<?php
  require '../basedatos/conexion.php';
  $dato = $_GET['id'];
  $res= obtener_resultado_por_id($conexion,$dato,'cuatrimestres');
  define('RAIZ','../../');
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

     <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar nuevo cuatrimestre</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <?php foreach ($res as $res2) {    ?>
              <div class="box-body">
                <div class="form-group">

                  <label for="exampleInputEmail1">ID</label>
                  <input type="text" class="form-control" id="id" placeholder="Ingrese el ID" value=" <?php echo $res2["id"]?> ">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Descripcion</label>
                  <input type="text" class="form-control" id="descripcion" placeholder="Ingrese una descripcion" value="<?php echo $res2["descripcion"]?>">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Fecha Inicio</label>
                  <input type="date" class="form-control" id="inicio"   value="<?php echo $res2["fecha_inicio"]?>" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Fecha Termino</label>
                  <input type="date" class="form-control" id="termino"   value="<?php echo $res2["fecha_termino"]?>">
                </div>

              </div>
              <!-- /.box-body -->
                <?php } ?>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>







    </section>
    <!-- /.content -->
  <?php require  '../menus/footer.php' ?>
</body>
</html>
