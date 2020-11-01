<?php 
include("../../Controller/Insert.php");
include("../../Controller/Select.php");
?>
<!--SESION-->
<?php
include("../../Controller/conexion.php");
session_start();
if (!isset($_SESSION['usuario'])){
  header("Location: ../Login/login.php");
}
$iduser =$_SESSION['usuario'];

$sql ="SELECT id_usuario, usuario FROM usuario WHERE usuario ='$iduser'";
$resultado =$conexion->query($sql);
$row = $resultado->fetch();
?>
<!--actualizar-->
<?php
 if(isset($_POST['consultar']))
 {    
     $id  = $_POST['id'];
     $consulta ="SELECT * FROM entidad_administradora WHERE id_ent = '$id'";
    $resultados =  $conexion -> query($consulta);
    while($consulta = $resultados->fetch()){
     $consulta=$_POST['nombre'];
  }
}

?>


<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../img/xd-removebg-preview.png">
    <title>Gestionando</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="dist/css/table.css" rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Multi Item Selection examples -->
        

        <!-- App css -->
        <link href="assets2/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets2/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets2/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets2/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets2/js/modernizr.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../../img/xd-removebg-preview (1).png" width="180" height="63" />
                            <!-- Light Logo icon -->
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search" ></i></a>
                            <form class="app-search position-absolute" action="fuctions/buscar_cot.php" method="POST">
                                <input type="text" class="form-control" placeholder="Buscar &amp; Enter" name="codigo"> <a class="srh-btn"><i class="ti-close"></i></a>
                                <button class="btn btn-primary" type="submit" value="buscar">
                  <i class="fas fa-search fa-sm"></i>
                </button>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/agent.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> Perfil</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                <a class="dropdown-item" href="../Login/cerrar.php"><i class="fa fa-power-off m-r-5 m-l-5"></i> Cerrar</a>

                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <!-- User Profile-->
                            <div class="user-profile d-flex no-block dropdown m-t-20">
                                <div class="user-pic"><img src="assets/images/users/agent.jpg" alt="users" class="rounded-circle" width="40" /></div>
                                <div class="user-content hide-menu m-l-10">
                                    <a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="op-5 user-email">  
                                            <?php
                                             echo ($row['usuario']);
                                            ?>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i>Perfil</a>
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="../Login/cerrar.php"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End User Profile-->
                        </li>
                        <!-- User Profile-->
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index1.php" aria-expanded="false"><i class="mdi mdi-home-variant"></i><span class="hide-menu">Inicio</span></a></li>
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Cotizantes.php" aria-expanded="false"><i class="mdi mdi-account-card-details"></i><span class="hide-menu">Cotizantes</span></a></li>
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="afiliacion.php" aria-expanded="false"><i class="mdi mdi-pencil-box"></i><span class="hide-menu">Afiliacion</span></a></li>
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="centro.php" aria-expanded="false"><i class="mdi mdi-hospital"></i><span class="hide-menu">Centro</span></a></li>
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="administradora.php" aria-expanded="false"><i class="mdi mdi-home-modern"></i><span class="hide-menu">Entidad administradora</span></a></li>
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="estado.php" aria-expanded="false"><i class="mdi mdi-checkbox-marked-circle"></i><span class="hide-menu">Estado</span></a></li>
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pagos.php" aria-expanded="false"><i class="mdi mdi-square-inc-cash"></i><span class="hide-menu">Pagos</span></a></li>
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="usuarios.php" aria-expanded="false"><i class="mdi mdi-account-multiple-plus"></i><span class="hide-menu">Usuario</span></a></li>



                    </ul>
                    
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
            
            <div>
                              <h2><?php echo 'Entidad administradora'; ?></h2>
                              <div class="content">

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <p class="text-muted font-14 m-b-30">
                                       Ingrese la información de las nuevas entidades, actualice los datos y cambie la entidad de un cotizante.
                                    </p>

                                    <section>
                           <div  id="dtBasicExample_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                  <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length bs-select" id="dtBasicExample_length">
                                      <label >
                                        Buscar
                                    <select name="dtBasicExample_length" aria-controls="dtBasicExample" class="custom-select custom-select-sm form-control form-control-sm">
                                      <option value="10">10</option>
                                      <option value="25">25</option>
                                      <option value="50">50</option>
                                      <option value="100">100</option>
                                    </select>
    </label>
    </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div id="dtBasicExample_filter" class="dataTables_filter">
        <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dtBasicExample">
      </label>
    </div>
  </div>
                                <table  id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                  <thead>
                                    <tr>
                                    
                                        <th class="th-sm">#</th>
                                        <th class="th-sm">nombre</th>
                                        <th class="th-sm">tipo</th>
                                        <th class="th-sm">estado</th> 
                                        <th class="centerText">Actualizar</th>
                                    </tr>
                                    </thead>
                                    <?php
                $inc = include("../../Controller/conexion.php");
                if ($inc){
                  $consulta = "SELECT ea.*, t.nombre AS tipo, e.nombre AS estado FROM entidad_administradora ea INNER JOIN tipo_entidad t ON t.id_tipo=ea.id_tipo INNER JOIN estado e ON e.id_estado=ea.id_estado";
                  $resultado = $conexion -> query($consulta);
                  if ($resultado){
                    while($mostrar = $resultado->fetch()){
            ?>
                                    <tr>

                                        <td ><?php echo $mostrar['id_ent']?></td>
                                        <td><?php echo $mostrar['nombre']?></td>
                                        <td><?php echo $mostrar['tipo']?></td>
                                        <td><?php echo $mostrar['estado']?></td>

                                        <th> 
                                        <button type="button" class="btn btn-warning   " data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo" >Actualizar
                                        <i class="glyphicon glyphicon-refresh"></i>
                                        </button>
                                        <!--<button type="button" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo" >Consultar</button>-->
                                    </tr>    
                                                            <?php
                                                              }
                                                          }
                                                        }
                                          ?>  
                    
      </table> 
      <button type="button" class="btn btn-success btn-circle-lg"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Crear</button>
      <button type="button" class="btn btn-danger  btn-circle-lg"data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo" style="margin-left: 10px">Cambiar Estado </button>
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
        
        
              

            <!-- Earnings (Monthly) Card Example -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Nueva Entidad</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form name='formulario-js' action="../../Controller/InserteEnt.php" method="POST" onsubmit='return validarfor()'>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">nombre</label>
                              <input type="text" class="form-control" name="nombre" id="nombre" >
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">tipo</label>
                              <select name="id_tipo" class="form-control">

                              <option class="form-control" name="id_tipo">1-EPS</option>

                              <option class="form-control"  name="id_tipo" >2-ARL</option>

                              <option class="form-control"  name="id_tipo" >3-CCF</option>

                              <option class="form-control"  name="id_tipo" >4-AFP</option>
              

                              </select>
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
                          <button type="button" class="btn btn-danger btn-circle btn-lg" data-dismiss="modal">X</button>
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
                  $consulta = "SELECT * FROM Entidad_administradora";
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
                              <label for="recipient-name" class="col-form-label">nombre</label>
                              
                              <input type="text" class="form-control" name="nombre" id="recipient-name" value="<?php echo $mostrar['nombre']?>"></input>
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">id_centro</label>
                              <input type="text" class="form-control" name="id_centro" id="recipient-name" value="<?php echo $mostrar['id_tipo']?>"></input>
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">id_tipo</label>
                              <input type="text" class="form-control" name="id_tipo" id="recipient-name" value="<?php echo $mostrar['id_estado']?>"></input>
                            </div>
                        </div>
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-circle btn-lg"  data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo" name="update">
                          <i class="fas fa-check">  </i>
                          </button>
                       
                        <button type="button" class="btn btn-danger btn-circle btn-lg" data-dismiss="modal">X</button>
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
                      $consulta = "SELECT * FROM entidad_administradora";
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
                                  
                                  <input type="text" class="form-control" name="id_ent" id="recipient-name" value="<?php echo $mostrar['id_ent']?>"></input>
                               
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
                        <?php
                        }
                      }
                    }
                        ?>
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <footer class="footer text-center">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Gestionando |</i> por <a href="https://mercadoslogisticaytecnologia.blogspot.com/p/blog-page_2.html" target="_blank">SENA</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.js"></script>
    <script src="js/table.js"></script>
    <script src="js/Validi.js"></script>
</body>

</html>


