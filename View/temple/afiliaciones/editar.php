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
                    <font color="#295566"><h3>Editar afiliacion</h3></font>
                  </div>
                  <div class="card-body">
                  
                  <?php 
                    include("../conexion/function.php");
                    $id_afi = $_GET['id_afi'];
                    select_id('afiliacion','id_afi',$id_afi);
                    ?>
                    <form action="" method="post">
                    <div class="form-group">
                      <label>Cotizante </label>
                      <input name="id_cotizante" type="text" class="form-control form-control-lg" readonly="readonly" value="<?php echo $row->id_cotizante;?>">
                    </div>

                    <div class="form-group">
                      <label>Entidad </label>
                      <input name="id_ent" type="text" class="form-control form-control-lg" value="<?php echo $row->id_ent;?>">
                    </div>
                    <div class="form-group">
                      <label>Centro </label>
                      <input name="id_centro" type="text" class="form-control form-control-lg" value="<?php echo $row->id_centro;?>">
                    </div>
                    <div class="form-group">
                      <label>Total_pagado </label>
                      <input name="total_pagar" type="text" class="form-control form-control-lg" value="<?php echo $row->total_pagar;?>">
                    </div>
                    <div class="form-group">
                      <label>Estado</label>
                      <input name="id_estado" type="text" class="form-control form-control-lg" value="<?php echo $row->id_estado;?>">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Guardar</button>
                <a type="button" class="btn btn-secondary" href="../afiliacion.php" >Cancelar</a>
              </div>
                    </form>

                    <?php
                      
                      if(isset($_POST['submit'])){
                        $field = array("id_cotizante"=>$_POST['id_cotizante'], "id_ent"=>$_POST['id_ent'], 
                        "id_centro"=>$_POST['id_centro'], "total_pagar"=>$_POST['total_pagar'], "id_estado"=>$_POST['id_estado']);
                        $tbl = "afiliacion";
                        edit($tbl,$field,'id_afi',$id_afi);
                        header("location: ../afiliacion.php");
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