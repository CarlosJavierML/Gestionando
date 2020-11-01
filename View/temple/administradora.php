<!--SESION-->
<?php
include("../../Controller/conexion.php");

session_start();
if(empty($_SESSION['active']))
	{
		header('location: ../');
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
              
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
        
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/user.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Bienvenido  <span class="op-5 user-email">  
                                            <?php
                                             echo $_SESSION['user'].' -'.$_SESSION['rol']; 
                                            ?>
                                        </span></div>
              <a href="profile.html" class="dropdown-item has-icon"> <i class="far
                    fa-user"></i> Perfil
              </a>
               
              <a href="../Login/cerrar.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Cerrar
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php"> <img alt="image" src="../../img/xd-removebg-preview (1).png" width="180" height="60"/> 
               
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
                    <font color="#295566"><h3>Entidades administradoras</h3></font>  
                      <div class="card-body">
                  </div>
                  <a href="#addnew" class="btn btn-info" data-toggle="modal"><span class="fas fa-plus"></span>Nueva entidad</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                    <?php
                        include("conexion/function.php");
                      ?>
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                            <th>Acción</th>
                          </tr>
                        </thead>
                        
                        <tbody>
                        <?php 
                              $sql = "SELECT ea.*, t.nombre AS tipo, e.nombre AS estado FROM entidad_administradora ea 
                              INNER JOIN tipo_entidad t ON t.id_tipo=ea.id_tipo 
                              INNER JOIN estado e ON e.id_estado=ea.id_estado";
                              $result = db_query($sql);
                              while($row = mysqli_fetch_object($result)){
                              ?>
                              <tr>
                              <td><?php echo $row->id_ent;?></td>
                                <td><?php echo $row->nombre;?></td>
                                <td><?php echo $row->tipo;?></td>
                                <td><?php echo $row->estado;?></td>
                                <td>
                            <a href="administradoras/editar.php?id_ent=<?php echo $row->id_ent; ?>" class="btn btn-warning btn-sm">
                            <span class="far fa-edit"></span></a>
                                    </td>
                              </tr>
                              <?php } ?>
                            </tbody>
                        
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
         </footer>
    </div>
  </div>
  <?php include('administradoras/AgregarModal.php'); ?>
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