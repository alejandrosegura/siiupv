<?php
  require '../basedatos/conexion.php';
  $dato = $_GET['id'];
  $res= obtener_resultado_por_id($conexion,$dato,'cuatrimestres');

  if(isset($_POST['submit'])){

      $id = $_POST['id'];
      $desc = $_POST['descripcion'];
      $inicio = $_POST['inicio'];
      $termino = $_POST['termino'];


      if(empty($id)){
        $errores = 'Dame tu nombre <br/>';
      }

      if(empty($desc)){
        $errores .= 'Dame tu correo <br/>';
      }

      if(empty($inicio)){
        $errores .= 'Dame tu mensaje <br/>';
      }

      if(empty($termino)){
        $errores .= 'Dame tu mensaje <br/>';
      }

      if(empty($errores)){
        $query = "update cuatrimestres SET descripcion='{$desc}',fecha_inicio='{$inicio}',fecha_termino='{$termino}' WHERE id={$id}";
        $actualizar = crear_registro($conexion,$query); 
        if($actualizar){
          redirect('cuatrimestres.php');
        }
      }
  }
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
              <h3 class="box-title">Modificar cuatrimestre</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . "?id={$dato}" ?>" role="form">
              <?php foreach ($res as $cuatri) {    ?>
              <div class="box-body">
                <div class="form-group">

                  <label for="">ID</label>
                  <input type="text" class="form-control" name="id" placeholder="Ingrese el ID" value=" <?php echo $cuatri["id"]?> " required readonly>
                </div>
                <div class="form-group">
                  <label for="">Descripcion</label>
                  <input type="text" class="form-control" name="descripcion" placeholder="Ingrese una descripcion" value="<?php echo $cuatri["descripcion"]?>" required>
                </div>
                 <div class="form-group">
                  <label for="">Fecha Inicio</label>
                  <input type="date" class="form-control" name="inicio"   value="<?php echo $cuatri["fecha_inicio"]?>" required>
                </div>
                <div class="form-group">
                  <label for="">Fecha Termino</label>
                  <input type="date" class="form-control" name="termino"   value="<?php echo $cuatri["fecha_termino"]?>" required>
                </div>

              </div>
              <!-- /.box-body -->
                <?php } ?>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
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
