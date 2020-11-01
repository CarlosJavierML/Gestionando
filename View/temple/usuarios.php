<!--SESION-->
<?php
include("../../Controller/conexion.php");
include("../../Controller/conexionlog.php");
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
            <div class="container">                
            <ul class="breadcrumb">
          <li class="breadcrumb-item active">Gestionando</li>
            <li class="breadcrumb-item "><a href="usuarios.php">Usuarios</a></li>
          </ul>
</div>
              <div class="col-12">
                <div class="card">
                  <div  class="card-header card-body d-flex justify-content-between align-items-center">
                  
                      <h2 >Crear nuevos usuarios</h2> 
                      <a  type="button" class="btn btn-primary btn-lg" href="inUs.php"  >Ver usuarios registrados</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                                         <th>#</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Cédula</th>
                                        <th>Teléfono</th> 
                                        <th>Correo</th>
                                        <th>Dirección</th> 
                                        <th>Estado</th>
                                        <th>Acciones</th> 
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
                                        <td>

                           <a type="button"  class="btn btn-success" href="../Login/register.php">
                           <i class="fas fa-plus"></i>
                           </a>
                  

                  </td>
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
                <div class="row">
        <div class="col-sm-12 col-md-5">
        </div>
        <div class="col-sm-12 col-md-7">
          <div class="dataTables_paginate paging_simple_numbers" id="dtBasicExample_paginate">
            <ul class="pagination"><li class="paginate_button page-item previous disabled" id="dtBasicExample_previous">
              <a href="#" aria-controls="dtBasicExample" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
            </li>
            <li class="paginate_button page-item active">
              <a href="#" aria-controls="dtBasicExample" data-dt-idx="1" tabindex="0" class="page-link">1</a>
            </li>
            <li class="paginate_button page-item ">
              <a href="#" aria-controls="dtBasicExample" data-dt-idx="2" tabindex="0" class="page-link">2</a>
            </li>
            <li class="paginate_button page-item "><a href="#" aria-controls="dtBasicExample" data-dt-idx="3" tabindex="0" class="page-link">3</a>
          </li><li class="paginate_button page-item ">
            <a href="#" aria-controls="dtBasicExample" data-dt-idx="4" tabindex="0" class="page-link">4</a>
        </li><li class="paginate_button page-item ">
          <a href="#" aria-controls="dtBasicExample" data-dt-idx="5" tabindex="0" class="page-link">5</a>
        </li>
        <li class="paginate_button page-item ">
          <a href="#" aria-controls="dtBasicExample" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
          <li class="paginate_button page-item next" id="dtBasicExample_next">
            <a href="#" aria-controls="dtBasicExample" data-dt-idx="7" tabindex="0" class="page-link">Siguiente</a>
          </li>
        </ul>
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
       
                
<!---------------------------FIN MODAL----------------------------------->
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="templateshub.net">Templateshub</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
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
</body>


<!-- datatables.html  21 Nov 2019 03:55:25 GMT -->
</html>