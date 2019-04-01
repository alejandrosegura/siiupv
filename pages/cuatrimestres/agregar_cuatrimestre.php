<?php
  require '../basedatos/conexion.php';

    $table = 'cuatrimestres';
    $errores = '';

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
          $query = "insert into {$table} values ({$id},'{$desc}','{$inicio}','{$termino}');";
          $agregar = crear_registro($conexion,$query);
          if($agregar){
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

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
<div class="row" >
        <div class="col-xs-6">
          <div class="box" >
            <div class="box-header">
              <h3 class="box-title">Cuatrimestres</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" align="">
              <!-- form start -->
              <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input type="text" class="form-control" name="id" placeholder="Ingrese el ID" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" placeholder="Ingrese una descripcion" required>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Fecha Inicio</label>
                    <input type="date" class="form-control" name="inicio" placeholder="" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Fecha Termino</label>
                    <input type="date" class="form-control" name="termino" placeholder="" required>
                  </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
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
