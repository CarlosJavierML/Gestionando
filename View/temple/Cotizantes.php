<!--SESION-->
<?php
include("../../Controller/conexion.php");
session_start();
if(empty($_SESSION['active']))
	{
		header('location: ../');
	}
?>
<!--actualizar-->
<?php
 if(isset($_POST['consultar']))
 {    
     $id  = $_POST['id'];
     $consulta ="SELECT * FROM cotizante WHERE id_centro = '$id'";
    $resultados =  $conexion -> query($consulta);
    while($consulta = $resultados->fetch()){
     $consulta=$_POST['nombre'];
  }
}

?>

<!DOCTYPE html>
<html lang="en">


<!-- datatables.html  21 Nov 2019 03:55:21 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Gestionando</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='../../img/xd-removebg-preview.png' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Buscar" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
        
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/user.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Bienvenido
              <?php
                                            echo $_SESSION['user'].' -'.$_SESSION['rol']; 
                                            ?>
                                            </div>
              <a href="profile.php" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Perfil
              </a>
               
              <a  href="../Login/cerrar.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Cerrar
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="centro.php"> <img alt="image" src="../../img/xd-removebg-preview (1).png" width="180" height="63"/> 
               
            </a>
          </div>
          <?php
          if($_SESSION['rol'] == 1){
              echo '
          <ul class="sidebar-menu">
            <li class="menu-header">Menu </li>
            <li class="dropdown">
              <a href="index.php" class="nav-link"><i class="fas fa-home"></i><span>Inicio</span></a>
            </li>
            <li class="menu-header">Acciones</li>
            <li class="dropdown">
              <a href="centro.php" class="nav-link"><i class="fas fa-hospital"></i><span>Centro</span></a>
            </li>
            <li class="dropdown">
              <a href="administradora.php" class="nav-link"><i class="fas fa-hotel"></i><span>Administradora</span></a>
            </li>
            <li class="dropdown">
              <a href="estado.php" class="nav-link"><i class="far fa-check-circle"></i><span>Estado</span></a>
            </li>
            <li class="dropdown">
              <a href="afiliacion.php" class="nav-link"><i class="fas fa-pen-alt"></i><span>Afiliación</span></a>
            </li>
            <li class="dropdown">
              <a href="Cotizantes.php" class="nav-link"><i class="fas fa-user-circle"></i><span>Cotizante</span></a>
              </li>
              <li class="menu-header">Usuarios</li>
              <li class="dropdown">
              <a href="usuarios.php" class="nav-link"><i class="fas fa-user-friends"></i><span>Usuario</span></a>
            </li>
            <li class="dropdown">
              <a href="Citas.php" class="nav-link"><i class="fas fa-money-check-alt"></i><span>Citas</span></a>
            </li>

            <li class="menu-header">Pagos</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="dollar-sign"></i><span>Pagos</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="pagos.php">Pagos</a></li>
                <li><a class="nav-link" href="pcumplidos.php">Pagos cumplidos</a></li>
                <li><a class="nav-link" href="pncumplidos.php">Pagos No cumplidos</a></li>
              </ul>
            </li>
            <li class="menu-header">Ayuda</li>
              <li class="dropdown">
              <a href="ayuda.php" class="nav-link"><i class="fas fa-laugh"></i><span>Ayuda</span></a>
            </li>
            <li class="dropdown">
              <a href="contacto.php" class="nav-link"><i class="fas fa-phone-volume"></i><span>Contacto</span></a>
            </li>
            <li class="dropdown">
              <a href="preguntas.php" class="nav-link"><i class="fas fa-question"></i><span>Preguntas Frecuentes</span></a>
            </li>
            
          </ul>';
          }
          if($_SESSION['rol'] == 2){
            echo '
        
            <ul class="sidebar-menu">
            <li class="menu-header">Menu </li>
            <li class="dropdown">
              <a href="TempleUs/indexUs.php" class="nav-link"><i class="fas fa-home"></i><span>Inicio</span></a>
            </li>
            <li class="menu-header">Acciones</li>
            <li class="dropdown">
              <a href="TempleUs/centroUs.php" class="nav-link"><i class="fas fa-hospital"></i><span>Centro</span></a>
            </li>
            <li class="dropdown">
              <a href="TempleUs/administradoraUs.php" class="nav-link"><i class="fas fa-hotel"></i><span>Administradora</span></a>
            </li>
            <li class="dropdown">
              <a href="TempleUs/afiliacionUs.php" class="nav-link"><i class="fas fa-pen-alt"></i><span>Afiliación</span></a>
            </li>
            <li class="menu-header">Pagos</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="dollar-sign"></i><span>Pagos</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="TempleUs/pagosUs.php">Pagos</a></li>
                <li><a class="nav-link" href="TempleUs/pcumplidosUs.php">Pagos cumplidos</a></li>
                <li><a class="nav-link" href="TempleUs/pncumplidosUs.php">Pagos No cumplidos</a></li>
              </ul>
            </li>
            <li class="menu-header">Ayuda</li>
              <li class="dropdown">
              <a href="ayuda.php" class="nav-link"><i class="fas fa-laugh"></i><span>Ayuda</span></a>
            </li>
            <li class="dropdown">
              <a href="contacto.php" class="nav-link"><i class="fas fa-phone-volume"></i><span>Contacto</span></a>
            </li>
            <li class="dropdown">
              <a href="preguntas.php" class="nav-link"><i class="fas fa-question"></i><span>Preguntas Frecuentes</span></a>
            </li>
            
          </ul>';
          }
          ?>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
         
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div  class="card-header">
                      <h2 >Cotizantes</h2>
                      <div class="card-body">
                    <button type="button" class="btn btn-success"data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fas fa-plus"></i></button>
                  </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                                         <th>#</th>
                                        <th >Nombre</th>
                                        <th >Apellido</th>
                                        <th >Cedula</th>
                                        <th >Teléfono</th> 
                                        <th >Correo</th>
                                        <th >Dirección</th> 
                                        <th>Estado</th> 
                                        <th class="centerText">Acciones</th>
                                    </tr>
                                    </thead>
                                    <?php
                $inc = include("../../Controller/conexion.php");
                if ($inc){
                  $consulta = "SELECT c.*, e.nombre AS Estado 
                                FROM cotizante c
                               INNER JOIN estado e ON e.id_estado=c.id_estado";
                  $resultado = $conexion -> query($consulta);
                  if ($resultado){
                    while($mostrar = $resultado->fetch()){
            ?>
                                    <tr>

                                        <td ><?php echo $mostrar['id_cotizante']?></td>
                                        <td><?php echo $mostrar['nombre']?></td>
                                        <td><?php echo $mostrar['apellido']?></td>
                                        <td><?php echo $mostrar['cedula']?></td>
                                        <td><?php echo $mostrar['telefono']?></td> 
                                        <td><?php echo $mostrar['correo']?></td>
                                        <td><?php echo $mostrar['direccion']?></td> 
                                        <td><?php echo $mostrar['Estado']?></td>    
                                        <th>
                                        <button type="button" class="btn btn-icon btn-info" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">
                              <i class="far fa-edit"></i>
                              </button>
                              <!--<button type="button" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo" >Consultar</button>-->
                          
                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo" >
                              <i class="far fa-trash-alt"></i>
                              </button>
                              
                                    </tr>    
                                    <?php
                                   }
                                 }
                               }
                          ?>                     
                    
                      </table>
                    </div>
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
</div>
</section>
              </div>      
              </div>
              
        </div>
        </div>
        </div>
        
        
              

            <!-- Earnings (Monthly) Card Example -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Nuevo Cotizante</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form name='formulario-js' action="../../Controller/Insert.php" method="POST" onsubmit='return validarfor()'>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Nombre</label>
                              <input type="text" class="form-control" name="nombre" id="nombre" >
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Apellido</label>
                              <input type="text" class="form-control" name="apellido" id="apellido">
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Cedula</label>
                              <input type="text" class="form-control number-only" name="cedula" id="cedula" onsubmit='return addemup()'>
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Telefono</label>
                              <input type="text" class="form-control number-only" name="telefono" id="tel" onsubmit='return addemup()'>
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Correo</label>
                              <input type="email" class="form-control" name="correo" id="correo">
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Dirección</label>
                              <input type="text" class="form-control" name="direccion" id="dire">
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Fecha pago</label>
                              <input type="date" class="form-control" name="fecha_pago" id="fecha">
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Estado</label>
                              <select name="id_estado" class="form-control">

                              <option class="form-control" name="id_estado" selected>1-Activo</option>

                              <option class="form-control"  name="id_estado" >2-Inactivo</option>
              

                              </select>
                            </div>
                            
                        </div>
                       
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-success btn-circle btn-lg" name="Insert" >
                          <i class="fas fa-check">
                          </i>
                          </button>
                        </div>
                        </form>
                      </div>
                    </div>
                    </div>
                   
                    <?php
                $inc = include("../../Controller/conexion.php");
                if ($inc){
                  $consulta = "SELECT * FROM cotizante";
                  $resultado = $conexion -> query($consulta);
                  if ($resultado){
                    while($mostrar = $resultado->fetch()){
                    
            ?>
                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                    <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Actualizar Datos</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        
                        <form action="../../Controller/update.php" method="POST" >
                        <div class="form-group">
                              <label for="recipient-name" class="col-form-label">ID</label>    
                              <input type="text" class="form-control" name="id" id="recipient-name" value="<?php echo $mostrar['id_cotizante']?>" readonly="readonly"></input>

                              <label for="recipient-name" class="col-form-label">Nombre</label>
                              <input type="text" class="form-control" name="nombre" id="recipient-name" value="<?php echo $mostrar['nombre']?>"></input>
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Apellido</label>
                              <input type="text" class="form-control" name="apellido" id="recipient-name" value="<?php echo $mostrar['apellido']?>"></input>
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Cédula</label>
                              <input type="text" class="form-control" name="cedula" id="recipient-name" value="<?php echo $mostrar['cedula']?>"></input>
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Telefono</label>
                              <input type="text" class="form-control" name="telefono" id="recipient-name" value="<?php echo $mostrar['telefono']?>"></input>
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Correo</label>
                              <input type="email" class="form-control" name="correo" id="recipient-name" value="<?php echo $mostrar['correo']?>"></input>
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Dirección</label>
                              <input type="text" class="form-control" name="direccion" id="recipient-name" value="<?php echo $mostrar['direccion']?>"></input>
                            </div>
                            
                            
                        </div>
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-circle btn-lg"  data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo" name="update">
                          <i class="fas fa-check">  </i>
                          </button>
                        </div>
                          </div>  
                        </form>
                        </div>
                          </div>  
                        </div>                        
                    <?php
                    }
                  }
                }
                ?>
                 <?php
                    $inc = include("../../Controller/conexion.php");
                    if ($inc){
                      $consulta = "SELECT * FROM cotizante ";
                      $resultado = $conexion -> query($consulta);
                      if ($resultado){
                        while($mostrar = $resultado->fetch()){
                ?>
                        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Cambiar Estado</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <form action="../../Controller/Delete.php" method="POST">
                            <div class="form-group">
                            <div class="form-check">
                            
                                 <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">ID</label>
                                  
                                  <input type="hidden" class="form-control" name="id" id="recipient-name" value="<?php echo $mostrar['id_cotizante']?>"></input>
                               
                                </div>
                                <label for="recipient-name" class="col-form-label">Estado Actual</label>
                                <input type="text" class="form-control" name="id_estado" id="recipient-name" value="<?php echo $mostrar['id_estado']?>" readonly="readonly" ></input>
                              
                                </div>
                                <div class="modal-footer">
                                <button type="submit" class="btn btn-danger  btn-lg" name="Delete" id="consult" >Actualizar
                                <i  onClick="window.location='../../Controller/Delete.php?rut=<?php echo $id; ?>';">
                                </i>
                                </button>
                                </div>
                            </div>
                            </form>
                          </div>
                        </div>
                        </div>
                        </div>
                        <?php
                        }
                      }
                    }
                        ?>                   
                    
<!---------------------------FIN MODAL----------------------------------->
        
      
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/datatables/datatables.min.js"></script>
  <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/validi.js"></script>
</body>


<!-- datatables.html  21 Nov 2019 03:55:25 GMT -->
</html>