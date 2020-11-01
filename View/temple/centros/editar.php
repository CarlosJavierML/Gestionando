<!DOCTYPE html>
<html lang="en">


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Gestionando</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="../assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/style2.css">
  <link rel="stylesheet" href="../assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="../assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='../../../img/xd-removebg-preview.png' /></head>

<body >
<div id="principal">
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <!-- add content here -->
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div  class="card-header">
                    <font color="#295566"><h3>Editar centro</h3></font>
                  </div>
                  <div class="card-body">
                  
                  <?php 
                    include("../conexion/function.php");
                    $id_centro = $_GET['id_centro'];
                    select_id('centro','id_centro',$id_centro);
                    ?>
                    <form action="" method="post">
                    <div class="form-group">
                      <label>Nombre </label>
                      <input name="nombre" type="text" class="form-control form-control-lg" value="<?php echo $row->nombre;?>">
                    </div>
                    <div class="form-group">
                      <label>Estado </label>
                      <input name="id_estado" type="text" class="form-control form-control-lg" value="<?php echo $row->id_estado;?>">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Guardar</button>
                <a type="button" class="btn btn-secondary" href="../centro.php" >Cancelar</a>
              </div>
                    </form>

                    <?php
                      
                      if(isset($_POST['submit'])){
                        $field = array("nombre"=>$_POST['nombre'], "id_estado"=>$_POST['id_estado']);
                        $tbl = "centro";
                        edit($tbl,$field,'id_centro',$id_centro);
                        header("location: ../centro.php");
                      }
                    ?>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
      </div>
      </div>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="../assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="../assets/js/custom.js"></script>
</body>


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
</html>