<?php

include("conexion.php");
 if (isset($_POST['Insert'])){
    $nombre    =   $_POST['nombre'];
    $apellido  =   $_POST['apellido'];
    $cedula    =   $_POST['cedula'];
    $telefono  =   $_POST['telefono'];
    $correo    =   $_POST['correo'];
    $direccion =   $_POST['direccion'];
    $fecha_pago=   $_POST['fecha_pago'];
    $id_estado =   $_POST['id_estado'];

    $insert= "INSERT INTO cotizante (id_cotizante, nombre, apellido, cedula, telefono, correo, direccion, fecha_pago,id_usuario,id_estado)
                VALUES (null, '$nombre', '$apellido', '$cedula','$telefono', '$correo', '$direccion', '$fecha_pago',null,'$id_estado')";
                $query = $conexion -> query($insert);
                if ($query){
                   header ("Location: ../View/temple/Cotizantes.php");
                }else{
                    echo '
                    <!DOCTYPE html>
            <html lang="en">


            <!-- errors-503.html  21 Nov 2019 04:05:02 GMT -->
            <head>
            <meta charset="UTF-8">
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
            <title>Otika - Admin Dashboard Template</title>
            <!-- General CSS Files -->
            <link rel="stylesheet" href="../View/temple/assets/css/app.min.css">
            <!-- Template CSS -->
            <link rel="stylesheet" href="../View/temple/assets/css/style.css">
            <link rel="stylesheet" href="../View/temple/assets/css/components.css">
            <!-- Custom style CSS -->
            <link rel="stylesheet" href="../View/temple/assets/css/custom.css">
            </head>
                    <div class="loader"></div>
                    <div id="app">
                      <section class="section">
                        <div class="container mt-5">
                          <div class="page-error">
                            <div class="page-inner">
                              <h1>503</h1>
                              <div class="page-description">
                                Be right back.
                              </div>
                              <div class="page-search">
                                <form>
                                  <div class="form-group floating-addon floating-addon-not-append">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">
                                          <i class="fas fa-search"></i>
                                        </div>
                                      </div>
                                      <input type="text" class="form-control" placeholder="Search">
                                      <div class="input-group-append">
                                        <button class="btn btn-primary btn-lg">
                                          Search
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                                <div class="mt-3">
                                  <a href="index.html">Back to Home</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                    </div>
                    <!-- General JS Scripts -->
                    <script src="../View/temple/assets/js/app.min.js"></script>
                    <!-- JS Libraies -->
                    <!-- Page Specific JS File -->
                    <!-- Template JS File -->
                    <script src="../View/temple/assets/js/scripts.js"></script>
                    <!-- Custom JS File -->
                    <script src="../View/temple/assets/js/custom.js"></script>
                  </body>
                  
                  
                  <!-- errors-503.html  21 Nov 2019 04:05:02 GMT -->
                  </html>' 
                    ;
                }
            }