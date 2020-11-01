
<?php session_start();

if(isset($_SESSION['usuario'])) {
    header('location: ../temple/usuarios.php');
}else{
    header('location: login.php');
}


?>