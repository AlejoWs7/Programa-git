<?php
session_start();
include 'conexion_be.php';
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$validar_ingreso = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and contrasena = '$contrasena'");

if(mysqli_num_rows($validar_ingreso) > 0 ){
    $_SESSION['usuario'] = $correo;
    header("Location: http://localhost/1.0%20Web%20Shop/php/Tienda.php");

    exit;
    
}else{
    echo'
    <script>
    alert ("correo o contraseñas incorrectas, verifique e ingrese nuevamente")
    window.location = "../Ingreso General.php";
    </script>';
    exit;
}

?>