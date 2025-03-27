<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login e Registro</title>
    <link rel="stylesheet" href="css/styles.css">
    <div class="cabecera"><p>Web Shop Emporium</p></div>
    <body>
  </head>
 
    <!-- se genero para dar manejo y encapsular todo el codigo 
     seria algo asi como un "contenedor de todo" -->
    <main>
      <!-- contiene absolutamente todo -->
      <div class="contenedor_estructura">
        <!--es la sombra que se ve en la parte trasera de el login y registro -->
        <div class="sombra_posterior">
          <div class="sombra_posterior-login">
            <h4>¿Ya tienes cuenta?</h4>
            <p>Inicia Sección Para Ingresar</p>
            <!-- boton generado para el inicio de sesión -->
            <button id="loginbt" class="login">Iniciar Sesión</button>
          </div>
          <div class="sombra_posterior-Resgistro">
            <h4>¿Todavia No Estas Registrado?</h4>
            <p>Registrate Para Ingresar a la Tienda</p>
            <!-- boton generado para registro de usuario-->
            <button id="registrarsebt" class="registrarse">Ingresar</button>
          </div>
        </div>
        <!-- en el div inferior se engloban ambos formularios tanto el de inicio de seccion como el de registro -->
        <div class="contenedor_login-resgister">
          <!-- formulario de inicio de sesión -->
          <form action="php/login_usuario_be.php" method="POST" class="formulario-login">
            <div class="texto_login"><h2>Iniciar Sesión</h2></div>
            <input type="text" placeholder="Correo Electronico" name= "correo" />
            <input type="password" placeholder="Contraseña" name="contrasena"/>
            <button>Ingresar</button>
          </form>
          <!-- Formulario de registro -->
          <form action="php/registro_usuarios_be.php" method="POST" class="formulario-register">
            <h2>Registrarse</h2>
            <input type="text" placeholder="Nombre" name= "nombre_completo" />
            <input type="text" placeholder="Correo Electronico" name = "correo" />
            <input type="text" placeholder="Usuario" name="usuario"/>
            <input type="text" placeholder="Crea Una Contraseña" name = "contrasena" />
            <button>Finalizar Registro</button>
          </form>
        </div>
      </div>
    </main>
    <script src="../Assets/js/script.js"></script>
  </body>
</html>
