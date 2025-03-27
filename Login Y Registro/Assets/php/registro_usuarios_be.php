<?php
include 'conexion_be.php'; 

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario']; 
$contrasena = $_POST['contrasena']; 
$contrasena = hash('sha512', $contrasena);

// Verificar si el correo o el usuario ya existen en la base de datos
$verificar_mail = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");

// Comprobar si ya existe un correo registrado
if (mysqli_num_rows($verificar_mail) > 0) {
    echo '
    <script>
      alert("Este correo ya se encuentra registrado, prueba uno diferente o inicia sesión en tu cuenta.");
      window.location = "../Ingreso General.php";
    </script>
    ';
    exit();
}

// Comprobar si ya existe un usuario registrado
if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
    <script>
      alert("Este usuario ya se encuentra registrado, prueba uno diferente o inicia sesión en tu cuenta.");
      window.location = "../Ingreso General.php";
    </script>
    ';
    exit();
}

// Si no hay duplicados, insertamos el nuevo usuario en la base de datos
$query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena) VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
    <script>
      alert("Usuario registrado correctamente.");
      window.location = "../Ingreso General.php";
    </script>
    ';
} else {
    echo '
    <script>
      alert("El usuario no pudo ser registrado.");
      window.location = "../Ingreso General.php";
    </script>
    ';
}

mysqli_close($conexion);
?>
